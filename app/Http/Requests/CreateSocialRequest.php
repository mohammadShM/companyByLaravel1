<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed telegram
 * @property mixed linkedin
 * @property mixed instagram
 * @property mixed twitter
 */
class CreateSocialRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'telegram' => 'nullable|max:200|url',
            'linkedin' => 'nullable|max:200|url',
            'instagram' => 'nullable|max:200|url',
            'twitter' => 'nullable|max:200|url',
        ];
    }
}
