<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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

    public function rules()
    {
        return [
            'first'=>['required'],
            'last'=>['required'],
            'email'=>['required', 'string','email'],
            'postcode'=>['required','parameter'=>'size:8'],
            'address'=>['required','max:255'],
            'opinion'=>['required', 'string','max:120'],
        ];
    }
#
    public function messages()
    {
        return [
            'first.required' => '名字をを入力してください',
            'last.required' => '名前を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => '半角を入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.parameter' => '-を含めて郵便番号を入力してください',
            'address.required' => '住所を入力してください',
            'opinion.required' => 'ご意見を入力してください',
            'opinion.max' => '120文字以内でご意見を入力してください',
        ];
    }
}
