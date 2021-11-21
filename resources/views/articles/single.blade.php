@extends('layouts.app')

@section('title','Articles-singles')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">    
                <h1 class="border-bottom border-3 border-dark my-3 pb-3">{{$articles->title}}</h1>
                <p>
                    {{$articles->subject}}
                </p>
            </div>
            <div class="row p-3">
                <form action="/artikel/{{$articles->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
                <a href="/artikel/{{$articles->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                </form>
            </div>
            
        </div>
        <a href="{{route('artikel')}}" class="btn btn-dark my-3 py-2">Previous</a>
    </div>
@endsection