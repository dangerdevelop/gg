@extends('admin.layout.main')
@section('content')
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-12">
                <form action="# method="post" class="card" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="card-header">
                        <h4 class="card-title">Menü Listesi</h4>
                        <a href="#" class="float-end text-end" style="width: 87%;"><i
                                class="fa fa-plus"></i> Create</a>

                    </div>
                    <div class="card-body">
                        <div class="row g-5">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-md-6 col-xl-12">
                                        <div class="table-responsive">
                                            <table class="table table-vcenter card-table">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Title</th>
                                                        <th>Resim</th>
                                                        <th>Sıra</th>
                                                        <th class="w-1"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
