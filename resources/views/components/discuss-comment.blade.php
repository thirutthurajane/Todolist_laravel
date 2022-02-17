@extends('layouts.header')
@section('content')

<div class="box">
    <p class="is-size-4">{{ $discuss->topic }}</p>
</div>
<div class="card">
    <div class="card-content">
        @foreach($comments as $comment)
            <div class="columns">
                <li>{{ $comment->commentDetail }}</li>
            </div>
        @endforeach
        <form method="post" class="mt-5" action="{{ url("discuss/comment") }}">
            {{ csrf_field() }}
            <div class="columns">
                <input style="display: none" name="discuss_id" value="{{ $discuss->id  }}" />
                <input class="input mr-4" name="commentDetail"/>
                <button type="submit" class="button is-link">Send</button>
            </div>
        </form>
    </div>
</div>
@endsection
