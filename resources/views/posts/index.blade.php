@extends('layouts.default')

@section('title')
Apollo
@stop

@section('top')
<div class="page-header">
<h4>热门推荐</h4>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
@foreach($posts as $post)
        <a href="{!! URL::route('blog.posts.show', array('posts' => $post->id)) !!}">
        <div class="item-card">
            <div class="item-thumbnail">
                <img class="img-responsive" src="/upload/{!! $post->image !!}">
            </div>
            <div class="item-description">
                <div class="item-title">
                    <h1>{!! $post->title !!}</h1>
                </div>
                <div class="item-sticker">
                    <h3>{!! $post->promotion !!}9折</h3>
                </div>
                <div class="item-rooms">
                    <p>{!! $post->summary !!}</p>
                </div>
            </div>
        </div>
        </a>
@endforeach
{!! $links !!}
    <!--
    <p>
        <a class="btn btn-success" href="{!! URL::route('blog.posts.show', array('posts' => $post->id)) !!}"><i class="fa fa-file-text"></i> Show Post</a>
        @auth('blog')
             <a class="btn btn-info" href="{!! URL::route('blog.posts.edit', array('posts' => $post->id)) !!}"><i class="fa fa-pencil-square-o"></i> Edit Post</a> <a class="btn btn-danger" href="#delete_post_{!! $post->id !!}" data-toggle="modal" data-target="#delete_post_{!! $post->id !!}"><i class="fa fa-times"></i> Delete Post</a>
        @endauth
    </p>
    <br>
    -->
    </div>
</div>
@stop

@section('bottom')
@auth('blog')
    @include('posts.deletes')
@endauth
@stop
