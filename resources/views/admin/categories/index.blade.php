@extends('admin.layouts.app')
@section('title', "Categories")

@section('content')
     
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Categories</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <div class="d-md-flex">
                <ol class="breadcrumb ms-auto">
                </ol>
                <a 
                    href="{{ route('admin.get.add.category') }}"
                    class="btn btn-success waves-effect waves-light text-white" 
                    type="submit">Add New Category
                </a>
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
                    @if (count($categories) > 0)
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Category Name</th>
                                    <th class="border-top-0">Category Description</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>#</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>
                                            <a href="{{ route('admin.edit.category', [$category]) }}"> 
                                                <i class="fas fa-edit" style="font-size: 18px; margin-right: 4px"></i> 
                                            </a>
                                            <form action="{{ route('admin.delete.category', [$category]) }}" method="POST" style="display: inline-block">
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
                            <h3 class="text-uppercase error-subtitle">NO Categories Added Yet...</h3>
                            <a href="{{ route('admin.get.add.category') }}" class="btn btn-danger btn-rounded waves-effect waves-light mb-5 text-white">add your FIRST Category NOW</a>
                        </div>
                    @endif
                </div>
                {{ $categories->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
