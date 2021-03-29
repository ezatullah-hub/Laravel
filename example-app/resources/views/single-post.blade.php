@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="w-6/12 bg-white   p-6 rounded-lg">

            <div class="bg-gray-200 p-3 rounded-t-lg"> Post Details</div>
            <div class="px-3 mt-0 border  pb-3 border-gray-200">
                <h1 class="p-3 font-normal text-2xl">{{$post->title}}</h1>
                <p>{{$post->body}}</p>
            </div>
            <a href="/posts"><button type="button" class="bg-blue-500 rounded-t-none text-white px-4 py-3 rounded font-medium w-full">
                Back
            </button></a>
        </div>
    </div>
@endsection