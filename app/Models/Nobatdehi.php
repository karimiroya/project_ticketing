<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Nobatdehi extends Model
{
    use HasFactory;

   

    protected $table =  "nobatdehi";
    protected $fillable = [
         'idDoctor','rozeNobat','saatNobat'];

  
}
