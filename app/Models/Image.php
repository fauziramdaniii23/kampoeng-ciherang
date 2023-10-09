<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\wahana;
class Image extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function wahanas(){
        return $this->belongsTo(wahana::class);
    }
}
