<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model {
    
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    
    public function getTotalProducts($data = array()){
        
    }
}