<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use Notifiable;

    protected $fillable = ['name','price'];

    protected $table = 'books';
}
