<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller {
    
    // Page login in folder auth
    public function create() {
        
        return view('auth.login');
    }

    // Functions to check empty or non-existent fields
    public function store() {
        
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again',
            ]);

        } else {

            if(auth()->user()->role == 'admin') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->to('/');
            }
        }
    }

    // Logout functions
    public function destroy() {

        auth()->logout();

        return redirect()->to('/');
    }
}