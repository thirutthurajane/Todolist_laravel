<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layouts.header')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="is-size-1 card-header-title">
                Add Todo
            </p>
        </header>
        <div class="card-content">
            <form method="post" action="{{ url('add') }}">
                {{ csrf_field() }}
                <div class="field">
                    <label class="label">Title</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Title" name="title">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Detail</label>
                    <div class="control">
                        <textarea class="textarea" placeholder="Detail" name="detail"></textarea>
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
</html>
