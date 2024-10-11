<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Airing extends Model
{
    use HasFactory;

    public DateTime $start;
    public int $number_of_parking_spots;
    public int $movie_id;

    protected $fillable = [
        'start',
        'number_of_parking_spots',
        'movie_id'
    ];

    protected $casts = [
        'start' => 'date:Y-m-d H:i:s',
        'number_of_parking_spots' => 'integer',
        'movie_id' => 'integer',
        'created_at' => 'date:Y-m-d H:i:s',
        'updated_at' =>  'date:Y-m-d H:i:s'
    ];

    public function movie(): BelongsTo {
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }
}
