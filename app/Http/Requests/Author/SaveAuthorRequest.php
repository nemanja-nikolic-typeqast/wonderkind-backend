<?php

namespace App\Http\Requests\Author;

use Illuminate\Foundation\Http\FormRequest;

class SaveAuthorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
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
        if ($this->isMethod('post'))
            return $this->createRules();
        elseif ($this->isMethod('put'))
            return $this->updateRules();
    }

    public function createRules(): array
    {
        return [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
        ];
    }

    public function updateRules(): array
    {
        return [
            'id' => 'required',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
        ];
    }
}
