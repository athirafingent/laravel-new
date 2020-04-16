<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Services\UserService;


class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return view('users.index');
    }

    public function search(Request $request)
    {
        try {
            $user = User::findOrFail($request->input('user_id'));
            // $user = $this->userService->search($request->input('user_id'));
        } catch (\App\Exceptions\UserNotFoundException $exception) {
            report();
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('users.search', compact('user'));
    }
}
