<?php
namespace App\Models\Base;

use App\Traits\UuidAsPimaryKey;
use Illuminate\Database\Eloquent\Model;

/**
 * This UuidModel implement our custom trait UuidAutoGenerated and use
 * camelCase attributes for createdAt, and updatedAt field.
 *
 * Class UuidModel
 * @package App\Models
 */
abstract class UuidModel extends Model
{
    use UuidAsPimaryKey;

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';
}