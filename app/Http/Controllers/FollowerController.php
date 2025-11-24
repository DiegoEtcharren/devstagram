<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    //
    public function store(Request $request, User $user) {
        dd($user->username);
    }

    public function destroy(Request $request, User $user) {
        dd('Desde Destroy');
    }
}
