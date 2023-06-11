<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uid',
        'saldo_awal',
        'besar_transaksi',
        'sisa_saldo',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'uid', 'uid');
    }
}
