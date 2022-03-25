<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncionarioRequest extends FormRequest
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
      'nome_completo' => ['required', 'max:300', 'min:0', 'string'],
      'login' => ['required', 'string', 'max:300', 'min:0'],
      'senha' => ['required', 'string', 'max:200', 'min:0'],
      'administrador_id' => ['required', 'integer'],
    ];
  }
}
