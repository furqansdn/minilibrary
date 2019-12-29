@extends('frontend.templates.default')


@section('content')
<h2>Koleksi Buku</h2>
<blockquote><p class="flow-text">Koleksi buku yang dapat dibaca dan dipinjam</p></blockquote>
<div class="row">
    @foreach ($books as $book)
    <div class="col s12 m6">
        <div class="card horizontal hoverable">
            <div class="card-image">
                <img src="{{ $book->getCover() }}" height="200px" width="150px">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                <h6><a href=" {{ route('homepage.book', $book )}} "> {{ Str::limit($book->title,40) }} </a></h6>
                <p>{{ Str::limit($book->description,80) }}</p>
                </div>
                <div class="card-action">
                <form action=" {{ route('homepage.book.borrow', $book) }} " method="POST">
                    @csrf
                    <input type="submit" value="Pinjam Buku" class="btn right red">
                </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
{{-- Pagination --}}

{{ $books->links('vendor.pagination.materialize') }}

@endsection