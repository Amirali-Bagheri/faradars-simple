<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait SlugifyTrait
{
    protected function slugify($value)
    {
        $slug = $originalSlug = Str::slug($value);

        $counter = 0;
        $exists = $this->whereSlug($originalSlug)->exists();

        while ($exists) {
            $counter++;
            $slug = $originalSlug.'-'.$counter;
            $exists = $this->whereSlug($slug)->exists();
        }

        return $slug;
    }
}
