@extends('layout.base')


@section('pageContent')
@foreach ($movies as $movie)
    
<section>
    <div class="title">
        {{$movie['title']}}
    </div>
    <div class="original_title">
        {{$movie['original_title']}}
    </div>
    <div class="vote">
        {{$movie['vote']}}
    </div>
    <div class="nationality">
        {{$movie['nationality']}}
    </div>
    <div class="nationality">
        {{$movie['nationality']}}
    </div>
</section>
@endforeach
    
@endsection