<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
     public function getRouteKeyName()
 {
     return 'slug';
 }

    protected $fillable = [
        'title', 
        'description', 
        'slug'
    ];

    static public function generateSlug($originalStr) {
        $baseSlug = Str::of($originalStr)->slug('-');
        $slug = $baseSlug;
        $i = 1;
        while(self::where('slug', $slug)->first()) {
            $slug = "$baseSlug-$i";
            $i++;
        }
        return $slug;
    }
}
