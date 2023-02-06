<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['auther','image', 'iconName', 'name_ar', 'context_ar', 'content_ar', 'list_ar', 'name_en', 'context_en', 'content_en', 'list_en' ];

    public  static function rules()
    {
        return [
            'image'=>'required|mimes:png,jpg,jpeg,gif|max:550',
            'iconName'=>'required|string|max:130',
            'name_ar'=>'required|string|max:255',
            'content_ar'=>'required|string',
            'list_ar*'=>'required|string|max:130',
            'name_en'=>'required|string|max:255',
            'content_en'=>'required|string',
            'list_en*'=>'required|string|max:130',
        ];
    }

    public  static function updateRules()
    {
        return [
            'image'=>'nullable|mimes:png,jpg,jpeg,gif|max:550',
            'iconName'=>'required|string|max:130',
            'name_ar'=>'required|string|max:255',
            'content_ar'=>'required|string',
            'list_ar*'=>'required|string|max:130',
            'name_en'=>'required|string|max:255',
            'content_en'=>'required|string',
            'list_en*'=>'required|string|max:130',
        ];
    }

//   protected  $casts =[
//     'list_ar'=>'josn',
//     'list_en'=>'josn'
//     ];
}
