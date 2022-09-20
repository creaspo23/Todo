<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return inertia()->render('Dashboard/users/index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return inertia()->render('Dashboard/users/create');
    }

    public function store(UserStoreRequest $request )
    {
        $data =  $request->validated();
   
        User::create($data);


        session()->flash('toast', [
            'type' => 'success',
            'message' => 'User created successfully'
        ]);

        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return inertia()->render('Dashboard/users/edit', ['user' => $user]);
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $data = $request->validated();

        if ($request->has('password')) {
            $data['password'] = Hash::make($data['password']);
        }

        $user->update($data);

        session()->flash('toast', [
            'type' => 'success',
            'message' => 'User updated successfully'
        ]);

        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        session()->flash('toast', [
            'type' => 'error',
            'message' => 'User deleted successfully'
        ]);

        return redirect()->back();
    }
}
