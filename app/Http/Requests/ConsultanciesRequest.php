<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultanciesRequest extends FormRequest
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
        $rules = [];
        switch ($this->post('interest')) {
            case 1:
                $rules = [
                    'dashboards_amt' => 'required',
                    'data_sources_amt' => 'required',
                    'data_engineering_amt' => 'required',
                    'dashboard_type' => 'required'
                ];
                break;
            case 2:
                $rules = [
                    'dashboards_amt' => 'required',
                    'data_sources_amt' => 'required',
                    'data_engineering_amt' => 'required',
                    'dashboard_type' => 'required'
                ];
                break;
            case 3:
                $rules = [
                    'app_service_type' => 'required'
                ];
                break;
        }

        $defaultRules = [
            'interest' => [
                'required'
            ],
            'name' => [
                'required',
                'string'
            ],
            'surname' => [
                'required',
                'string'
            ],
            'email' => [
                'required',
                'email'
            ],
            'telephone' => [
                'required'
            ],
            'description' => [
                'required'
            ],
            'company' => [
                'required'
            ]
        ];

        return array_merge($rules, $defaultRules);
    }
}
