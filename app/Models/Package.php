<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = ['auther', 'visits', 'image', 'title_ar', 'content_ar', 'title_en', 'content_en','price'];

    public  static function rules()
    {
        return [
            'image'=>'required|image|mimes:png,jpeg,jpg,gif|max:255',
            'title_ar'=>'required|string',
            'content_ar*'=>'required|string|max:255',
            'title_en'=>'required|string|max:255',
            'content_en*'=>'required|string|max:255',
            'price'=>'required|string|max:255',

        ];
    }
    public  static function updateRules()
    {
        return [
            'image'=>'nullable|image|mimes:png,jpeg,jpg,gif|max:255',
            'title_ar'=>'required|string',
            'content_ar*'=>'required|string|max:255',
            'title_en'=>'required|string|max:255',
            'content_en*'=>'required|string|max:255',
            'price'=>'required|string|max:255',

        ];
    }
}

