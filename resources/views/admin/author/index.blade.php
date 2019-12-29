@extends('admin.templates.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Author</h3>
            <a href=" {{route('admin.author.create')}} " class="btn btn-primary float-right">Tambah Penulis</a>
        </div>
        <div class="card-body">
            

            <table class="table table-bordered table-hover" id="data">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        <tr>
                            <td>1</td>
                            <td>Seseorang</td>
                        </tr>
                    </tbody> --}}
            </table>
        </div>
    </div>

    <form action="" id="deleteForm" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" class="btn btn-danger" style="display: none">
    </form>
@endsection

@push('scripts')
@include('admin.templates.partials.alert')
    <script>
        $(function () {
            $('#data').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.author.data') }}",
                columns: [
                    {data: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'name'},
                    {data: 'action'}
                ]
            });
        });
    </script>

    
@endpush