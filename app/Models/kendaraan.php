<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    use HasFactory;
    protected $table = 'kendaraan';
    protected $guarded = ['id'];


    public function category()
    {
        return $this->belongsTo('\App\Models\category','category_id', 'id');
    }
}
