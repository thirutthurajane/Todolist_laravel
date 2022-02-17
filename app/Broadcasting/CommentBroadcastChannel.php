<?php

namespace App\Broadcasting;

use App\Models\Comment;
use App\Models\User;

class CommentBroadcastChannel
{
    public function __construct()
    {
        //
    }

    public function join(): bool
    {
        //
        return true;
    }
}
