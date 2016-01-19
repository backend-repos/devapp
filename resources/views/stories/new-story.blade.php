<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 1/15/16
 * Time: 7:53 AM
 */


?>
@extends('layouts.app')

@section('title','| Whats your story')

@section('content')
    <div class="container">

        <div class="col-md-10">
            <h1> Tell Your Story</h1>
            <hr/>
            @include('common.errors')

            @include('stories.common.new-form')
            <div class="alert alert-info">
                Use hash tags to create dynamic types, sorting and filtering for you stories...
            </div>
        </div>

    </div>

@endsection
