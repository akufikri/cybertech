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
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
                'role' => 'nullable',
                'gen' => 'nullable',
                'divisi_id' => 'nullable'
            ]);

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->role = $request->role;
            $user->gen = $request->gen;
            $user->divisi_id = $request->divisi_id;
            $user->save();

            return response()->json([
                'messages' => 'Successfully SignUp',
                'data' => $user
            ], 200);
        } catch (ValidationException $e) {
            if ($e->errors()['email'][0] == 'The email has already been taken.') {
                return response()->json([
                    'message' => 'User already exists',
                ], 400);
            }
            return response()->json([
                'error' => $e->errors(),
            ], 400);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Internal Server Error',
            ], 500);
        }
    }

    public function signin(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6', // Tambahkan validasi panjang minimal password
            ], [
                'email.required' => 'Email is required.',
                'email.email' => 'Invalid email format.',
                'password.required' => 'Password is required.',
                'password.min' => 'Password must be at least 6 characters long.', // Pesan untuk validasi panjang minimal
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
                    'message' => 'Invalid credentials',
                ], 401);
            }
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Internal Server Error',
            ], 500);
        }
    }

    public function getAllUser()
    {
        $users = User::with('divisi')->get();

        return response()->json([
            'data' => $users
        ], 200);
    }
}