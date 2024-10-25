<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tell' => [new DateRule($this->left_tell,$this->tell_middle,$this->tell_right,)],
            'last_name' => ['required'],
            'first_name' => ['required'],
            'gender' => ['required'],
            'email' => ['required', 'email'],
            'tell' => ['required', 'min:5'],
            'address' => ['required'],
            'category_id' => ['required'],
            'detail' => ['required','max:120']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'tell' => $this->input('tell_left').$this->input('tell_middle').
            $this->input('tell_right'),
        ]);
    }

    public function messages()
    {
        return [
            'last_name.required' => '姓を入力してください',

            'first_name.required' => '名前を入力してください',

            'gender.required' => '性別を選択してください',

            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',

            'tell.required' => '電話番号を入力してください',
            'tell.integer' => '電話番号は5桁までの数字で入力してください',
            'tell.min' => '電話番号は5桁までの数字で入力してください',

            'address.required' => '住所を入力してください',

            'category_id.required' => 'お問い合わせの種類を選択してください',

            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問合せ内容は120文字以内で入力してください'
        ];
    }

}
