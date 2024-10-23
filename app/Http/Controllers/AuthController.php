<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function loginCheck(Request $request)
    {
        try {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->route('dashboard');
            }
            return redirect()->route('login')->with('error', 'Invalid credentials. Please try again.');
        } catch (Exception $e) {
            Log::error("AuthController.php:- loginCheck() : ", ["Exception" => $e->getMessage(), "\nTraceAsString" => $e->getTraceAsString()]);
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function logout()
    {
        try {
            Auth::logout();
            return redirect()->route('login');
        } catch (Exception $e) {
            Log::error("AuthController.php:- logout() : ", ["Exception" => $e->getMessage(), "\nTraceAsString" => $e->getTraceAsString()]);
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
