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
            'price' => 'required|min:6|max:8',
            'code'=>'required|unique:products,code|min:8|max:10',
            'quantity'=>'required|min:2',
            'image' => 'required',
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
            'name.required' => 'Bạn phải nhập tên sản phẩm',
            'name.min' => 'Tên sản phẩm bạn nhập ko hợp lệ',
            'price.required' => 'Bạn phải nhập giá tiền cho sản phẩm',
            'price.min' => 'Bạn nhập giá tiền ko hợp lệ',
            'price.max' => 'Bạn nhập giá tiền ko hợp lệ',
            'code.required' => 'Bạn phải nhập mã code',
            'code.unique' => 'Mã code đã tồn tại',
            'code.min' => 'Mã code sai',
            'code.max' => 'Mã code sai',
            'quantity.required' => 'Bạn phải nhập vào số lượng',
            'quantity.min' => 'Số lượng ko hợp lệ',
            'image.required' => 'Bạn phải chọn image',
        ];
    }
}
