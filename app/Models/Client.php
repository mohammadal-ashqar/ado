<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['image','url','auther'];

    public static function rules()
    {
        return [
        'image'=>'required|mimes:png,jpg,jpeg,gif|max:255',
        'url'=>'required|string|max:255|url',

    ];

    }

    public  static function updateRules()
    {
        return [
            'image'=>'nullable|mimes:png,jpg,jpeg,gif|max:255',
            'url'=>'required|string|max:255|url',

        ];
    }
}

