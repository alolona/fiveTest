<?php
// app/Http/Controllers/AuthController.php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;class AuthController extends Controller
{
public function showRegisterForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255', 
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:4',
        ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);
            return redirect()->route('home');
        }
            public function showLoginForm()
            {
                return view('auth.login');
            }
            public function login(Request $request)
            {
                $credentials = $request->only('email', 'password');
                if (Auth::attempt($credentials)) return redirect()->route('home');
                return back()->withErrors(['email' => 'Invalid credentials']);
            }
            public function logout()
            {
                Auth::logout();
                return redirect()->route('home');
 }
}