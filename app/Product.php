<?php namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Product extends Model
{
    // does nothing more than 
    // specify the table in the database
    protected $table = 'product';

     public function product_images()
    {
        return $this->hasMany('App\product_image');
    }

}
?>