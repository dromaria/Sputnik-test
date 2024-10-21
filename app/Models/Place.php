<?php

namespace App\Models;

use Database\Factories\PlaceFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
 * @property-read Collection<int, User> $users
 * @property-read int|null $users_count
 * @property-read Collection<int, Place> $favorites
 * @property-read int|null $favorites_count
 * @mixin \Eloquent
 */
class Place extends Model
{
    /** @use HasFactory<PlaceFactory> */
    use HasFactory, SoftDeletes;

    protected $table = 'places';
    protected $fillable = ['name', 'latitude', 'longitude'];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function favorites(): HasMany
    {
        return $this->hasMany(Place::class);
    }
}
