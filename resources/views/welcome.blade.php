<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layouts.header')
@section('content')
    <div class="card">
        <header class="card-header has-text-centered">
            <p class="is-size-1 card-header-title">Todo List</p>
        </header>
        <div class="card-content">
            <table class="table" style="margin-left: auto; margin-right: auto;">
                <thead>
                    <th><abbr title="ID">Id</abbr></th>
                    <th>Title</th>
                    <th><abbr title="Detail">Detail</abbr></th>
                    <th><abbr title="Created">Created</abbr></th>
                    <th><abbr title="Updated">Updated</abbr></th>
                    <th><abbr title="Action">Action</abbr></th>
                </thead>
                <tbody>
                    @foreach($todos as $todo)
                        <tr>
                            <th>{{ $todo->id  }}</th>
                            <th>{{ $todo->title  }}</th>
                            <th>{{ $todo->detail  }}</th>
                            <th>{{ $todo->created_at  }}</th>
                            <th>{{ $todo->updated_at  }}</th>
                            <th>
                                {{ Form::open(array('url' => ['delete',$todo], 'method' => 'delete')) }}
                                    <button type="button" class="button is-link" onclick="window.location='{{ url('show',['todo'=>$todo])  }}'">View</button>

                                    <button class="button is-danger" type="submit">Delete</button>
                                {{ Form::close() }}
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
</html>
