<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Detail Post') }}
      </h2>
  </x-slot>

<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <form method="post" action="{{ route('post.update', $post->id) }}" id="update-form">
              @method('PUT')
              @csrf
              <div class="form-group mb-2">
                <label for="post_title">Title</label>
                <input type="text" class="form-control" id="post_title" name="title" placeholder="Title" value="{{ old('title', $post->title) }}">
              </div>
        
              <div class="form-group mb-2">
                <label for="post_content">Post Content</label>
                <textarea class="form-control" rows="8" id="post_content" name="content" placeholder="Write something amazing..." value="{{ old('content') }}">{{ $post->content }}</textarea>
              </div>

              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="published" name="published" {{ $post->published ? "checked" : "" }}>
                <label class="form-check-label" for="published">Published</label>
              </div>
        
              {{-- <button type="submit" class="btn btn-primary btn-lg">Update Post</button> --}}
            </form>

            <button onclick="event.preventDefault();
                document.getElementById('update-form').submit();" class="btn btn-success">Save Post</button>

            <button onclick="event.preventDefault();
                      document.getElementById('delete-form').submit();" class="btn btn-outline-danger">Destroy</button>
            <form id="delete-form" method="post" action="{{ route('post.destroy', $post->id) }}">
              @csrf
              @method("DELETE")
            </form>

            
          </div>
      </div>
  </div>
</div>
</x-app-layout>