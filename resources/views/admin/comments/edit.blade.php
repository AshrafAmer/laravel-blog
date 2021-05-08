@extends('admin.layouts.app')
@section('title', $comment->article->title)

@section('content')
     
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Review {{ $comment->article->title }} Comment</h4>
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
                    <form id="contact_form" action="{{ route('admin.update.comment', [$comment]) }}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="form-group enter-email">
                                <p>{{ $comment->comment }}</p>
                            </div>
                            <div class="form-group send-btn">
                                <button type="submit" class="button-md button-theme" style="background: #f33155; border: 2px solid #f33155;">Approve Comment</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
