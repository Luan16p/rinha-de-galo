<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function submit_credentials(Request $request) {
        return $request->json()->all();
    }

    public function access_credentials(Request $request) {
        return User::find($request->id);
    }
}
