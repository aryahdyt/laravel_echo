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
            <h1>{{ $post->title }}</h1>
            {{ $post->updated_at->toFormattedDateString() }}
            
            <span class="ml-3 badge {{ $post->published ? "bg-success" : "bg-warning" }}">{{ $post->published ? "Published" : "Draft" }}</span>
            <hr />
            <p class="lead">
              {{ $post->content }}
            </p>
          </div>
      </div>
  </div>
</div>
</x-app-layout>