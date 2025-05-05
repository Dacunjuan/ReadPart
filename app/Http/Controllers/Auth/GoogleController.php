<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class GoogleController extends Controller
{
    // 重定向到 Google 登入頁面
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // 處理 Google 回調
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('email', $googleUser->email)->first();

            if ($user) {
                // 如果用戶存在，更新 Google ID
                $user->update(['google_id' => $googleUser->id]);
            } else {
                // 如果用戶不存在，創建新用戶
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'password' => bcrypt(Str::random(16)), // 隨機密碼
                ]);
            }

            // 登入用戶
            Auth::login($user, true);

            // 重定向到首頁或指定頁面
            return redirect()->intended(route('posts.list', absolute: false));
        } catch (\Exception $e) {
            // 處理錯誤
            return redirect('/login')->with('error', 'Google 登入失敗，請重試。');
        }
    }
}