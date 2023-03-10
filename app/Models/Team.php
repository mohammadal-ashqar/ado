<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [ 'auther','image',  'name_en', 'name_ar',  'jop_ar', 'jop_en',
];

public static function rules()
{
    return [

        'image'=>'required|image|mimes:png,jpeg,jpg,gif|max:550',
        'name_en'=>'required|string|max:255',
        'name_ar'=>'required|string|max:255',
        'jop_ar'=>'required|string|max:255',
        'jop_en'=>'required|string|max:255',

    ];
}

public static function updateRules()
{
    return [

        'image'=>'nullable|image|mimes:png,jpeg,jpg,gif|max:550',
        'name_en'=>'required|string|max:255',
        'name_ar'=>'required|string|max:255',
        'jop_ar'=>'required|string|max:255',
        'jop_en'=>'required|string|max:255',

    ];
}
}

