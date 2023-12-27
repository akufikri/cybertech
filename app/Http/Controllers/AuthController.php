<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|max:100',
                'email' => 'required|email',
                'password' => 'required',
                'role' => 'required',
                'gen' => 'nullable',
                'divisi_id' => 'nullable'
            ]);

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->role = 'user';
            $user->gen = $request->gen;
            $user->divisi_id = $request->divisi_id;
            $user->save();

            return response()->json([
                'messages' => 'Successfully SignUp',
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
    public function signin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $user = auth()->user();

            return response()->json([
                'message' => 'Successfully signed in',
                'user' => $user,
                'remember_token' => $user->createToken('authToken')->accessToken,
            ], 200);
        } else {
            return response()->json([
                'error' => 'Invalid credentials',
            ], 401);
        }
    }
    public function getAllUser()
    {
        // Eager load the 'divisi' relationship
        $users = User::with('divisi')->get();

        return response()->json([
            'data' => $users
        ], 200);
    }
}
