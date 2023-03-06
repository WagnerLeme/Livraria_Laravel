<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{

    public $timestamps = false;
    protected $fillable = ['nome'];

    public function livro()
    {
        return $this->belongsTo(Livro::class);
    }
}
