<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function search(Request $request)
    {
        try {
            $user = User::findOrFail($request->input('user_id'));
        } catch (UserNotFoundException $exception) {
            report5($exception);
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('users.search', compact('user'));
    }
}
