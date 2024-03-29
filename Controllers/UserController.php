<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
// Opzetten van je database in de controller. Onderstaande betreft een registratie formulier / login
{
    public function register(Request $request){
        $incommingFields = $request->validate([
            'username' => ['required', 'min:3', 'max:20', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:12', 'confirmed']
        ]);

        $incommingFields['password'] = bcrypt($incommingFields['password']);

        User::create($incommingFields);
    return 'Hello from register';

    }
}