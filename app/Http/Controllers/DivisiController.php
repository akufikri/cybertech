<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class DivisiController extends Controller
{
    public function getDivisi()
    {
        try {
            $divisi = Divisi::all();
            return response()->json($divisi);
        } catch (\Exception $e) {
            dd($e->getMessage());
            return response()->json([
                'error' => 'Internal Server Error',
            ], 500);
        }
    }
    public function createDivisi(Request $request)
    {
        try {
            $request->validate([
                'divisi_name'
            ]);
            $divisi = Divisi::create($request->all());

            return response()->json([
                'messages' => 'Successfully created divisi!',
                'callback_data' => $divisi
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
    public function deleteDivisi($id)
    {
        try {
            $divisi = Divisi::find($id);

            // Check if the Divisi exists
            if (!$divisi) {
                return response()->json([
                    'error' => 'Divisi not found',
                ], 404);
            }

            // Delete the Divisi
            $divisi->delete();

            return response()->json([
                'message' => 'Successfully delete divisi!',
            ], 200);
        } catch (\Exception $e) {
            dd($e->getMessage());
            return response()->json([
                'error' => 'Internal Server Error',
            ], 500);
        }
    }

    public function getByIdDivisi($id)
    {
        try {
            $divisi = Divisi::find($id);

            // Check if the Divisi exists
            if (!$divisi) {
                return response()->json([
                    'error' => 'Divisi not found',
                ], 404);
            }

            return response()->json($divisi);
        } catch (\Exception $e) {
            dd($e->getMessage());
            return response()->json([
                'error' => 'Internal Server Error',
            ], 500);
        }
    }
    public function updateDivisi(Request $request, $id)
    {
        try {
            $request->validate([
                'divisi_name' => 'required',
            ]);

            // Find the Divisi by ID
            $divisi = Divisi::find($id);

            // Check if the Divisi exists
            if (!$divisi) {
                return response()->json([
                    'error' => 'Divisi not found',
                ], 404);
            }

            // Update Divisi data
            $divisi->update($request->all());

            return response()->json([
                'message' => 'Successfully updated divisi!',
                'callback_data' => $divisi,
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
}
