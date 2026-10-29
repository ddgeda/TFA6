<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Retrieve all user records from the database via Eloquent
        $users = User::all();

        // Pass the records to your Blade view (adjust the view name if yours differs, e.g., 'users.index')
        return view('users.index', compact('users'));
    }
}