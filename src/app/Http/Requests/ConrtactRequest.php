<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConrtactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_name' => ['required'],
            'furigana' => [],
            'mail_address' => ['email', 'confirmed', 'required'],
            'mail_address_confirmation' => ['email', 'required'],
            'phone_number' => [],
            'Inquiry_content' => ['required'],
        ];
    }

    /**
     * 定義済みバリデーションルールのエラーメッセージ取得
     *
     * @return array
     */
    public function messages()
    {
        return [
            'user_name.required' => '氏名は必須入力です',
            'mail_address.email' => 'メールアドレスが正しくありません',
            'mail_address.required' => 'メールアドレスは必須入力です',
            'mail_address.confirmed' => 'メールアドレスが一致しません',
            'mail_address_confirmation.email' => 'メールアドレス(確認用)が正しくありません',
            'mail_address_confirmation.required' => 'メールアドレス(確認用)は必須入力です',
            'Inquiry_content.required' => 'お問合せ内容は必須入力です',
        ];
    }
}