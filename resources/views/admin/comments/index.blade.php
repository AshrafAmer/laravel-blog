@extends('admin.layouts.app')
@section('title', "Comments")

@section('content')
     
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Comments</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <div class="d-md-flex">
                <ol class="breadcrumb ms-auto">
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="table-responsive">
                    @if (count($comments) > 0)
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Article Title</th>
                                    <th class="border-top-0">Comment Content</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($comments as $comment)
                                    <tr>
                                        <td>#</td>
                                        <td>{{ $comment->article->title }}</td>
                                        <td>{{ Str::limit($comment->comment, 50) }}</td>
                                        <td>
                                            <a href="{{ route('admin.edit.comment', [$comment]) }}"> 
                                                <i class="fas fa-edit" style="font-size: 18px; margin-right: 4px"></i> 
                                            </a>
                                            <form action="{{ route('admin.delete.comment', [$comment]) }}" method="POST" style="display: inline-block">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" style="border: none; background-color: #fff;"> 
                                                    <i class="far fa-trash-alt" style="font-size: 18px; margin-left: 4px; color: red;"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="error-body text-center">
                            <h1 class="error-title text-danger">NO Data</h1>
                            <h3 class="text-uppercase error-subtitle">NO Comments need to approved yet...</h3>
                        </div>
                    @endif
                </div>
                {{ $comments->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
