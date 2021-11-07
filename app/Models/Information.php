<?php /** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate(int $int)
 * @method static create(array $array)
 * @method static findOrFail($id)
 * @method static orderBy(string $string, string $string1)
 */
class Information extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
}
