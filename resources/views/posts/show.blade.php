@extends ('layouts.master')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>

        {{ $post->body }}
    </div>
@endsection