<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_model extends Model
{
    protected $table='categories';
    protected $primaryKey='id';
    protected $fillable=['parent_id','name','description','icon','status'];

    public function scopeSearchCategory($query, $name) {

      return $query->where('name', '=', $name);
    }

}
