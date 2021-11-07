<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed alt
 * @property mixed title
 * @property mixed description
 */
class UpdateAboutRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|max:100',
            'image' => 'image|mimes:jpg,png,jpeg|max:5000',
            'alt' => 'required|max:100',
            'description' => 'required',
        ];
    }
}
