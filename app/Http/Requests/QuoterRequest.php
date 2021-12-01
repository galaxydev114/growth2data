<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoterRequest extends FormRequest
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
        switch ($this->post('serviceType')) {
            case 'consultancy':
                $rules = $this->consultancyServiceRules();
                break;
            case 'school':
                $rules = $this->schoolServiceRules();
                break;
        }

        return $rules;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function consultancyServiceRules()
    {
        switch ($this->post('sourceForm')) {
            case 1:
                return [
                    'interest' => 'required'
                ];
            case 2:
                return [
                    'qDashboardsAmt' => 'required',
                    'qDataSourcesAmt' => 'required',
                    'qDataEngineering' => 'required'
                ];
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function schoolServiceRules()
    {
        switch ($this->post('sourceForm')) {
        }
    }
}
