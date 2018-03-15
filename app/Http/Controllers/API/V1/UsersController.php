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

    public function editProfile(Request $request)
    {
        $user = \Auth::user();
        $user->fill($request->all());

        /**
         * Store image if exists
         */
        if ($request->hasFile('avatar')) {
            $fileName = $user->id . '_' . uniqid() . '.jpg';
            $request->avatar->storeAs('/', $fileName, 'public');
            $user->avatar = $fileName;
        }
        if ($user->save()) {
            return response()->json($user, 200);
        } else {
            return response()->json(['error' => 'Request error'], 400);
        }
    }
}
