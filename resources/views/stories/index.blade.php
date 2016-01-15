@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="col-md-8">
                @if(count($stories) > 0 )
                    <h1>User Stories</h1>
                    @foreach($stories as $story)
                        <article class="story">
                            <h3>{{ $story->description }}</h3>
                            <p>
                                {{ $story->content }}
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
        </div>
    </main>

@endsection
