<?php

namespace App\Http\Requests\Carrier;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CarrierFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "company_name" => "required",
            "address"=> "required",
            "phone"=> 'required',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'=>false,
            'error'=>true,
            'message'=>"Erreur de validation",
            'errorList'=>$validator->errors(),
        ]));
    }

    public function messages()
    {
        return[
            'company_name.required' => "Le nom de l'entreprise est obligatoire",
            'address.required' => "L'adresse de l'entreprise est obligatoire",
            'phone.required' => "Le contact de l'entreprise est obligatoire"
        ];
    }
}
