<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
//    public function authorize()
//    {
        // 認証していない。
//        return false;
        // 認証している、もしくはしない。
//        return true;
//    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // デバック
        //eval(\Psy\Sh());

        return [
            'name' => 'required|string|max:50',
            'price' => 'required|integer',
            'author' => 'nullable|string|max:50'
        ];
    }
}
