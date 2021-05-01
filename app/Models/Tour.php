<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $table = 'tours';
    protected $primaryKey = 'tour_id';
    public $timestamps = false;

    public function hotel() {
        return $this->hasOne(Hotel::class, 'hotel_id', 'hotel_id');
    }
}
