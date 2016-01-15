<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 1/15/16
 * Time: 7:53 AM
 */
?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8">
            <h1>What is your story</h1>
            <hr>
                {!! Form::open() !!}
            <div class="form-group">
                <label for="description">A brief Introduction</label>
                {{ Form::text('description', null, ['class' => 'form-control', 'placeholder' => "Today's meeting was great or Remind me to get milk"]) }}
            </div>
                {!! Form::close() !!}
        </div>


    </div>

@endsection
