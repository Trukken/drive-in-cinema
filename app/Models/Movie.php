<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{
    use HasFactory;

    public string $title;
    public string $description;
    public string $age_rating;
    public string $language;
    public string $cover_image;

    protected $fillable = [
        'title',
        'description',
        'age_rating',
        'language',
        'cover_image'
    ];

    protected $casts = [
        'created_at' => 'date:Y-m-d H:i:s',
        'updated_at' =>  'date:Y-m-d H:i:s'
    ];

    public function airings(): HasMany {
        return $this->hasMany(Airing::class);
    }
}
