@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="w-6/12 bg-white border-gray-500  p-6 rounded-lg">

        <div class="bg-gray-200 p-3 w-full rounded-t-lg"> Add Post</div>
        @if(Session::has('post_created'))
        <div class="p-3 bg-green-200">
            {{Session::get('post_created')}}
        </div>
        @endif
        <div class="px-3 mt-0 border rounded-b-md pb-3 border-gray-200">
            <form method="POST" action="{{ route('post.create')}}">
                @csrf
                <div class="mb-4 mt-3">
                    <label for="title" class="sr-only">Post Title</label>
                    <input type="text" name="title" id="title" placeholder="Enter Post Title" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('title') border-red-500 @enderror" value="{{old('title')}}">
                    @error('title')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="body" class="sr-only">Post Description</label>
                    <textarea name="body" id="body" class="bg-gray-100 border-2 w-full p-4 rounded-lg " value="{{old('body')}}" cols="4" rows="6"></textarea>
                    @error('body')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-green-500 text-white px-4 py-3 rounded font-medium w-full">Add Post</button>
                </div>

            </form>
            <a href="/posts"><button type="button" class="bg-blue-400 mt-1  text-white px-4 py-3 rounded font-medium w-full">
                    Back
                </button></a>
        </div>
    </div>
</div>
@endsection