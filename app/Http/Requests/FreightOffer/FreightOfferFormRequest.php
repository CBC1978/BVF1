<?php

namespace App\Http\Requests\FreightOffer;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class FreightOfferFormRequest extends FormRequest
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
            "price" => "required",
            "description"=> "required",
            "statut"=> "required",
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
            'price.required' => "Le prix est obligatoire",
            'description.required' => "La description est obligatoire",
            'statut.required' => "Le status est obligatoire"
        ];
    }
}
