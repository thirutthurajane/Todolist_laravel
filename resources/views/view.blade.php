<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layouts.header')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="is-size-1 card-header-title">
                Edit Todo
            </p>
        </header>
        <div class="card-content">
            {{ Form::model($todo,array('url' => ['edit',$todo->id], 'method' => 'PUT', 'class'=>'col-md-12')) }}
                {{ csrf_field() }}
                {{ method_field('PUT')  }}
                <div class="field">
                    {{ Form::label('Title','Title',array('class'=>'label'))  }}
                    <div class="control">
                        {{ Form::text('title', $todo->title, array('class'=>'input')) }}
                    </div>
                </div>

                <div class="field">
                    {{ Form::label('Detail','Detail',array('class'=>'label'))  }}
                    <div class="control">
                        {{ Form::textarea('detail',$todo->detail, array('class' => 'textarea'))  }}
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        {{ Form::submit('Edit',array('class'=>'button is-link'))  }}
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection
</html>
