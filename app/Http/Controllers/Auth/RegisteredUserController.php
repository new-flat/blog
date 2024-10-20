<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * ユーザー登録画面を表示する
     * 
     * @return view
     */
    public function create() 
    {
        return view('auth.register');
    }

    /**
     * ユーザー登録する
     * 
     * @return view
     */
    public function store(UserRequest $request) 
    {
        try {
            // ユーザー登録処理
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // 登録成功のメッセージをセッションに設定
            return redirect()->route('login')->with('success', 'ユーザー登録が完了しました。');
        } catch(\Throwable $e) {
           // 例外発生時の処理
           return back()->withErrors(['error' => 'ユーザー登録中にエラーが発生しました。'])->withInput();
        }
    }
}
