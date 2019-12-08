<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class   Product extends Model
{

    protected $fillable = ['name','slug','color','size','price','category','subcategory','description'];

    public function getPrice(){
        return '€' . number_format($this->price/100, 2);
    }
}
