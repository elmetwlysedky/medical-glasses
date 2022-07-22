<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'phone' =>'nullable|string|min:11|max:11',
            'address' => 'nullable|string|max:255|nullable',
            'frame_types_id' => 'nullable',
            'frame_material' => 'nullable',
            'lens_type'  => 'nullable',
            'lens_material'  => 'nullable',
            'r_spil'=>'required|string|max:10',
            'r_cyl'=>'required|string|max:10',
            'r_ax'=>'required|string|max:10',
            'l_spil'=>'required|string|max:10',
            'l_cyl'=>'required|string|max:10',
            'l_ax'=>'required|string|max:10',
            'i_p_d'=>'required|string|max:10',
            'price'=>'required|string|max:10',
            'paid_up'=>'required|string|max:10',
            'remainder'=>'required|string|max:10'
        ];
    }
}
