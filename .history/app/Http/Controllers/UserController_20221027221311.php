<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user =  auth()->user()->with('orders');
        dd($user);
        return view('dashboard', [
            'user' => $user
        ]);
    }
}
