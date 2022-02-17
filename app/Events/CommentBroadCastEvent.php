<?php

namespace App\Events;

use App\Models\Comment;
use App\Models\Discuss;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CommentBroadCastEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Comment $comment;

    public function __construct(Comment $comment)
    {
        //
        error_log($comment);
        $this->comment = new Comment();
    }

    public function broadcastOn(): Channel
    {
        return new Channel('discuss.'.$this->comment->discuss_id);
    }
}
