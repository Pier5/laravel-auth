@extends('layouts.app')

@section('title', 'Index')

@section('content')
    <div class="container">
        @if (session('deleted'))
            <div class="alert alert-warning">{{ session('deleted') }}</div>
        @endif
        <div class="row">
            <div class="col">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                        <th class="text-center" scope="col">#</th>
                        <th class="text-center" scope="col">Title</th>
                        <th class="text-center" scope="col">Slug</th>
                        <th class="text-center" scope="col">Created At</th>
                        <th class="text-center" scope="col">Updated At</th>
                        <th class="text-center" scope="col" colspan="3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th class="text-center" scope="row">{{ $post->id }}</th>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->slug }}</td>
                                <td>{{ date('d/m/Y', strtotime($post->created_at)) }}</td>
                                <td>{{ date('d/m/Y', strtotime($post->updated_at)) }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('admin.posts.show', $post->id) }}">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-danger btn-delete" data-id="{{ $post->id }}">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{ $posts->links() }}

    </div>
@endsection