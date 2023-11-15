<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    // protected $fillable = ['title', 'excerpt', 'body']; //fillable yang di dalem boleh diisi sisanya gaboleh
    protected $guarded = ['id']; //sedangkan guarded, hanya yang didalam tidak boleh diisi
    protected $with = ['category', 'author'];
       // with() adalah penggunaan eager loading supaya mengefesiensikan query

    public function scopeFilter($query, array $filters)
    {
       $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%');
       });

       $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
       });

       $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )  
        );
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
