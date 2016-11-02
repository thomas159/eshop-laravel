<?php namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Product_image extends Model
{
    // does nothing more than 
    // specify the table in the database
    protected $table = 'product_image';
   
     public function product_album()
    {
        return $this->belongsTo('App\Product');
    }

}
?>