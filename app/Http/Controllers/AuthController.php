<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function registerSubmit(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:members,email',
            'password' => 'required|string|min:6',
        ]);
        
        $validatedData['password'] = Hash::make($request->password); 
        
        
        $user = Member::create($validatedData);
        
       
        Auth::login($user);
        
       
        return redirect()->route('dashboard')->with('success', 'تم تسجيلك بنجاح!');
    }
    
       
    public function loginSubmit(Request $request)
    {
        $credentials = $request->only('email', 'password');
      
        if (Auth::attempt($credentials)) {
            
            return redirect()->route('dashboard')->with('success', 'تم تسجيل الدخول بنجاح!');
        } else {
            
            return redirect()->back()->with('error', 'البريد الإلكتروني أو كلمة المرور غير صحيحة.');
        }
    }
    
    public function dashboard()
    {
        return view('dashboard', ['user' => Auth::user()]);
    }
}
