<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Hanya boleh diisi dengan data seperti ini
    // protected $fillable= ['title', 'excerpt', 'body'];

    //  boleh diisi kecuali yang di guarded
    protected $guarded= ['id'];
    protected $with= ['category', 'author'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    // public function user(){
    //     return $this->belongsTo(User::class);

    // }
    public function author(){
        return $this->belongsTo(User::class, 'user_id');

    }
}
