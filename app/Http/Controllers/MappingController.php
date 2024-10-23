<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MappingController extends Controller
{
    public function Customer(){
        try {
            return view('mapping.customer.index');
        } catch (Exception $e) {
            Log::error("QuickbookAuthController.php:- auth() : ", ["Exception" => $e->getMessage(), "\nTraceAsString" => $e->getTraceAsString()]);
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
