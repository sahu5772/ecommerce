<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;



class Category extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'parent_category',
        'category_name',
        'status',
        'include_in_menu',
        'thumbnail_image',
        'description',
        'url_key',
        'meta_title',
        'meta_keyword',
        'meta_desc'
    ];

    public static function getCategoryName($cId) {
        $category = Category::find($cId);
        if($category) {
            return $category->category_name;
        } else {
            return "-";
        }
    }
}
