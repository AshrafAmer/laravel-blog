@extends('admin.layouts.app')
@section('title', "Categories")

@section('content')
     
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Add New Category</h4>
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
                <h3 class="box-title">Category Details</h3>
                <div class="contact-form">
                    <form id="contact_form" action="{{ route('admin.post.store.category') }}" method="POST">
                        @csrf
                        <div class="form-group fullname">
                            <input type="text" name="name" class="input-text" placeholder="Category Name">
                        </div>
                        <div class="form-group enter-email">
                            <input type="text" name="description" class="input-text" placeholder="Category Description (Max 1000)">
                        </div>
                        <div class="form-group send-btn">
                            <button type="submit" class="button-md button-theme" style="background: #f33155; border: 2px solid #f33155;">Add Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
