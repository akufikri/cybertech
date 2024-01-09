<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class MeetingController extends Controller
{
    public function getMeeting()
    {
        $meeting = Meeting::with('author')->get();

        return response()->json($meeting);
    }
    public function createMeeting(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'date' => 'required|date',
                'time' => 'required',
                'location' => 'required',
                'gen' => 'required',
                'author_id' => 'required|exists:users,id',
                'token_meeting' => 'unique:meetings,token_meeting',
            ]);

            $token_meeting = substr(md5(uniqid()), 0, 5);
            $meeting = Meeting::create([
                'name' => $request->input('name'),
                'date' => $request->input('date'),
                'time' => $request->input('time'),
                'gen' => $request->input('time'),
                'location' => $request->input('location'),
                'author_id' => $request->input('author_id'),
                'token_meeting' =>  $token_meeting
            ]);

            return response()->json([
                'message' => 'Meeting created successfully',
                'data' => $meeting,
            ], 201);
        } catch (ValidationException $e) {
            return response()->json([
                'error' => $e->errors(),
            ], 400);
        } catch (\Exception $e) {
            dd($e->getMessage());

            return response()->json([
                'error' => 'Internal Server Error',
            ], 500);
        }
    }
    public function getMeetingById($id)
    {
        try {
            $meeting = Meeting::with('author')->find($id);

            if (!$meeting) {
                return response()->json([
                    'error' => 'Meeting not found',
                ], 404);
            }

            return response()->json($meeting);
        } catch (\Exception $e) {
            dd($e->getMessage());

            return response()->json([
                'error' => 'Internal Server Error',
            ], 500);
        }
    }
    public function updateMeeting(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'date' => 'required|date',
                'time' => 'required',
                'location' => 'required',
                'gen' => 'required',
                'author_id' => 'required|exists:users,id',
            ]);

            $meeting = Meeting::find($id);

            if (!$meeting) {
                return response()->json([
                    'error' => 'Meeting not found',
                ], 404);
            }

            $meeting->update([
                'name' => $request->input('name'),
                'date' => $request->input('date'),
                'time' => $request->input('time'),
                'gen' => $request->input('time'),
                'location' => $request->input('location'),
                'author_id' => $request->input('author_id'),
            ]);

            return response()->json([
                'message' => 'Meeting updated successfully',
                'data' => $meeting,
            ], 200);
        } catch (ValidationException $e) {
            return response()->json([
                'error' => $e->errors(),
            ], 400);
        } catch (\Exception $e) {
            dd($e->getMessage());

            return response()->json([
                'error' => 'Internal Server Error',
            ], 500);
        }
    }
    public function deleteMeeting($id)
    {
        try {
            $meeting = Meeting::find($id);

            if (!$meeting) {
                return response()->json([
                    'error' => 'Meeting not found',
                ], 404);
            }

            $meeting->delete();

            return response()->json([
                'message' => 'Meeting deleted successfully',
            ], 200);
        } catch (\Exception $e) {
            dd($e->getMessage());

            return response()->json([
                'error' => 'Internal Server Error',
            ], 500);
        }
    }
}