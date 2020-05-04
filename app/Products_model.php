<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Products_model extends Model
{

  use SearchableTrait;

  /**
   * Searchable rules.
   *
   * @var array
   */
  protected $searchable = [
      /**
       * Columns and their priority in search results.
       * Columns with higher values are more important.
       * Columns with equal values have equal importance.
       *
       * @var array
       */
      'columns' => [
          'products.p_name' => 10,
          'products.title' => 10,
          'products.short' => 5,
          'products.description' => 5,
          'products.description2' => 5,
      ],
  ];


    protected $table='products';
    protected $primaryKey='id';
    protected $fillable=['categories_id','p_name','p_code','p_color','description','price','image',
    'title','short','description2','horario','tel','tel2','whatsapp','whatsapp2','adress','email','facebook',
    'instagram','twitter','youtube','price','image','googleMaps','destacado', 'cuarentena', 'banner'];

    public function category(){
        return $this->belongsTo(Category_model::class,'categories_id','id');
    }
    public function attributes(){
        return $this->hasMany(ProductAtrr_model::class,'products_id','id');
    }
}
