<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function showRegistersById(Request $request) {
        return User::find($request->id);
    }

    public function index() {
        return 'API da rinha de galo -- Consulte por id digitando /test/{id}';
    }
}
