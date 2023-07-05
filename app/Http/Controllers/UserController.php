<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Exception;
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

    /**
     * POST User Account Create
     */
    public function postCreateAccount(Request $request){
        try{
            if($this->userService->create($request->input())){
                return redirect('/dashboard/staf')->with('success', 'Akun berhasil ditambahkan');
            }else{
                throw new Exception('Error at Create Account, Try again leter');
            }
        } catch(Exception $ex){
            // die($ex->getMessage());
            return redirect('/dashboard/staf/create')->withErrors($ex->getMessage());
        }
    }

    /**
     * Delete Account
     */
    public function deleteAccount(int $idUser){
        try{
            $this->userService->delete($idUser);
            return redirect()->back()->with('success', 'Akun berhasil dihapus');
        } catch(Exception $ex){
            return redirect('/dashboard/staf')->withErrors($ex->getMessage());
        }
    }
}
