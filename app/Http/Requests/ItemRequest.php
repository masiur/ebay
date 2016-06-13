<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ItemRequest extends Request
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
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'amount_in_stock' => 'required|numeric',
            'type' => 'required|in:buy,quote',
            // 'image' => 'required|mimes:jpeg,bmp,png'
        ];
    }
}
