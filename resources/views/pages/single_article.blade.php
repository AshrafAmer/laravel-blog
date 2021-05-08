@extends('layouts.app')
@section('title', $article->title)

@section('content')
<!-- Properties details page start -->
<div class="content-area properties-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- Header -->
                <div class="heading-properties clearfix sidebar-widget">
                    <div class="pull-left">
                        <h3>{{ $article->title }}</h3>
                        <p>
                            <i class="lnr lnr-eye"></i> {{ $article->seen }} seen
                        </p>
                    </div>
                    <div class="pull-right">
                        <h3><span><i class="lnr lnr-pushpin"></i> {{ $article->category->name }}</span></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- Properties details section start -->
                <div class="properties-details-section sidebar-widget">
                    <!-- Property description start -->
                    <div class="panel-box properties-panel-box Property-description">
                        <div class="panel with-nav-tabs panel-default">
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab1default">
                                        <p>{{ $article->body }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Property description end -->
                </div>
                <!-- Properties details section end -->

                <!-- Properties details section start -->
                <div class="properties-details-section sidebar-widget">
                    <!-- Properties comments start -->
                    @if (count($article->comments) > 0)
                        <div class="properties-comments mrg-btm-40">
                            <div class="comments-section">
                                <div class="main-title-2">
                                    <h1><span>Comments </span></h1>
                                </div> 
                                <ul class="comments">
                                    @foreach($article->comments as $comment)
                                        <li>
                                            <div class="comment">
                                                <div class="comment-author" style="margin-top: 20px">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/avatar.png') }}" alt="avatar-5">
                                                    </a>
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-meta">
                                                        <div class="comment-meta-date">
                                                            <span class="hidden-xs">{{ $comment->created_at }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="comment-body">
                                                        <p>{{ $comment->comment }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                
                            </div>
                        </div>
                    @endif
                    <!-- Properties comments end -->

                    <!-- Contact form start -->
                    <div class="contact-form">
                        <!-- Main Title 2 -->
                        <div class="main-title-2">
                            <h1>Add new Comment</h1>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                        <form id="contact_form" action="{{ route('post.comment') }}" method="POST" >
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group message">
                                        <input type="hidden" name="article_id" value="{{ $article->id }}">
                                        <textarea class="input-text" name="comment" placeholder="Write message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group send-btn mrg-btn-0">
                                        <button type="submit" class="button-md button-theme">Post Comment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact form end -->
                </div>
                <!-- Properties details section end -->
            </div>
        </div>
    </div>
</div>
<!-- Properties details page end -->
@endsection
