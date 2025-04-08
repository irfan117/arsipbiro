<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'admin')->get();
        return view('admin.index', compact('users'));
    }
}
