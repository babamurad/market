@extends('admin.layouts.layout')

@section('content')

    <section>
        <div class="card">
            <div class="card-header blue-gradient"><h4 class="ml-4 text-white">Edit Category</h4></div>
            <div class="card-body">
                <form action="{{ route('categories.update', $category->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="md-form">
                        <i class="fas fa-pencil-alt prefix"></i>
                        <input type="text" id="form8" class="form-control validate" name="title" value="{{ $category->title }}">
                        <label for="form8" data-error="wrong" data-success="right" class="">Title category</label>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-pencil-alt prefix"></i>
                        <textarea type="text" id="form11" class="md-textarea form-control" rows="3" name="desc">{{ $category->desc }}</textarea>
                        <label for="form11" class="">Description</label>
                    </div>
                    <button type="submit" class="btn btn-dark-green">Save Category</button>
                    <p>{{ ($category->desc) }}</p>
                </form>
            </div>
        </div>


    </section>

@endsection

