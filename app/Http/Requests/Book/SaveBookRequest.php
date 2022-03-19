<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;

class SaveBookRequest extends FormRequest
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
            'title' => 'required|max:255',
            'short_description' => 'required|max:1000',
            'amount' => 'required',
            'author_id' => 'required',
        ];
    }

    public function updateRules(): array
    {
        return [
            'id' => 'required',
            'title' => 'required|max:255',
            'short_description' => 'required|max:1000',
            'amount' => 'required',
            'author_id' => 'required',
        ];
    }
}
