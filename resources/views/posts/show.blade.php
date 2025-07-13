@extends('layout')
@section('content')
    <div class="bg-white shadow rounded p-4 space y-2">
        <h2 class="text-lg font-medium mb-2">{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <a href="{{ route('posts.index') }}" class="text-gray-600 underline">Kembali ke daftar post</a>
    </div>
@endsection