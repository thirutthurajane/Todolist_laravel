<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discuss extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = true;

    public $timestamps = true;

    protected $attributes = [
        'topic' => ''
    ];

    public function comments() {
        return $this.$this->hasMany(Comment::class);
    }
}
