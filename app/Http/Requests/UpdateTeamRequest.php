<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed alt
 * @property mixed fullName
 * @property mixed job
 * @property mixed linkedin
 * @property mixed telegram
 * @property mixed instagram
 */
class UpdateTeamRequest extends FormRequest
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
            'fullName' => 'required|max:100',
            'job' => 'required|max:100',
            'linkedin' => 'nullable|max:200',
            'telegram' => 'nullable|max:200',
            'instagram' => 'nullable|max:200',
        ];
    }
}
