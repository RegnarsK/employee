<?php

namespace App\Http\Controllers;

use App\Models\Employee1;
use Illuminate\Http\Request;

class Employee1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('employee.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
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
    public function show(Employee1 $employee1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee1 $employee1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee1 $employee1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee1 $employee1)
    {
        //
    }
}
