<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pezeshgan extends Model
{
    use HasFactory;

   

    protected $table =  "pezeshgan";
    protected $fillable = [
         'id','esm','famil','takhasos','rozeNobat','zamanNobat','updated_at','created_at'];

  
   
    public function nobatDehi()
    {
        return $this->hasMany(Nobatdehi::class, 'idDoctor', 'id');
    }
}
