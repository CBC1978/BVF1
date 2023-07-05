<?php

namespace App\Http\Requests\Users;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UsersFormRequest extends FormRequest
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
            'name' => 'required',
            'first_name' => 'required',
            'user_phone' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required|min:6',
            'role' => 'required',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => true,
            'message' => 'Erreur de validation',
            'errorList' => $validator->errors(),
        ]));
    }

    public function messages()
    {
        return [
            'name.required' => 'Le nom est obligatoire',
            'first_name.required' => 'Le prénom est obligatoire',
            'user_phone.required' => 'Le numéro de téléphone est obligatoire',
            'email.required' => 'L\'adresse e-mail est obligatoire',
            'email.email' => 'L\'adresse e-mail n\'est pas valide',
            'username.required' => 'Le nom d\'utilisateur est obligatoire',
            'password.required' => 'Le mot de passe est obligatoire',
            'password.min' => 'Le mot de passe doit avoir au moins :min caractères',
            'role.required' => 'Le rôle est obligatoire',
        ];
    }
}
