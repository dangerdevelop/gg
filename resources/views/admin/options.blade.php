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
                                        @php
                                            $result = $options->keyBy->key->collect();
                                        @endphp

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="key" class="mb-2">kampanya_link</label>
                                                    <input type="hidden" name="option[kampanya_link][key]"
                                                        value="kampanya_link">
                                                    <input type="text" class="form-control" id="kampanya_link"
                                                        value="{{ $result['kampanya_link']['value'] }}"
                                                        name="option[kampanya_link][value]">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="key" class="mb-2">yasak_yonlendirme_link</label>
                                                    <input type="hidden" name="option[yasak_yonlendirme_link][key]"
                                                        value="yasak_yonlendirme_link">
                                                    <select name="option[yasak_yonlendirme_link][value]"
                                                        class="form-control">
                                                        <option value="home"
                                                            {{ $result['yasak_yonlendirme_link']['value'] == 'home' ? 'selected' : '' }}>
                                                            Anasayfaya Yönlendir</option>
                                                        <option value="404"
                                                            {{ $result['yasak_yonlendirme_link']['value'] == '404' ? 'selected' : '' }}>
                                                            404 at</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="key" class="mb-2">yurtdisi_giris</label>
                                                    <input type="hidden" name="option[yurtdisi_giris][key]"
                                                        value="yurtdisi_giris">
                                                    <select name="option[yurtdisi_giris][value]"
                                                        class="form-control">
                                                        <option value="acik"
                                                            {{ $result['yurtdisi_giris']['value'] == 'acik' ? 'selected' : '' }}>
                                                            Açık</option>
                                                        <option value="kapali"
                                                            {{ $result['yurtdisi_giris']['value'] == 'kapali' ? 'selected' : '' }}>
                                                            Kapat</option>
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
                    </div>

                </form>
            </div>


        </div>
    </div>
@endsection
