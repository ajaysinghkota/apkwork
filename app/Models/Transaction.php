<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table="transaction";
    protected $fillable=['amount','type','balance','description'];
}