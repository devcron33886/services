<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
            'user_id'=>['required', 'exists:users,id','in:'.auth()->user()->id],
            'category_id'=>['required', 'exists:categories,id','integer'],
            'title'=>['required', 'string','max:255'],
            'price'=>['required', 'integer'],
            'image'=>['required', 'image','max:2048'],
            'description'=>['required', 'string','max:255'],
            'status'=>['required', 'string']
        ];
    }
}
