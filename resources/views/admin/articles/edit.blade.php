@extends('admin.layouts.app')
@section('title', $article->title)

@section('content')
     
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Update {{ $article->title }} Data</h4>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="contact-form">
                    <form id="contact_form" action="{{ route('admin.update.article', [$article]) }}" method="POST">
                        @csrf
                        @method('PUT')
                            <input type="hidden" name="category_id" value="{{ $article->category_id }}">
                            <div class="form-group fullname">
                                <input type="text" name="title" class="input-text" value="{{ $article->title }}" placeholder="Article Title">
                            </div>
                            <div class="form-group enter-email">
                                <textarea name="body" class="input-text" placeholder="Article Body">{{ $article->body }}</textarea>
                            </div>
                            <div class="form-group send-btn">
                                <button type="submit" class="button-md button-theme" style="background: #f33155; border: 2px solid #f33155;">Update Post</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
