@extends('admin.layout.main')
@section('content')
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-12">
                <form action="{{ route('forbidden.store') }}" method="post" class="card" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="card-header">
                        <h4 class="card-title">Yeni Harici Yasak Ekle</h4>

                    </div>
                    <div class="card-body">
                        <div class="row g-5">
                            <div class="col-xl-12">
                                <div class="col-md-6 col-xl-12">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="tip" class="mb-2">Hangi Tip</label>
                                                <select name="tip" class="form-control" required>
                                                    <option value="querystring">url sonu sorgu</option>
                                                    <option value="site">direk site</option>
                                                </select>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="value" class="mb-2">Yasaklancak Değer</label>
                                                <input type="text" name="value" class="form-control" required />
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="reirect" class="mb-2">Yönlendir</label>
                                                <input type="text" name="redirect" class="form-control"
                                                    placeholder="boş bırakırsan anasayfa yada hata çıkar" />
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
