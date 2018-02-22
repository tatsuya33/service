<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
           'ramen_name' => 'required',
           'address' => 'required',
           'kind' => 'required',
           'price' => 'required',
           'comment' => 'required|max:500'
         ];
     }
     public function messages()
 {
     return [
         'ramen_name.required' => 'ラーメン屋の名前を入力してください',
         'address.required' => '住所を入力してください',
         'kind.required' => '種類を記入してください',
         'price.required' => '値段を記入してください',
         'comment.required' => 'コメントを記入してください',
         'comment.max' => 'コメントは500文字以内で入力してください',
     ];
 }
}
