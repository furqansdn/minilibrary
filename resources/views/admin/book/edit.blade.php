@extends('admin.templates.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Buku</h3>
            <a href="{{route('admin.book.update', $book )}}" class="btn btn-primary float-right">Batal</a>
        </div>
        <div class="card-body">
            <form action=" {{route('admin.book.update', $book)}} " method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="nama">Judul</label>
                    <input type="text" name="title" value=" {{ old('title') ?? $book->title }} " class="form-control @error('title') is-invalid @enderror " placeholder="Masukkan Judul">
                    @error('title')
                    <span class="help-block text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control  @error('description') is-invalid @enderror" name="description" rows="3" placeholder="Masukkan Deskripsi">{{ old('description') ?? $book->description }}</textarea>
                    @error('description')
                    <span class="help-block text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                  <label for="author_id">Penulis</label>
                  <select class="form-control select2 @error('author_id') is-invalid @enderror" name="author_id" id="author_id" placeholder="Select Please"> 
                      @foreach ($authors as $author)
                        <option value=" {{$author->id}}"
                            @if ($author->id == $book->author_id)
                                selected
                            @endif
                        > 
                            {{ $author->name }} 
                        </option>
                      @endforeach                  
                    @error('author_id')
                    <span class="help-block text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                  </select>
                </div>

                <div class="form-group">
                  <label for="cover">Sampul</label>
                  <input type="file" class="form-control" name="cover" id="cover" placeholder="Selece File" aria-describedby="fileHelpId">
                  <small id="fileHelpId" class="form-text text-muted">Help text</small>

                  @error('cover')
                  <span class="help-block text-danger">
                      {{ $message }}
                  </span>
                  @enderror
                </div>

                <div class="form-group">
                    <label for="qty">Jumlah</label>
                    <input type="text" name="qty" value=" {{ old('qty') ?? $book->qty }} " class="form-control @error('qty') is-invalid @enderror " placeholder="Masukkan Jumlah">
                    @error('qty')
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

@push('select2-css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css')}}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>

    <script>
        $('.select2').select2();
    </script>
@endpush
