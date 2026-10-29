<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
{
    $customers = \App\Models\Customer::all(); 
    return view('customers.index', compact('customers'));
}
}