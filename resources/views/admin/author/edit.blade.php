@extends('admin.templates.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Author</h3>
            <a href="{{route('admin.author')}}" class="btn btn-primary float-right">Batal</a>
        </div>
        <div class="card-body">
            <form action=" {{route('admin.author.update', $author)}} " method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="name" value=" {{ old('name') ?? $author->name }} " class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Penulis">
                    @error('name')
                    <span class="help-block text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection