<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = new User;

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users|max:255',
        ]);
        
        if($validator->fails()){
            return redirect('/SignUp')
                        ->withErrors($validator)
                        ->withInput();
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('/SignUp')->with('success','User succesfully added to database');
        
    }
}
