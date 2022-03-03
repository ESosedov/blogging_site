<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLogin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {

        $validateRules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3|confirmed'
        ];
        $validateMessages =[
            'name.required'=>'Поле Имя обязательное',
            'email.required'=>'Поле Email обязательное',
            'email.email'=>'Поле Email должно содержать email',
            'email.unique'=>'Пользователь с данным email уже зарегистрирован',
            'password.required'=>'Поле Пароль обязательное',
            'password.min'=>'Поле пароль должно содержать минимум 3 знака',
            'password.confirmed'=>'Введенные пароли не совпадают'

        ];
        Validator::make($request->all(),$validateRules,$validateMessages)->validate();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        session()->flash('success', 'Вы успешно зарегистрированы');
        Auth::login($user);
        return redirect()->home();
    }

    public function loginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $validateRules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $validateMessages =[
            'email.required'=>'Поле Email обязательное',
            'email.email'=>'Поле Email должно содержать email',
            'password.required'=>'Поле Пароль обязательное',
        ];
        Validator::make($request->all(),$validateRules,$validateMessages)->validate();

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            session()->flash('success', 'Вы успешно авторизованны.');
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.index');
            } else {
                return redirect()->back();
            }
        }
        return redirect()->back()->with('error', 'Неверный логин или пароль');
    }

    public function logout()
    {
        Auth::logout();;
        return redirect()->home();
    }
}
