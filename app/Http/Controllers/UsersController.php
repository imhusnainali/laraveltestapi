<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function index() {
        $users = User::paginate(30);
        return view('users', [
            'users' => $users,
        ]);
    }

    public function detail($id)
    {
        $user = User::findOrfail($id);
        return view('detail', ['user' => $user]);
    }
}
