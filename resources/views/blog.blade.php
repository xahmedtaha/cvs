@extends('layouts.app')

@section('content')
    <section class="container mx-auto py-24 px-4">
        <div class="flex flex-wrap justify-between items-center gap-5 border-b border-gray-200 pb-8 mb-12">
            <h2 class="text-2xl md:text-4xl text-gray-900 leading-tight font-extrabold">All Articles</h2>
            <div class="relative">
                <input class="bg-white w-full rounded border border-gray-400 focus:outline-none focus:border-orange-500 text-base px-4 pl-10 py-2" placeholder="Search" type="text">
                <svg class="w-5 h-5 absolute text-gray-400" style="left:10px; top:10px; bottom: 2px" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
        </div>
        <div class="w-full">
            <div class="flex flex-col space-y-16 xl:w-5/6">
                @forelse(\Canvas\Models\Post::all() as $post)
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <img src="{{$post->featured_image}}" class="border col-span-1 object-cover bg-center h-40 w-full rounded" loading="lazy" />
                    <div class="col-span-1 md:col-span-3">
                        <p class="text-sm text-gray-500 font-normal mb-2 -mt-1">{{$post->published_at->format('F j, yy')}}</p>
                        <h2 class="text-gray-800 text-xl font-extrabold leading-snug mb-2">
                            <a href="{{route('post', $post->slug)}}" class="text-gray-900 hover:text-orange-500">{{$post->title}}</a>
                        </h2>
                        <p class="text-sm text-gray-600 font-normal mb-3">
                            {{$post->summary}}
                        </p>
                        <a href="#" class="text-sm px-5 py-2 rounded bg-orange-100 text-orange-500 focus:shadow-outline">Read More</a>
                    </div>
                </div>
                @empty
                    <p class="text-gray-600 text-center py-5">No articles added, yet.</p>
                @endforelse

            </div>
            <div class="my-10 py-10 border-t border-gray-200 flex justify-center md:justify-end gap-5 flex-wrap">
                <a href="#" class="font-semibold tracking-wide text-sm px-5 pl-2 py-2 rounded bg-gray-200 hover:bg-gray-300 focus:bg-gray-300 focus:shadow-outline inline-flex items-center">
                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    Previous
                </a>
                <a href="#" class="font-semibold tracking-wide text-sm px-5 pr-2 py-2 rounded bg-gray-200 hover:bg-gray-300 focus:bg-gray-300 focus:shadow-outline inline-flex items-center">
                    Next
                    <svg class="w-4 h-4 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
        </div>
    </section>

@endsection
