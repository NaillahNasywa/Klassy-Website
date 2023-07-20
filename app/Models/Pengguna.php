<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'Pengguna';

    // protected $guarded = ['id'];

    protected $fillable = [
        'user','menu_id','jmlh_pesan','nohp','keterangan'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_id','id');
    }
}
