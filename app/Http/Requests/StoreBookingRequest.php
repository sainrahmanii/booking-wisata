<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
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
<<<<<<< HEAD
            'name'              => ['required|string|max:255'],
            'phone_number'      => ['required|string|max:255'],
            'email'             => ['required|string|lowercase|email|max:255'],
            'started_at'        => ['required|date|after:today'],
            'total_participant' => ['required|integer|min:1'],
            'address'           => ['required|string|max:255'],
=======
            'name'         => ['required', 'string', 'max:255'],
            'email'        => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'started_at'   => ['required', 'date', 'after:today'],
            'total_participant' => 'required|min:1|integer'
>>>>>>> d43ce74dcae54877ff6542fe0cea3ed7f03e5317
        ];
    }
}