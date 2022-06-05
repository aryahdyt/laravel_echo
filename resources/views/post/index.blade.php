<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Post') }}
      </h2>
  </x-slot>

<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
        
            <a href="{{ route('post.create') }}" class="btn btn-primary">Create New Post</a>
            <table class="table table-striped table-bordered my-3">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Published</th>
                  <th>Actions</th>
                </tr>
              </thead>
        
              <tbody>
                @foreach ($posts as $no => $post)
                  <tr>
                    {{-- <th>{{ $post->id }}</th> --}}
                    <th>{{ ++$no }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->published ? "Published" : "Draft" }}</td>
                    <td><a href="{{ route('post.edit', $post->id) }}" class="btn btn-sm btn-default">Edit</a></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <div class="text-center">
              {{ $posts->links() }}
            </div>
          </div>
      </div>
  </div>
</div>
</x-app-layout>