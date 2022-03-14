<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class SellerPostRequest extends FormRequest
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
            'name'    => 'required',
            'email'   => 'required|unique:sellers,email'
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
            'name.required' => 'O campo Nome é obrigatório',
            'email.required' => 'O campo Email é obrigatório',
            'email.unique' => 'O Email informado já está em uso',
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
