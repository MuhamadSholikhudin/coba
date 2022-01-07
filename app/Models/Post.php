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
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // public function user(){
    //     return $this->belongsTo(User::class);

    // }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeFilter($query, array $filters)
    {
        // if (isset($filter['search']) ? $filter['search'] : false) {
        //     $query->where('title', 'like', '%' . $filter['search'] . '%')
        //         ->orWhere('body',  'like', '%' . $filter['search'] . '%');
        // }

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return    $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body',  'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return    $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas(
                'author',
                fn ($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
