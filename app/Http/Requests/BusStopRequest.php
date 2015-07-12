<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BusStopRequest extends Request
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
            'number' => 'required|string|max:10',
            'address' => 'required|string|max:70',
            'reference' => 'string|max:70',
            'neighborhood_id' => 'required|numeric|exists:neighborhoods,id',
            'point_id' => 'required|numeric|exists:points,id'
        ];
    }
}
