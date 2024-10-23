<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ChangePasswordController extends Controller
{
    public function index(Request $request)
    {
        $title= "Change Password";
        return view('auth.changepassword',compact('title'));
    }

    public function store(Request $request)
    {
        $rules = [
            'current_password' => ['required', function ($attribute, $value, $fail) {
                if (!Hash::check($value, Auth::user()->password)) {
                    $fail('Old Password didn\'t match');
                }
            },
        ],
            // 'current_password' => ['required'],
            'new_password' => ['required','different:current_password'],
            'new_confirm_password' => ['same:new_password'],
        ];
        $validator = Validator::make($request->all(), $rules, [
            'required' => 'Required',
        ]);

        if ($validator->fails()) {
            return Response::json(array(
                'error' => true,
                'errors' => $validator->getMessageBag(),
                'success' => false,
                'msg' => "",
            ));
        } else {
            User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

            return Response::json(array(
                'error' => false,
                'errors' => null,
                'route' => route('dashboard'),
                'success' => true,
                'msg' => "Password Change successfully.",
            ));
        }
    }
}
