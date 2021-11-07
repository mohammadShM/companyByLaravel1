<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed alt
 * @property mixed subject
 * @property mixed body
 * @property mixed title
 * @property mixed author
 * @property mixed keywords
 * @property mixed description
 */

class UpdatePostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'image' => 'image|mimes:jpg,jpeg,png|max:5000',
            'alt' => 'required|max:100',
            'subject' => 'required|max:100',
            'body' => 'required',
            'title' => 'required|max:200',
            'author' => 'required|max:200',
            'keywords' => 'required|max:1000',
            'description' => 'required|max:1000',
        ];
    }
}
