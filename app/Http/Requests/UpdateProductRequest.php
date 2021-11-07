<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed body
 * @property mixed title
 * @property mixed alt
 * @property mixed title_web
 * @property mixed keywords
 * @property mixed description
 */
class UpdateProductRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "title" => "required|max:100",
            "image" => "image|mimes:jpeg,jpg,png|max:5000",
            "alt" => "required|max:100",
            "body" => "required",
            "title_web" => "required|max:100",
            "keywords" => "required|max:1000",
            "description" => "required|max:1000",
        ];
    }
}
