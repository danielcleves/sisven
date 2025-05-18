<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return json_encode(['customers' => $customers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->document_number = $request->input('document_number');
        $customer->first_name = $request->input('first_name');
        $customer->last_name = $request->input('last_name');
        $customer->addres = $request->input('addres');
        $customer->birthday = $request->input('birthday');
        $customer->phone_number = $request->input('phone_number');
        $customer->email = $request->input('email');
        $customer->save();

        return response()->json(['customer' => $customer]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::find($id);
        return json_encode(['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::find($id);
        $customer->document_number = $request->input('document_number');
        $customer->first_name = $request->input('first_name');
        $customer->last_name = $request->input('last_name');
        $customer->addres = $request->input('addres');
        $customer->birthday = $request->input('birthday');
        $customer->phone_number = $request->input('phone_number');
        $customer->email = $request->input('email');
        $customer->save();

        return response()->json(['customer' => $customer]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        $customers = Customer::all();
        return json_encode(['customers' => $customers , 'success' => true]);
    }
}
