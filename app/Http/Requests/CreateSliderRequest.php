<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed alt
 * @property mixed title
 * @property mixed caption
 */
class CreateSliderRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "title" => "required|max:200",
            "caption" => "required|max:500",
            "image" => "required|image|mimes:jpeg,jpg,png|max:5000",
            "alt" => "required|max:100"
        ];
    }

}
