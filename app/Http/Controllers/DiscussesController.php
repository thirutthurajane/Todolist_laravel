<?php

namespace App\Http\Controllers;

use App\Events\CommentBroadCastEvent;
use App\Models\Comment;
use App\Models\Discuss;
use Illuminate\Http\Request;

class DiscussesController extends Controller
{

    public function makeComment(Request $request) {
        $comment = new Comment();
        $comment->discuss_id = $request->discuss_id;
        $comment->commentDetail = $request->commentDetail;

        $comment->save();

        return redirect()->action([DiscussesController::class,'show'],['id' => $request->discuss_id]);
    }

    public function index()
    {
        $discusses = Discuss::all();
        //
        return view('components.discuss',['discusses' => $discusses]);
    }

    public function create()
    {
        //
        return view('components.discuss-create');
    }

    public function store(Request $request)
    {
        //
        $discuss = new Discuss();
        $discuss->topic = $request->topic;
        $discuss->save();
        return redirect()->action([DiscussesController::class,'index']);
    }

    public function filter(Request $request) {
        $discusses = Discuss::where('topic','like','%'.$request->filterText.'%')->get();
        //
        return view('components.discuss',['discusses' => $discusses]);
    }

    public function show(int $id)
    {
        //
        $comments = Comment::with(['discuss'])->where('discuss_id',$id)->get();
        $discuss = Discuss::find($id);
        return view('components.discuss-comment', ['comments' => $comments,'discuss' => $discuss]);
    }

    public function edit(Discuss $discuss)
    {
        //
    }

    public function update(Request $request, Discuss $discuss)
    {
        //
    }

    public function destroy(Discuss $discuss)
    {
        //
    }
}
