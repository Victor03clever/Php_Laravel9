<?php
//CRUD
//CRUD
//CRUD
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'nome',            
        'data',                            
        'created_at',
    ];
}
