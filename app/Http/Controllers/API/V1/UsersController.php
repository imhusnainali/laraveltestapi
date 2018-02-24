<?php

namespace App\Http\Controllers\API\V1;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function index($id = null) {
        if ($id) {
            $user = User::findOrFail($id);
            return ['data' => $user];
        } else {
            $users = User::paginate(30);
            return $users;
        }
    }
}
