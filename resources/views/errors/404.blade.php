{{--@extends('front.layouts.layout', ['title' => 'Страница не найдена'])--}}

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mt-4 mb-4">
                <div class="card-header">
                    <h1>Страница не найдена</h1>
                </div>
                <div class="card-body">
                    <img src="{{ asset('assets/front/img/404.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="card-footer">
                    <p>Запрошенная страница не найдена.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
