<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['count','date','bond_id'];

    public function bonds()
    {
        return $this->hasOne(Bond::class);
    }
}
