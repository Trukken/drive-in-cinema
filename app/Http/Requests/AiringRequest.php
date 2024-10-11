<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class AiringRequest extends FormRequest
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
            'start' => 'required|date_format:Y-m-d H:i:s',
            'number_of_parking_spots' => 'required|integer',
            'movie_id' => 'required|integer|exists:App\Models\Movie,id'
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
