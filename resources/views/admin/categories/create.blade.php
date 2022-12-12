@extends('admin.layouts.layout')

@section('content')

    <section>
        <div class="card">
            <div class="card-header blue-gradient"><h4 class="ml-4 text-white">Create Category</h4></div>
            <div class="card-body">
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
                    <div class="md-form">
                        <i class="fas fa-pencil-alt prefix"></i>
                        <input type="text" id="form8" class="form-control validate" name="title">
                        <label for="form8" data-error="wrong" data-success="right" class="">Title category</label>
                    </div>

                    <div class="md-form">
                         <i class="fas fa-pencil-alt prefix"></i>
                         <textarea type="text" id="summary-ckeditor" class="md-textarea form-control" rows="3" name="desc"></textarea>
                         <label for="form11" class="">Description</label>
                    </div>

                    <div class="md-form pl-4">
                        <select class="browser-default custom-select w-50" name="parent_id" >
                            <option selected>Select Parent</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                        <button type="submit" class="btn btn-dark-green">Save Category</button>
                </form>
            </div>
        </div>


    </section>
@push('ckeditor')
<!-- CKEditor -->
<script type="text/javascript" src="{{ asset('assets/admin/ckeditor/ckeditor.js') }} "></script>
@endpush

@endsection
