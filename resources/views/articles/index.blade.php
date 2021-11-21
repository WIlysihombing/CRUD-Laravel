@extends('layouts.app')

@section('title','Articles-index')


@section('content')
    <div class="container">
        <h1>Halaman Artikel</h1>
        {{-- <a href="/artikel/create" class="btn btn-primary">Bikin Artikel+</a> --}}
    
        {{-- <form action=""></form> --}}
        @foreach ($articles->chunk(3) as $articleChunk)
            <div class="row">
                @foreach ($articleChunk as $article)
                        <div class="col card m-2 bg-light">
                            <img class="rounded mx-auto d-block mt-3" src="/app-assets/image/{{$article->thumbnail}}" width="20%" alt="Belajar menambah foto">
                                <div class="card-body">
                                        <h3>{{ucfirst($article->title)}}</h3>
                                        <p>{{$article->subject}}</p>
                                        <a href="/artikel/{{$article->slug}}" class="btn btn-info btn-sm">Baca</a>
                                </div>
                        </div>
                @endforeach
            </div>
        @endforeach
    {{-- ini untuk membuat link saat menggunakan paginate/pagination --}}
        {{$articles->links()}}
    </div>
@endsection