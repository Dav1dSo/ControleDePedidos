<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidatorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    { // Autoriza a passagem de dados.
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'required||max:110|min:5',
            'telefone' => 'required||max:11|min:11',
            'rua' => 'required||max:110|min:5',
            'cidade' => 'required||max:110|min:5',
            'estado' => 'required',
            'numero' => 'required||max:5|min:1',
            'bairro' => 'required||max:110|min:3',
            'valor' => 'required||max:7|min:1',
            'data_pedido' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório!',
            'telefone.required' => 'O telefone deve conter código de área e prefixo 9!',
            'rua.required' => 'Digite um nome de rua válido!',
            'cidade.required' => 'Digite um nome de cidade válido!',
            'estado.required' => 'Selecione o estado!',
            'numero.required' => 'Informe um número de residencia válido!',
            'bairro.required' => 'Informe um bairro de bairro válido!',
            'valor.required' => 'Informe um valor válido!',
            'data_pedido.required' => 'Selecione a data do pedido!',
            'status.required' => 'Selecione o status do pedido!',
        ];
    }
}
