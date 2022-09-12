<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreProductRequest extends FormRequest
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
      'category_id' => 'required|exists:categories,id',
      'brand_id' => 'nullable',
      'title' => 'required|string|max:255|unique:products,title',
      'content' => 'required|string',
      'price' => 'required|numeric',
      'old_price' => 'nullable|numeric',
      'status' => 'required',
      'description' => 'nullable|string',
      'img' => 'nullable|string',
      'gallery' => 'nullable',
      'hit' => 'nullable',
      'related' => 'nullable',
    ];
  }


  protected function failedValidation(Validator $validator)
  {
    throw new HttpResponseException(response()->json([
      'errors' => $validator->errors(),
      'status' => true
    ], 422));
  }
}
