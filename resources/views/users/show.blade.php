@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts.sidebar')
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    Aktywności
                </div>
                @if(Auth::check())
                <div class="panel-body">
                    @include('posts.create')
                </div>
                @endif
            </div>
            @if($posts->count() < 1) 
                <div class="panel panel-default">
                    <div class="panel-body">
                        Brak postów do wyświetlenia.
                    </div>
                </div>
            @endif

            @foreach($posts as $post)
                @include('posts.single')
            @endforeach

            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection