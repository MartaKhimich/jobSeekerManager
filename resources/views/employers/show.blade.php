@extends('layouts.base')

@section('title', 'Компании - ' . $employer->title)

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{$employer->title}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Обзор</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('employers.index') }}">Компании</a></li>
                        <li class="breadcrumb-item active">Просмотр</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Детали Компании</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                        <div class="row">
                            <div class="col-12">
                                <h4>Описание</h4>
                                <div class="post" style="height: 80%">
                                    @markdown {{ $employer->description }} @endmarkdown
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <div class="text-muted">
                            <h5 class="mt-5 text-muted">Вакансии</h5>
                            {{--                                Ссылка на компанию --}}
                            <h5 class="mt-5 text-muted">Контакты</h5>
                            {{--                                Список контактов --}}
                        </div>
                        <div class="text-center mt-5 mb-3">
                            <a href="{{ route('employers.edit', [$employer->id]) }}" class="btn btn-sm btn-primary">
                                Редактировать
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </section>
@endsection

