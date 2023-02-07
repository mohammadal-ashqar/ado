<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;
    protected $fillable = ['image','name_en','name_ar','content_en','content_ar','auther'];

    public static function rules()
    {
        return [
        'image'=>'required|mimes:png,jpg,jpeg,gif|max:550',
        'name_en'=>'required|string|max:255',
        'name_ar'=>'required|string|max:255',
        'content_en'=>'required|string',
        'content_ar'=>'required|string'
    ];

    }

    public static function updateRules()
    {
        return [
        'image'=>'nullable|mimes:png,jpg,jpeg,gif|max:550',
        'name_en'=>'required|string|max:255',
        'name_ar'=>'required|string|max:255',
        'content_en'=>'required|string',
        'content_ar'=>'required|string'
    ];

    }

}

