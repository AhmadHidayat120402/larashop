@extends('admin.layout')

@section('content')
    <div class="container-fluid mt-3">
        <div class="row" >
            <div class="col-md-6" >
                <div class="card card-default" style="border-radius: 20px;">
                    <div class="card-header card-header-border-bottom" style="border-radius: 20px;">
                        <h2>Category</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('admin/categories') }}" class="bg-white"
                        style="border-radius: 20px;" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="categories" class="form-label">Name</label>
                            <input type="text" class="form-control" id="categories" name="categories" required
                                placeholder="input category...">
                        </div>
                        <div class="mb-2 boder-top">
                            <button type="submit" class="btn btn-primary text-white">Simpan</button>
                            <a href="{{ url('admin/categories') }}" class="btn btn-light px-3">Kembali</a>
                        </div>
                    </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
