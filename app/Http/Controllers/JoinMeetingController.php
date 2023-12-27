<?php

namespace App\Http\Controllers;

use App\Models\JoinMeeting;
use App\Models\Meeting;
use Illuminate\Http\Request;

class JoinMeetingController extends Controller
{
    public function getMeetingAfterJoin()
    {
        $join = JoinMeeting::with("meeting", "user")->get();
        return response()->json($join);
    }
    public function processJoinMeeting(Request $request)
    {
        try {
            $request->validate([
                'token_meeting' => 'required',
                'user_id' => 'required|exists:users,id',
            ]);

            // Find the meeting by the provided token_meeting
            $meeting = Meeting::where('token_meeting', $request->input('token_meeting'))->first();

            if (!$meeting) {
                return response()->json([
                    'error' => 'Meeting not found',
                ], 404);
            }

            // Check if the user has already joined the meeting
            $existingJoin = JoinMeeting::where([
                'meeting_id' => $meeting->id,
                'user_id' => $request->input('user_id'),
            ])->first();

            if ($existingJoin) {
                return response()->json([
                    'error' => 'User already joined the meeting',
                ], 400);
            }

            // Create a new JoinMeeting record
            JoinMeeting::create([
                'meeting_id' => $meeting->id,
                'token_meeting' => $request->input('token_meeting'),
                'user_id' => $request->input('user_id'),
            ]);

            return response()->json([
                'message' => 'Successfully joined the meeting',
            ], 200);
        } catch (\Exception $e) {
            dd($e->getMessage());

            return response()->json([
                'error' => 'Internal Server Error',
            ], 500);
        }
    }
}