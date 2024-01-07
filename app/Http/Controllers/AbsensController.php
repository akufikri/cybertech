<?php

namespace App\Http\Controllers;

use App\Models\Absens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsensController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'meeting_id' => 'required|exists:meetings,id',
            'states' => 'required|boolean',
            'optional' => 'nullable|string|max:255',
        ]);

        // $user = Auth::user();
        // if (!$user) {
        //     return response()->json(['error' => 'Unauthorized action'], 403);
        // }

        $absen = new Absens();
        $absen->user_id = $request->user_id;
        $absen->meeting_id = $request->meeting_id;
        $absen->states = $request->states;
        $absen->optional = $request->optional;
        $absen->save();

        return response()->json(['message' => 'Attendance record created successfully'], 201);
    }
    public function get()
    {
        $data = Absens::with('user', 'meeting')->get();
        return response()->json($data);
    }
}
