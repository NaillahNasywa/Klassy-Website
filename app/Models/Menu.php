<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';

    // protected $guarded = ['id'];

    protected $fillable = [
        'foto','nama','katagory_id','harga','stock'
    ];

    public function Katagory()
    {
        return $this->belongsTo(Katagory::class,'katagory_id','id');
    }
}
