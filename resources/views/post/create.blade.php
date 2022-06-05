<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Create Post') }}
      </h2>
  </x-slot>

<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <form method="post" action="{{ route('post.store') }}">
              @csrf
              <div class="form-group mb-2">
                <label for="post_title">Title</label>
                <input type="text" class="form-control" id="post_title" name="title" placeholder="Title" value="{{ old('title') }}">
              </div>
        
              <div class="form-group mb-2">
                <label for="post_content">Post Content</label>
                <textarea class="form-control" rows="8" id="post_content" name="content" placeholder="Write something amazing..." value="{{ old('content') }}"></textarea>
              </div>

              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="published" name="published">
                <label class="form-check-label" for="published">Published</label>
              </div>
        
              <button type="submit" class="btn btn-primary btn-lg">Save Post</button>
          </div>
      </div>
  </div>
</div>
</x-app-layout>