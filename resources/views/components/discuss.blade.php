@extends('layouts.header')
@section('content')
    <div class="box">
        <form method="get" action="{{url('discuss/filter')}}">
            <div class="columns">
                <input class="input mr-2" name="filterText" />
                <button class="button is-success mr-2" type="submit">Search</button>
                <button class="button is-link" type="button" onclick="window.location = '{{url('discuss/add')}}'">Add Discuss</button>
            </div>
        </form>
    </div>

    <div class="card">
        <div class="card-content">
            <table class="table" style="margin-left: auto; margin-right: auto;">
                <thead>
                <th><abbr title="ID">Id</abbr></th>
                <th><abbr title="Topic">Topic</abbr></th>
                <th><abbr title="Created">Created</abbr></th>
                <th><abbr title="Updated">Updated</abbr></th>
                <th><abbr title="Action">Action</abbr></th>
                </thead>
                <tbody>
                    @foreach($discusses as $discuss)
                        <tr>
                            <th>{{ $discuss->id  }}</th>
                            <th>{{ $discuss->topic }}</th>
                            <th>{{ $discuss->created_at  }}</th>
                            <th>{{ $discuss->updated_at }}</th>
                            <th>
                                <button type="button" class="button is-link">View</button>

                                <button class="button is-danger" type="submit">Delete</button>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
