<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Click
 *
 * @property int $id
 * @property int $link_id
 * @property string $ip_address
 * @property string $user_agent
 * @property string $referer
 * @property string $country
 * @property string $city
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Click newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Click newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Click query()
 * @method static \Illuminate\Database\Eloquent\Builder|Click whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Click whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Click whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Click whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Click whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Click whereLinkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Click whereReferer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Click whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Click whereUserAgent($value)
 *
 * @mixin \Eloquent
 */
class Click extends Model
{
    protected $guarded = [];

    use HasFactory;
}
