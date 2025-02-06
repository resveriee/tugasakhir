<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    use HasFactory;
    protected $table = 'tblproduk';
    protected $fillable = ['name','price','description','image','recommend','count'];

    //relasi 1 produk memiliki banyak komenatar
public function comments(){
        return $this->hasMany(comment::class); //relasi ke model comment
    }
}
