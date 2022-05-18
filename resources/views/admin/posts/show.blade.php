@extends('layouts.admin')

@section('title', 'Details - $post->title')

@section('content')
      <main>
        <div class="container pb-4">
          <div class="row g-4 pt-4">
            <div class="col-8">
              <h2 class="pt-2">{{ $post->title }}</h2>
              <p class="card-text pt-2">{{ $post->description }}</p>
            </div>
          </div>
        </div>
      </main>
@endsection