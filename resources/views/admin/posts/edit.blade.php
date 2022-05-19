@extends('layouts.admin')

@section('title', "Modifica Post")

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('admin.posts.update', $post->slug) }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description">{{ $post->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Invia</button>
            </form>
        </div>
    </div>
  </div>
@endsection