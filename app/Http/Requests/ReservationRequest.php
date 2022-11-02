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
      'num_of_users' => ['required'],
      'date' => ['required', 'date'],
      'time' => ['required', 'date_format:H:i'],
      'start_at' => ['required', 'integer'],
    ];
  }

  protected function prepareForValidation()
  {
    $start_at = ($this->filled(['date', 'time'])) ? $this->date . ' ' . $this->time : '';
    $this->merge([
      'start_at' => $start_at
    ]);
  }
}
