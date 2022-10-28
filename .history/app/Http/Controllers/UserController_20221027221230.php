<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user =  auth()->user()->with('orders');
        return view('dashboard', [
            'user' => $user
        ]);
    }
}
