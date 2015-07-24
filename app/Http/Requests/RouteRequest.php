<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RouteRequest extends Request
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
        if ($this->route('routes')) {
            $id = $this->route('routes')->id;
        }

        return [
            'name' => 'required|string|max:50',
            'number' => 'required|alpha_num|max:5|unique:routes'. (isset($id) ? ",$id" : '')
        ];
    }
}
