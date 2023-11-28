<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseRequest;

class HouseRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'          => 'required|max:100',
            'description'   => 'required|max:1000',
            'province_code' => 'required',
            'district_code' => 'required',
            'ward_code'     => 'required',
            'address'       => 'required',
            'thumbnail'     => 'required',
        ];
    }

    /**
     * Get the attributes that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function attributes()
    {
        return [
            'name'          => __('label.house.field.name'),
            'description'   => __('label.house.field.description'),
            'province_code' => __('label.house.field.province_code'),
            'district_code' => __('label.house.field.district_code'),
            'ward_code'     => __('label.house.field.ward_code'),
            'address'       => __('label.house.field.address'),
            'thumbnail'     => __('label.house.field.thumbnail'),
        ];
    }
}