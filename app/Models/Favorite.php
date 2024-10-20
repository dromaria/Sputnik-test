<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;


/**
 *
 *
 * @property int $id
 * @property int $user_id
 * @property int $place_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Place $place
 * @property-read User $user
 * @method static Builder|Favorite newModelQuery()
 * @method static Builder|Favorite newQuery()
 * @method static Builder|Favorite query()
 * @method static Builder|Favorite whereCreatedAt($value)
 * @method static Builder|Favorite whereId($value)
 * @method static Builder|Favorite wherePlaceId($value)
 * @method static Builder|Favorite whereUpdatedAt($value)
 * @method static Builder|Favorite whereUserId($value)
 * @mixin \Eloquent
 */
class Favorite extends Model
{
    use HasFactory;

    protected $table = 'favorites';

    protected $fillable = ['user_id', 'place_id'];

    public function place(): BelongsTo
    {
        return $this->belongsTo(Place::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
