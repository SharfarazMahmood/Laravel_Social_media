@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <section class="row new-post">
        @include('includes.message_block')
        <div class="col-md-6 offset-md-3">
            <header>
                <h3>Say something</h3>
            </header>
            <form action="{{ route('post.create') }}" method="post">
                <div class="form-group">
                    <textarea name="body" id="new-post-bodyId" rows="5" class="form-control pb-3"
                        placeholder="Write your thoughts..."></textarea>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <button type="submit" class="btn btn-primary"> Share post</button>
            </form>
        </div>
    </section>
    <section class="row posts">
        <div class="col-md-6 offset-md-3">
            <header>
                <h3>What others have shared</h3>
            </header>
            @foreach ($posts as $post)
                <article class="post">
                    <p>{{ $post->body }}</p>
                    <div class="info">
                        Posted by {{ $post->user->first_name }} {{ $post->user->last_name }} on {{ $post->created_at }}
                    </div>
                    <div class="interactions">
                        <a href="#">Like</a> |
                        <a href="#">Dislike</a> |
                        <a href="#">Edit</a> |
                        <a href="#">Delete</a> |
                    </div>
                </article>
            @endforeach
        </div>
    </section>
@endsection
