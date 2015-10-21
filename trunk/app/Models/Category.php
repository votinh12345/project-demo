<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model {

    protected $table = 'category';
    protected $primaryKey = 'category_id';

    public function getCategories($parent_id = 0){
        $result = DB::table('category')->select('category.*')
                ->leftJoin('category_description', function($join){
                    $join->on('category_description.category_id', '=', 'category.category_id');
                })
                ->leftJoin('category_to_store', function($join){
                    $join->on('category_to_store.category_id', '=', 'category.category_id');
                })
                ->where('category.parent_id', '=', $parent_id)
                ->where('category_to_store.store_id', '=', 0)
                ->where('category.status', '=', 1)
                ->orderBy('category.sort_order');
        return $result->get();
    }
}
