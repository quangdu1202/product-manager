<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\ApiController;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::where('admin', Customer::REGULAR_USER)->get();

        return $this->getAll($customers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customers = Customer::where('admin', Customer::REGULAR_USER)->where('id', $id)->get();

        return $this->getAll($customers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
