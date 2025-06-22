@extends('admin.layout.main')
@section('content')
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-12">
                <form action="{{ route('options.store') }}" method="post" class="card" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="card-header">
                        <h4 class="card-title">Site Ayarları</h4>

                    </div>
                    <div class="card-body">
                        <div class="row g-5">
                            <div class="col-xl-12">
                                <div class="row">

                                    <div class="col-md-6 col-xl-12">
                                        <input type="hidden" name="csrf_token" value="{{ csrf_token() }}" />
                                        @method('POST')
                                        <div class="row">
                                            @foreach ($options as $option)
                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="key" class="mb-2">{{ $option->key }}</label>
                                                        <input type="hidden" name="option[{{$option->id}}][key]"
                                                            value="{{ $option->key }}" />
                                                        <input type="text" class="form-control" id="{{ $option->key }}"
                                                            value="{{ $option->value }}" name="option[{{$option->id}}][value]">
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>

                </form>
            </div>


        </div>
    </div>
@endsection
