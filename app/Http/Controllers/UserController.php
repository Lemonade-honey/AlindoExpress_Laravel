<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $userService;

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    /**
     * Default halaman berupa list user/staff
     */
    public function index(){
        $users = $this->userService->getAllUser();
        return view('User/user-list', compact('users'));
    }

    /**
     * GET Search User name or email
     */
    public function search(Request $request){
        $searchInput = $request->input('search');

        $users = $this->userService->searchUsers($searchInput);

        return view('User/user-list', compact('users'));
    }

    /**
     * GET User Account Create
     * 
     * ADMIN ONLY
     */
    public function createAccount(){
        return view('User/user-create');
    }
}
