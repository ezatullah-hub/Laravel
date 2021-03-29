@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="w-10/12 bg-white border-gray-500  p-6 rounded-lg">
            <div  class=" flex justify-center border bg-gray-100 border-gray-100 mb-0 rounded-t-md"> 
                <h1 class="text-xl p-3">All Post </h1>
            </div>
            <a href="/add-posts" class="no-underline">
            <Button class="bg-green-500 w-full  text-white px-2 py-1 rounded rounded-t-none font-medium">
            Add New Post</Button></a>
            <div>
            @if(Session::has('post_deleted'))
            <div class="bg-green-500 p-4 rounded-lg mb-6 mt-1 text-white text-center">
                {{Session::get('post_deleted')}}
            </div>
            @endif
                <table class="mt-1 border border-gray-200 rounded-t-md table-fixed">
                    <thead class="border border-gray-200 rounded-t-md">
                        <tr class="bg-gray-200 p-2">
                            <th class="w-1/4 p-2">ID</th>
                            <th class="w-1/4 p-2">Post Title</th>
                            <th class="w-1/2 p-2">Post Description</th>
                            <th class="w-1/2 p-2 pr-6">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr class="bg-blue-100 font-thin">
                                <th  class="p-2 font-thin">{{$post->id}}</th>
                                <th class="p-2 font-thin">{{$post->title}}</th>
                                <th class="p-2 font-thin">{{$post->body}}</th>
                                <th class="inline-flex p-2">
                                <a href="/posts/{{$post->id}}"><button class="bg-blue-400 mr-1 text-white px-2 py-1 rounded font-medium">Details</button></a>
                                <a href="/edit-post/{{$post->id}}"><button class="bg-green-400 mr-1 text-white px-2 py-1 rounded font-medium">Edit</button></a>
                                <a href="/delete-post/{{$post->id}}" class="pr-10"><button class=" bg-red-500 text-white px-2 py-1  rounded font-medium">Delete</button></a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table >
            </div>
        </div>
    </div>
@endsection