<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::user()->hasRole('admin')){
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:products,name|max:11',
            'sku' => 'required|unique:products,sku|max:11',
            'details' => 'required|max:2500',
            'description' => 'required|max:5000',
            'price' => 'required|numeric',
            'present_price' => 'nullable|numeric|lt:price',
            'stock' => 'required|integer',
            'margin' => 'required|integer|lte:stock',
            'sale_start_at' => 'nullable|required_if:present_price,',
            'sale_end_at' => 'nullable|required_if:present_price,|after_or_equal:sale_start_date',
            'color' => 'required',
            'img-1' => 'required',
            'img-2' => 'required',
            'img-3' => 'required',
            'img-4' => 'required'
        ];
    }
}
