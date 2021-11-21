@extends('layouts.app')

@section('title','Article-Edit')

@section('content')
    
    <div class="container">
        <h1>Edit Artikel</h1>

        <form action="/artikel/{{$articles->id}}" method="POST">

        @csrf
        @method('PUT')

            <x-input field="title" label="Judul" type="text" value="{{$articles->title}}"/>
            <x-textarea field="subject" label="Subject" value="{{$articles->subject}}" />

            {{-- <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control mt-2" id="title" name="title" 
                    value="{{old('title') ? old('title') : $articles->title}}">
                @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div> --}}

            {{-- <div class="form-group">
                <label for="subject" class="mt-2">Subject</label>
                <textarea class="form-control mt-2" id="subject" name="subject" rows="3">{{old('subject') ? old('subject') : $articles->subject}}</textarea> 
                @error('subject')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div> --}}

            <button type="submit" class="btn btn-primary mt-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Submit">Submit</button>        
        </form>
    </div>

@endsection