<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;


/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property float $latitude
 * @property float $longitude
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static Builder|Place newModelQuery()
 * @method static Builder|Place newQuery()
 * @method static Builder|Place onlyTrashed()
 * @method static Builder|Place query()
 * @method static Builder|Place whereCreatedAt($value)
 * @method static Builder|Place whereDeletedAt($value)
 * @method static Builder|Place whereId($value)
 * @method static Builder|Place whereLatitude($value)
 * @method static Builder|Place whereLongitude($value)
 * @method static Builder|Place whereName($value)
 * @method static Builder|Place whereUpdatedAt($value)
 * @method static Builder|Place withTrashed()
 * @method static Builder|Place withoutTrashed()
 * @mixin \Eloquent
 */
class Place extends Model
{
    use SoftDeletes;

    protected $table = 'places';
    protected $fillable = ['name', 'latitude', 'longitude'];

}
