<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'amount',
        'purpose',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
