@extends('admin.layouts.app')
@section('title', "Articles")

@section('content')
     
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Add New Article</h4>
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
                <h3 class="box-title">Article Details</h3>
                <div class="contact-form">
                    @if (count($categories) > 0)
                        <form id="contact_form" action="{{ route('admin.post.store.article') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <select class="selectpicker input-text search-fields" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group fullname">
                                <input type="text" name="title" class="input-text" placeholder="Article Title">
                            </div>
                            <div class="form-group enter-email">
                                <textarea name="body" class="input-text" placeholder="Article Body"></textarea>
                            </div>
                            <div class="form-group send-btn">
                                <button type="submit" class="button-md button-theme" style="background: #f33155; border: 2px solid #f33155;">Publish Post</button>
                            </div>
                        </form>
                    @else
                        <div class="error-body text-center">
                            <h1 class="error-title text-danger">NO Categories</h1>
                            <h3 class="text-uppercase error-subtitle">you must create category first, then add articles</h3>
                            <a href="{{ route('admin.get.add.category') }}" class="btn btn-danger btn-rounded waves-effect waves-light mb-5 text-white">add your FIRST Category NOW</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
