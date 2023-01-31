<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['auther','visits',  'image',  'writer_en',  'writer_ar',  'title_ar',  'title_en',  'content_en',  'content_ar'];

    public static function rules()
    {
        return [
            'image'=>'required|image|mimes:png,jpeg,jpg,gif|max:2550',
            'writer_en'=>'required|string|max:255',
            'writer_ar'=>'required|string|max:255',
            'title_ar'=>'required|string|max:255',
            'title_en'=>'required|string|max:255',
            'content_en'=>'required|string',
            'content_ar'=>'required|string',
        ];
    }
    public static function updateRules()
    {
        return [
            'image'=>'nullable|image|mimes:png,jpeg,jpg,gif|max:2550',
            'writer_en'=>'required|string|max:255',
            'writer_ar'=>'required|string|max:255',
            'title_ar'=>'required|string|max:255',
            'title_en'=>'required|string|max:255',
            'content_en'=>'required|string',
            'content_ar'=>'required|string',
        ];
    }
}

