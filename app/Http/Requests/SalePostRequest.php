<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class SalePostRequest extends FormRequest
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
            'seller_id' => 'required',
            'total'  => 'required|numeric',
        ];
    }


    /**
     * Get the message rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'seller_id.required' => 'O campo Vendedor é obrigatório',
            'total.required' => 'O campo Total é obrigatório',
            'total.numeric' => 'O campo Total precisa ser um número',
        ];
    }

    /**
     * Set responde to Failed Validation to the request.
     *
     * @return ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        $response = new Response(
            [
                'success' => false,
                'message' => 'Validation Errors',
                'data'    =>  $validator->errors()
            ],
            Response::HTTP_OK
        );
        throw new ValidationException($validator, $response);
    }
}
