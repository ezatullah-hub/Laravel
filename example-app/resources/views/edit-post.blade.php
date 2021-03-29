@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="w-6/12 bg-white border-gray-500  p-6 rounded-lg">

            <div class="bg-gray-200 p-3  rounded-t-lg"> Edit Post</div>
            @if(Session::has('post_updated'))
                <div class="p-3 bg-green-200"> 
                    {{Session::get('post_updated')}} 
                </div>
            @endif
            <div class="px-3 mt-0 border rounded-b-md pb-3 border-gray-200">
            <form method="POST" action="{{route('post.update')}}">
                @csrf
                <input type="hidden" name="id" value="{{$post->id}}">
                <div class="mb-4 mt-3">
                    <label for="title" class="sr-only">Post Title</label>
                    <input type="text" name="title" id="title" placeholder="Enter Post Title" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('title') border-red-500 @enderror" value="{{$post->title}}">
                    @error('title')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                <label for="body" class="sr-only">Post Description</label>
                <textarea name="body" id="body" class="bg-gray-100 border-2 w-full p-4 rounded-lg " cols="4" rows="6">{{$post->body}}</textarea>
                    @error('body')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-green-500 text-white px-4 py-3 rounded font-medium w-full">Update Post</button>
                </div>
                
            </form>
            <a href="/posts"><button type="button" class="bg-blue-400 mt-1  text-white px-4 py-3 rounded font-medium w-full">
            Back</button></a>
            </div>
        </div>
    </div>
@endsection