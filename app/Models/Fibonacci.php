<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fibonacci extends Model
{
    protected $table = 'fibonaccis';
    public $timestamps = false;

    protected $appends = ['accepted'];

    protected $fillable = [
        'order',
        'value',
        'max_seconds',
        'started',
        'finished',
    ];

    public function getacceptedAttribute(){
        return $this->max_seconds >= abs(strtotime($this->finished) - strtotime($this->started));
    }
}
