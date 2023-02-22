@extends('layouts.app')

@section('content')
        <div class="flex justify-center">
            <div class="w-8/12 bg-white p-6 rounded-lg">
                <form action="{{ route('posts') }}" method="post" class="mb-4">
                        @csrf

                        <div class="mb-4">
                                <label for="body" class="sr-only">Body</label>
                                <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror"
                                placeholder="Post something nice!"></textarea>
                        </div>

                                @error('body')
                                        <div class="text-red-500 mt-2 text-sm">
                                                {{ $message }}                                
                                        </div>
                                @enderror
                        <div>
                                <button type="submit" class="bg-blue-600 text-white px-4 py-1 rounded font-medium">Post

                                </button>

                        </div>

                </form>

                @if ($posts->count())
                        @foreach ($posts as $post)
                                <x-post :post="$post" />
                        @endforeach

                        {{ $posts->links() }}
                @else
                        <p>there are no posts</p>
                @endif
        </div>

        </div>

@endsection