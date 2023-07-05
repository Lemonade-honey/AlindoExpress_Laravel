<?php

namespace App\Services;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Validator;
class UserService{

    /**
     * Create Account
     */
    public function create($data): bool{

        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email', // cek jika email blm pernah dibuat
            'password' => 'required|min:6',
            'password_confirmation' => 'required|required_with:password|same:password|min:6'
        ]);

        if($validator->fails()){
            throw new Exception($validator->errors()->first());
        }

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => 'staf'
        ]);


        return true;
    }

    /**
     * Delete
     */
    public function delete($idUser){
        try{
            $user = User::find($idUser);
            if($user != null){
                $user->delete();
            }else{
                throw new Exception('Akun tidak ditemukan');
            }
        } catch (Exception $ex){
            throw $ex;
        }

        return true;
    }

    /**
     * Mengambil semua data User
     */
    public function getAllUser($perPage = 10){
        return User::paginate($perPage);
    }

    /**
     * Mencari data user berdasarkan nama atau email
     */
    public function searchUsers($searchTerm){
        $users = User::query()
            ->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%');
            })
            ->orWhere(function ($query) use ($searchTerm) {
                $query->where('email', 'like', '%' . $searchTerm . '%');
            })
            ->paginate(10);

        return $users;
    }
}