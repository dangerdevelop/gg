@extends('admin.layout.main')
@section('content')
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-12">
                <form action="{{ route('sites.store') }}" method="post" class="card" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="card-header">
                        <h4 class="card-title">Yeni Site Ekle</h4>

                    </div>
                    <div class="card-body">
                        <div class="row g-5">
                            <div class="col-xl-12">
                                <div class="col-md-6 col-xl-12">
                                    {{ csrf_field() }}
                                <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group mb-3">
                                                <label for="reirect" class="mb-2">Site</label>
                                                <input type="text" name="site" class="form-control"
                                                    placeholder="example.com" />
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="tip" class="mb-2">Sistem</label>
                                                <select name="system" class="form-control" required>
                                                   @foreach(App\Classes\SystemStatusEnum::cases() as $system)
                                                     <option value="{{$system->value}}">{{$system->label()}}</option>
                                                   @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="tip" class="mb-2">Durumu</label>
                                                <select name="status" class="form-control" required>
                                                    @foreach (App\Classes\SiteStatusEnum::cases() as $value)
                                                        <option value="{{ $value->value }}">{{ $value->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>



                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
