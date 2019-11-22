<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'name'=>'required|min:3',
            'price' => 'required|min:6',
            'code'=>'required|unique:products,code',
            'quantity'=>'required|min:1'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Bạn phải nhập tên sản phẩm',
            'name.min' => 'Tên sản phẩm bạn nhập ko hợp lệ',
            'price.required' => 'Bạn Phải nhập giá tiền cho sản phẩm',
            'price.min' => 'Bạn nhập giá tiền ko hợp lệ',
            'code' => 'Bạn phải nhập mã code cho nó',
            'code.unique' => 'Mã code đã tồn tại',
            'quantity.required' => 'Bạn phải nhập vào số lượng',
            'quantity.min' => 'Số lượng ko hợp lệ',
        ];
    }
}
