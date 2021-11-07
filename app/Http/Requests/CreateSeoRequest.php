<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed title
 * @property mixed keywords
 * @property mixed description
 * @property mixed author
 */
class CreateSeoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|max:300',
            'keywords' => 'required|max:1000',
            'description' => 'required|max:1000',
            'author' => 'required|max:100',
        ];
    }
}
