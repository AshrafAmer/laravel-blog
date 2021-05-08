@extends('layouts.app')
@section('title', "Home")

@section('content')

<!-- Properties section body start -->
<div class="properties-section-body content-area">
    <div class="container">
        <div class="row">
            @if (count($articles) > 0)
                <div class="col-lg-8 col-md-8 col-xs-12 col-md-push-4">
                    <!-- Option bar start -->
                    <div class="option-bar">
                        <div class="row">
                            <div class="col-lg-6 col-md-5 col-sm-5 col-xs-2">
                                <h4>
                                    <span class="heading-icon">
                                        <i class="fa fa-th-list"></i>
                                    </span>
                                    <span class="hidden-xs">Articles List</span>
                                </h4>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-7 col-xs-10 cod-pad">
                            </div>
                        </div>
                    </div>
                    <!-- Option bar end -->

                    <div class="clearfix"></div>
                    @foreach($articles as $article)
                        <!-- Property start -->
                        <div class="property clearfix wow fadeInUp delay-03s">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 property-content ">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="{{ route('get.single.article', [$article]) }}">{{ $article->title }}</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="{{ route('get.single.article', [$article]) }}">
                                        <i class="fa fa-map-marker"></i>{{ Str::limit($article->body, 120) }}
                                    </a>
                                </h3>
                                <div class="property-footer">
                                    <span class="left"> <i class="fa fa-calendar-o icon" style="margin-right: 8px"></i> {{ $article->created_at }} </span>
                                    <span class="right"> <i class="lnr lnr-eye"></i> {{ $article->seen }} seen </span>
                                </div>
                            </div>
                        </div>
                        <!-- Property end -->
                    @endforeach

                    <!-- Page navigation start -->
                    <nav aria-label="Page navigation">
                        {{ $articles->appends(['category_id' => $category_id ])->links() }}
                    </nav>
                    <!-- Page navigation end-->
                </div>
            @else
                <div class="col-lg-8 col-md-8 col-xs-12 col-md-push-4">
                    <div class="error-body text-center">
                        <h1 class="error-title text-danger">NO Articles</h1>
                        <h3 class="text-uppercase error-subtitle">0 results</h3>
                    </div>
                </div>
            @endif
            <div class="col-lg-4 col-md-4 col-xs-12 col-md-pull-8">

                <!-- Search contents sidebar start -->
                <div class="sidebar-widget">
                    <div class="main-title-2">
                        <h1><span>Advanced</span> Search</h1>
                    </div>

                    <form method="GET" action="{{ route('home') }}">
                        @csrf
                        <div class="form-group">
                            <select class="selectpicker search-fields" name="category_id" data-live-search="true" data-live-search-placeholder="Search value">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <button class="search-button">Search</button>
                        </div>
                    </form>
                </div>
                <!-- Search contents sidebar end -->
            </div>
        </div>
    </div>
</div>
<!-- Properties section body end -->
@endsection
