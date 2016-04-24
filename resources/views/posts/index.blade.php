@extends('layouts.default')

@section('title')
Apollo
@stop

@section('content')
@foreach($posts as $post)
    <a href="{!! URL::route('blog.posts.show', array('posts' => $post->id)) !!}" class="post-link">
        <div class="list-item">
            <div class="list-thumbnail" style="background-image: url({!! $post->image !!});">
            </div>
            <div class="list-description">
                <div class="list-title">
                    {!! $post->title !!}
                </div>
                <div class="list-rooms">
                    {!! $post->summary !!}
                </div>
            </div>
        </div>
    </a>
    <!--
    <p>
        <a class="btn btn-success" href="{!! URL::route('blog.posts.show', array('posts' => $post->id)) !!}"><i class="fa fa-file-text"></i> Show Post</a>
        @auth('blog')
             <a class="btn btn-info" href="{!! URL::route('blog.posts.edit', array('posts' => $post->id)) !!}"><i class="fa fa-pencil-square-o"></i> Edit Post</a> <a class="btn btn-danger" href="#delete_post_{!! $post->id !!}" data-toggle="modal" data-target="#delete_post_{!! $post->id !!}"><i class="fa fa-times"></i> Delete Post</a>
        @endauth
    </p>
    <br>
    -->
@endforeach
{!! $links !!}
@stop

@section('bottom')
@auth('blog')
    @include('posts.deletes')
@endauth
@stop
