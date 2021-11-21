@extends('layouts.app')

@section('title','Article-Create')

@section('content')
    
    <div class="container">
        <h1>Bikin Artikel Baru</h1>

        <form action="/artikel" method="POST" enctype="multipart/form-data">

        @csrf

            <x-input field="title" label="Judul" type="text"/>
            <x-textarea field="subject" label="Subject"/>

            {{-- <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div> --}}

            {{-- <div class="form-group">
                <label for="subject">Subject</label>
                <textarea class="form-control" id="subject" name="subject" rows="3">{{old('subject')}}</textarea>
                @error('subject')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div> --}}
            
            <div class="my-3">
                <label for="formFile" class="form-label">Upload Thumbnail</label>
                <input class="form-control" type="file" id="thumbnail" name="thumbnail">
            </div>

            <button type="submit" class="btn btn-primary mt-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Submit">Submit</button>
        </form>
    </div>

@endsection