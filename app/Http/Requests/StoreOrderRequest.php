<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'service_id' => 'required|exists:services,id',
            'customer_id' => 'required|exists:users,id',
            'seller_id' => 'required|exists:users,id',
            'status' => 'required|in:pending,processing,completed,canceled,declined',
            'price' => 'required|integer',
            'deliverly_date' => 'nullable|date',
        ];
    }
}
