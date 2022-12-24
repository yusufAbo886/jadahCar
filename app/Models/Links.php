<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    use HasFactory;

    protected $fillable=['url','page','content_id'];

    public $timestamps = false;
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

}
