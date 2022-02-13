<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLogin;
use App\Http\Requests\StoreRegister;
use App\Models\User;
use Facade\Ignition\Middleware\AddQueries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(StoreRegister $request)
    {

        $user = User::create([
            'name' => $request->name,
        'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);

        session()->flash('success','Вы успешно зарегистрированы');
        Auth::login($user);
        return redirect()->home();
    }

    public function loginForm(){

        return view('user.login');
    }
    public function login(StoreLogin $request){

        if(Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ])){
            session()->flash('success','Вы успешно авторизованны.');
            if(Auth::user()->is_admin){
                return redirect()->route('admin.index');
            }else{
                return redirect()->home();
            }
        }
        return redirect()->back()->with('error', 'Неверный логин или пароль');
    }
    public function logout(){
        Auth::logout();;
        return redirect()->route('login.create');
    }
}
