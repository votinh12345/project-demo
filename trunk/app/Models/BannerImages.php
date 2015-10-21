<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class BannerImages extends Model {

    protected $table = 'banner_image';
    protected $primaryKey = 'banner_image_id';

    public static function getImageBanner($banner_id) {
        $result = DB::table('banner_image')->select('banner_image.*', 'banner_image_description.title')
        ->leftJoin('banner_image_description', function($join){
        $join->on('banner_image_description.banner_image_id', '=', 'banner_image.banner_image_id');
        })
        ->where('banner_image.banner_id', '=', $banner_id)
        ->orderBy('banner_image.sort_order');
        return $result->get();
    }

}
