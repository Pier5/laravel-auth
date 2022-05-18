@extends('layouts.admin')

@section('title', "Dettagli - $post->title")

@section('content')
      <main>
        <div class="container pb-4">

            <div class="row g-4 pt-4">
                <div class="col-8">
                    <h2 class="pt-2">Titolo: {{ $post->title }}</h2>
                    <h3 class="pt-2">Descrizione:</h3>
                    <p class="card-text pt-2">{{ $post->description }}</p>
                </div>
            </div>
            <a class="btn btn-primary mt-4" href="{{ route('admin.posts.index') }}"><span class="text-white">Torna indietro</span></a>

        </div>
      </main>
@endsection