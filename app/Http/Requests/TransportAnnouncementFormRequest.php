<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class TransportAnnouncementFormRequest extends FormRequest
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
            "origin" => "required",
            "destination"=> "required",
            "limit_date"=> 'required',
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
            'origin.required' => "Le lieu de départ est obligatoire",
            'destination.required' => "Le lieu d'arrivée est obligatoire",
            'limit_date.required' => "Le delai d'expiratopn est obligatoire"
        ];
    }
}
