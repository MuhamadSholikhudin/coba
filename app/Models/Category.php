<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Hanya boleh diisi dengan data seperti ini
    // protected $fillable= ['title', 'excerpt', 'body'];

    //  boleh diisi kecuali yang di guarded
    //protected $guarded= ['id'];
}
