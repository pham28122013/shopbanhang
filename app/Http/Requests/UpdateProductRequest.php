<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => 'required|min:3',
            'price' => 'required|min:6',
            'code'=>'required|unique:products,code',
            'quantity'=>'required|min:2',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [ 
            'name.required' => 'Bạn phải nhập tên vào',
            'name.min' => 'Tên product bạn đã nhập sai',
            'price.required' => 'Bạn phải nhập giá tiền vào',
            'price.min' => 'Bạn đã nhập sai giá product',
            'code.required' => 'Bạn phải nhập mã code vào',
            'code.unique' => 'Mã code đã tồn tại',
            'quantity.required' => 'Bạn phải nhập vào số lượng',
            'quantity.min' => 'Số lượng ko hợp lệ',
        ];
    }
}
