@extends('admin.layout')

@section('content')
    {{-- <div class="content">
        <div class="row">
            <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Categories</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Parent</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->slug}}</td>
                                    <td>{{$item->parent_id}}</td>
                                    <td>

                                    </td>
                                </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container-fluid mt-3 ">
    <a href="{{url('admin/categories/create')}}" class="btn btn-primary text-white " style="padding: 7px; border-radius:10px;">
        + Add New Categories
    </a>
    <div class="table-responsive mt-2 bg-white p-4" style="border-radius: 20px; height:76% !important;">
        <table class="table table-striped table-hover w-100 nowrap" width="100%" id="table-menu"
            style="height: 10% !important">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Parent</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $m)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $m->name }}</td>
                        <td>{{ $m->slug }}</td>
                        <td>{{ $m->parent_id }}</td>
                        <td>
                            <div class="d-flex align-items-center gap-1" style="color: white;">
                                <a href="/admin/categories/{{ $m->id }}"
                                    class="btn btn-warning btn-sm" style="color: white;">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                <form action="/menu/{{ $m->id }}" method="post" class="delete-form">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $m->id }}">
                                    <button class="btn btn-danger btn-sm m-0 delete-button"
                                        type="submit">
                                        <i class="fa-solid fa-trash-can"></i> Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                <script>
                    const deleteButtons = document.querySelectorAll('.delete-button');

                    deleteButtons.forEach(button => {
                        button.addEventListener('click', function(event) {
                            event.preventDefault();

                            const id = this.parentNode.querySelector('input[name="id"]').value;

                            Swal.fire({
                                title: 'Hapus Data?',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#d33',
                                cancelButtonColor: '#3085d6',
                                confirmButtonText: 'Hapus',
                                cancelButtonText: 'Batal',
                                showCloseButton: false,
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                customClass: {
                                    container: 'my-swal'
                                }
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    this.parentNode.action = '/menu/' + id;
                                    this.parentNode.submit();
                                }
                            });
                        });
                    });
                </script>
            </tbody>
        </table>

    </div>
</div>
@endsection

@push('script')
<script>
    $(document).ready(function() {
        $('#table-menu').DataTable();
    });
</script>
@endpush


