<?php

namespace App\Models;

use App\Helpers\DateHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'user_id',
        'set_id',
        'score',
        'name',
        'image_url',
        'profile_url'
    ];

    use HasFactory;

    /**
     * @return string
     */
    public function getTimeAttribute(): string
    {
        return DateHelper::getTimeFromTimestamp($this->created_at);
    }

    /**
     * @return string
     */
    public function getDateAttribute(): string
    {
        return DateHelper::getDateFromTimestamp($this->created_at);
    }
}
