<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed working_hours
 * @property mixed email
 * @property mixed phone
 */
class CreateInformationRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'phone'=>'required|max:100',
            'email'=>'required|max:100|email',
            'working_hours'=>'required|max:100',
        ];
    }
}
