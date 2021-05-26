<?php

namespace App\Api\Contact\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ContactRequest extends FormRequest {
  public function rules(): array {
    return [
      'name' => 'required|string',
      'email' => 'required|email|string',
      'phone' => 'required|regex:/^(\([0-9]{2}\))\s([9]{1})?([0-9]{4})-([0-9]{4})$/',
      'message' => 'required|string',
      'file' => 'required|file|mimes:pdf,doc,docx,odt,txt|max:500'
    ];
  }

  public function authorize()
  {
      return true;
  }

  public function attributes()
  {
      return [
          // 'email' => 'email address',
      ];
  }

  protected function failedValidation(Validator $validator)
  {
      $errors = $validator->errors();

      $response = response()->json([
          'message' => 'Invalid data send',
          'details' => $errors->messages(),
      ], 422);

      throw new HttpResponseException($response);
  }
}