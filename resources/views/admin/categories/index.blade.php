@extends('admin.layouts.layout')

@section('content')

    <section>

        <!-- Top Table UI -->
        <div class="card p-2 mb-3 mx-4 mb-5">

            <!-- Grid row -->
            <div class="row">
                <div class="col-xl-8 col-md-6">
                    <a href="{{ route('categories.create') }}" type="button" class="btn btn-dark-green waves-effect waves-light"><i class="fas fa-plus-circle mr-2"></i>Add category</a>
                </div>
                <!-- Grid column -->
                <div class="col-xl-4 col-md-6">
                    <form class="form-inline mt-2 ml-2">
                        <div class="form-group md-form mt-2">
                            <input class="form-control w-100" type="text" placeholder="Search">
                        </div>
                        <button class="btn btn-sm btn-primary ml-2 mr-0 mb-md-0 mb-4 px-2 waves-effect waves-light">
                            <i class="fas fa-search"></i></button>
                    </form>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Top Table UI -->

        <div class="card card-cascade narrower z-depth-0">
            <div
                class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">
                    <div>
                    <a href="{{ route('categories.index') }}" class="white-text mx-3"><i class="fas fa-list mr-3"></i>Categories</a>
                    </div>

                    <div>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light"><i
                                class="fas fa-sync-alt"></i></button>
                    </div>

            </div>

            <div class="px-4">
                @if($categories->count())

                    <div class="table-responsive">

                        <!--Table-->
                        <table class="table table-hover mb-2">

                            <!-- Table head -->
{{--                            --}}
                            <thead>
                            <tr>
                                <th class="th-lg"><a class="sort" href="{{ route('admin.categories.sort', 'id') }}">Id <i class="sortic fas fa-sort-up ml-1"></i></a></th>
                                <th class="th-lg"><a href="{{ route('admin.categories.sort', 'title') }}">Category Title <i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a>Category Slug <i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg"><a>Description<i class="fas fa-sort ml-1"></i></a></th>
                                <th class="th-lg">Action</th>
                            </tr>
                            </thead>
                            <!-- Table head -->
{{--                            <i class="fas fa-sort-up"></i>--}}
{{--                            <i class="fas fa-sort-down"></i>--}}

                            <!-- Table body -->
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->title }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>{{ $category->desc }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', $category->id) }}"
                                           class="btn btn-info btn-sm float-left mr-1" style="margin-top: 0.3rem;">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('categories.destroy', $category->id) }}"
                                              method="post" class="float-left">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Подтвердите удаление')">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <!-- Table body -->

                        </table>
                        <!-- Table -->

                    </div>

                    <hr class="my-0">

                    <!-- Bottom Table UI -->
                    <div class="d-flex justify-content-between">

                        {{--                    {{ $categories->links("pagination::bootstrap-4") }}--}}

                    </div>
                    <!-- Bottom Table UI -->
                @else
                    <p>Категорий пока нет</p>
                @endif
            </div>

        </div>

    </section>

@endsection
