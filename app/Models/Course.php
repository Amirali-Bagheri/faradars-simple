<?php

namespace App\Models;

use App\Traits\CoursePresenter;
use App\Traits\SlugifyTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    use CoursePresenter, SlugifyTrait;

    protected $guarded = [];


    protected $fillable = ['title', 'description', 'price', 'category_id', 'author_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = $this->slugify($value);
    }
}
