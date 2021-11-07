<?php /** @noinspection PhpMissingFieldTypeInspection */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate(int $int)
 * @method static create(array $array)
 * @method static findOrFail($id)
 */
class Team extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
}
