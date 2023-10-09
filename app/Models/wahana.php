<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class wahana extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function images(){
        return $this->hasMany(Image::class);
    }
}
