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
        <div class="item-card" style="background-image:url('/upload/{!! $post->image !!}')">
            <a href="{!! URL::route('blog.posts.show', array('posts' => $post->id)) !!}">
                <div class="item-description">
                    <div class="item-title">
                        <h2>{!! $post->title !!}</h2>
                    </div>
                    <div class="item-rooms">
                        <p>{!! $post->summary !!}</p>
                    </div>
                </div>
                <div class="item-sticker">
                    <h3>{!! $post->promotion !!}</h3>
                </div>
            </a>
        </div>
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
