<?php

namespace App\Models;

use App\Traits\CoursePresenter;
use App\Traits\SlugifyTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    use CoursePresenter;
    use Sluggable;

    protected $guarded = [];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function review()
    {
        return $this->reviews()->whereUserId(auth()->user()->id)->whereCourseId($this->id)->first();
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function getAverageAttribute()
    {
        return (int)$this->reviews()->where('user_id', auth()->user()->id)->avg('rating');
    }
}
