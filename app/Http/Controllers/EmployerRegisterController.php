<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Company;
use App\Models\User;

class EmployerRegisterController extends Controller
{
    public function employerRegister(Request $request)
    {

        $this->validate($request, [
            'cname' => 'required|string|max:60',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user =  User::create([
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'user_type' => request('user_type'),
        ]);
        Company::create([
            'user_id' => $user->id,
            'cname' => request('cname'),
            'slug' => str_slug(request('cname'))
        ]);
        return redirect()->back()->with('message', 'Veuillez vérifier votre e-mail en cliquant sur le lien envoyé à votre adresse e-mail');
    }
}