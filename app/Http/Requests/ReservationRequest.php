<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
      'user_id' => ['required'],
      'shop_id' => ['required'],
      'date' => ['required'],
      'time' => ['required'],
      'num_of_users' => ['required'],
    ];
  }

  public function messages()
  {
    return [
      'user_id.required' => 'ユーザーIDは必ず入力してください。',
      'shop_id.required' => 'ショップIDは必ず入力してください。',
      'date.required' => '日付は必ず入力してください。',
      'time.required' => '時間は必ず入力してください。',
      'num_of_users.required' => '人数は必ず入力してください。',
    ];
  }
}
