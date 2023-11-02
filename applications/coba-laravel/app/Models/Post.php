<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    // protected $fillable = ['title', 'excerpt', 'body']; //fillable yang di dalem boleh diisi sisanya gaboleh
    protected $guarded = ['id']; //sedangkan guarded, hanya yang didalam tidak boleh diisi

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
