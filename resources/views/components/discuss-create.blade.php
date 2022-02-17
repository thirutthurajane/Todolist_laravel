@extends('layouts.header')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="is-size-1 card-header-title">
                Add Discuss Topic
            </p>
        </header>
        <div class="card-content">
            <form method="post" action="{{ url('discuss/add') }}">
                {{ csrf_field() }}
                <div class="field">
                    <label class="label">Topic</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Topic" name="topic">
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-link">Submit</button>
                    </div>
                    <div class="control">
                        <button type="reset" class="button is-link is-light">Clear</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
