<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class MovieRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:255',
            'description' => 'required',
            'cover_image' => 'required',
            'language' => 'required',
            'age_rating' => 'required',
        ];
    }

    protected function failedValidation(Validator $validator): void
    {
        $this->validateRequest($validator);
    }

    public function validateRequest(Validator $validator): void
    {
        $errors = [];
        $fails  = (new ValidationException($validator))->errors();
        foreach ($fails as $key => $error) {
            $errors[$key] = $error[0];
        }

        if (count($errors) > 0) {
            throw new HttpResponseException(
                response([
                    'errors' => $errors
                ], Response::HTTP_BAD_REQUEST)
            );
        }
    }
}
