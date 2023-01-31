<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['auther','visits','image','sections','style','url','files',];

    public static function rules()
    {
        return [

            'image'=>'required|image|mimes:png,jpeg,jpg,gif|max:255',
            'sections'=>'required|in:webDevelopment,branding,digitalMarket,motionGraphic',
            'url'=>'required|string|max:255',
            'files*'=>'nullable|image|mimes:png,jpeg,jpg,gif|max:5500',
                ];
    }

    public static function updateRules()
    {
        return [

            'image'=>'nullable|image|mimes:png,jpeg,jpg,gif|max:2550',
            'sections'=>'required|in:webDevelopment,branding,digitalMarket,motionGraphic',
            'url'=>'required|string|max:255',
            'files*'=>'nullable|image|mimes:png,jpeg,jpg,gif|max:5500',
        ];
    }

      protected  $casts =[
    'files'=>'array',

    ];
}
