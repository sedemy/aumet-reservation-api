<?php

namespace App\Http\Requests;

use App\Rules\BookingTypeRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class AddReservationRequest extends FormRequest
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
            'user_id' => 'required|integer',
            'package_id' => 'required|integer',
            'booking_type' => ['required', new BookingTypeRule],
            'booking_id'=>'required|integer'
        ];
    }

    protected function failedValidation(Validator $validator) {
        throw new \Illuminate\Http\Exceptions\HttpResponseException(
            apiSendError('',400,$validator->errors()->toArray()) //401
        );
    }
}
