<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'tbprodutos';

    protected $fillable = ['idProduto','produto','descProduto','valorProduto','dataValidade'];

public $timestamps = false;
}
