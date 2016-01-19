@extends('layouts.app')
@section('title', '| Whats your Story')
@section('header')
    @include('common.header')
@endsection
@section('content')
@include('common.messages')
    <main>
        <div class="container">
            <section class="new-story">
                <div class="row">
                    <div class="col-md-12">
                        <h1>
                            Create a new story
                        </h1>
                        @include('stories.common.new-form')
                    </div>
                </div>
            </section>
            <hr>
            <div class="row">
                <div class="col-md-8">
                    @if(count($stories) > 0 )
                        <h3>Recent Stories</h3>
                        <hr/>
                        @foreach($stories as $story)
                            <article class="story">

                                <p class="lead">
                                    {{ $story->description }}
                                </p>
                                <hr/>
                            </article>
                        @endforeach
                    @else
                        <div class="alert alert-info">
                            <p class="text-center">
                                Sorry no stories found
                            </p>
                        </div>
                    @endif
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <h4>Trending Stories</h4>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@section('footer')
    @include('stories.common.footer')
@endsection
