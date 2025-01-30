<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table = 'tblkomen';
    protected $fillable = ['user_id', 'product_id', 'content'];

    public function user(){ // tiap komentar di user itu
        return $this->belongsTo(User::class);
    }
    public function product(){ //tiap komentar di produk itu
        return $this->belongsTo(product::class);
    }
}
