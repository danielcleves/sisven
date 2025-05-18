<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\PayMode;
use Illuminate\Http\Request;

class PayModeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payModes = PayMode::all();
        return json_encode(['payModes' => $payModes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payMode = new PayMode();
        $payMode->name = $request->input('name');
        $payMode->observation = $request->input('observation');
        $payMode->save();

        return json_encode(['payMode' => $payMode]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payMode = PayMode::find($id);
        return json_encode(['payMode' => $payMode]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payMode = PayMode::find($id);
        $payMode->name = $request->input('name');
        $payMode->observation = $request->input('observation');
        $payMode->save();

        return json_encode(['payMode' => $payMode]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $payMode = PayMode::find($id);
        $payMode->delete();

        $payModes = PayMode::all();
        return json_encode(['payModes' => $payModes, 'success' => true]);
    }
}
