<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $incrementing = true;
    protected $primaryKey = 'id';
    protected $attributes = [
        'commentDetail' => ''
    ];

    public function discuss() {
        return $this->belongsTo(Discuss::class);
    }
}
