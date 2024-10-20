<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255', // 必須、文字列、最大255文字
            'email' => 'required|email|unique:users,email|max:255', // 必須、メール形式、ユニーク、最大255文字
            'password' => 'required|string|min:8|confirmed', // 必須、文字列、最小8文字、確認フィールド（password_confirmation）と一致
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '氏名は必須です。',
            'email.required' => 'メールアドレスは必須です。',
            'email.email' => 'メールアドレスの形式が正しくありません。',
            'email.unique' => 'このメールアドレスはすでに登録されています。',
            'password.required' => 'パスワードは必須です。',
            'password.min' => 'パスワードは少なくとも8文字以上でなければなりません。',
            'password.confirmed' => 'パスワードが一致しません。', // 確認フィールドと一致しない場合のメッセージ
        ];
    }
}
