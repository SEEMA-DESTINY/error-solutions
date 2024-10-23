<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class QuickbookAuthController extends Controller
{
    public function auth(Request $request)
    {
        try {
            return view('quickbook.auth');
        } catch (Exception $e) {
            Log::error("QuickbookAuthController.php:- auth() : ", ["Exception" => $e->getMessage(), "\nTraceAsString" => $e->getTraceAsString()]);
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
