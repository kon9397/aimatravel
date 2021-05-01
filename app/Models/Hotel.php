<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'hotels';
    protected $primaryKey = 'hotel_id';
    public $timestamps = false;

    public function tour() {
        return $this->belongsTo(Tour::class, 'tour_id', 'tour_id');
    }
}
