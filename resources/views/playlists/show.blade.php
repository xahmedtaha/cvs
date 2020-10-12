@extends('layouts.app')

@section('title', $playlist->name)

@push('meta')
    <meta property="og:url"           content="{{url()->current()}}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{$playlist->name}}" />
    <meta property="og:description"   content="{{$playlist->description}}" />
    <meta property="og:image"         content="{{\Illuminate\Support\Facades\Storage::url($playlist->thumbnail)}}" />
@endpush

@push('js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.1/venobox.min.js" integrity="sha512-6mm1Gra+9mSztlk6Q45F1soEHmkduyd2ponCIWNo5pr0lgcr8d79GQjQ3Nw0uRR3/+y/OZGklAi38yE1QSNpCw==" crossorigin="anonymous"></script>
    <script>
        $('.venobox').venobox();
    </script>
@endpush

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.1/venobox.min.css" media="screen" integrity="sha512-e+0yqAgUQFoRrJ4pZigQXpOE0S7J9IGwmgH801h4H5ODqOCG8/GRfXHQ+9ab754NL79O7wDwdjwY3CcU8sEANg==" crossorigin="anonymous" />
@endpush

@section('content')
    <section class="container mx-auto py-24 px-4">
        <div class="border-b border-gray-200 pb-8 mb-12">
            <h2 class="text-2xl md:text-4xl text-gray-900 leading-tight font-extrabold truncate">{{$playlist->name}}</h2>
        </div>
        <div class="w-full">
            <div class="flex flex-col space-y-16 xl:w-5/6">
                @forelse($playlist->videos as $video)
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                        <img src="{{\Illuminate\Support\Facades\Storage::url($video->thumbnail)}}" class="border col-span-1 object-cover bg-center h-40 w-full rounded" loading="lazy" />
                        <div class="col-span-1 md:col-span-3">
                            <p class="text-sm text-gray-500 font-normal mb-2 -mt-1">{{$video->created_at->format('F j, yy')}}</p>
                            <h2 class="text-gray-800 text-xl font-extrabold leading-snug mb-2">
                                <a class="text-gray-900">
                                    {{$video->name}}
                                </a>
                            </h2>
                            <p class="text-sm text-gray-600 font-normal mb-3">
                                {{$video->description}}
                            </p>
                            <a href="{{$video->embed}}" data-autoplay="true" data-vbtype="video" class="venobox inline-flex items-center gap-2 text-sm px-5 py-2 rounded bg-orange-100 text-orange-500 focus:shadow-outline-orange transition duration-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                Play
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-600 text-center py-5">No videos added, yet.</p>
                @endforelse

            </div>
            <div class="my-10 py-10 border-t border-gray-200">
{{--                {!! $playlists->links() !!}--}}
{{--                                <a href="#" class="font-semibold tracking-wide text-sm px-5 pl-2 py-2 rounded bg-gray-200 transition duration-100 focus:shadow-outline-gray inline-flex items-center">--}}
{{--                                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>--}}
{{--                                    Previous--}}
{{--                                </a>--}}
{{--                                <a href="#" class="font-semibold tracking-wide text-sm px-5 pr-2 py-2 rounded bg-gray-200 transition duration-100 focus:shadow-outline-gray inline-flex items-center">--}}
{{--                                    Next--}}
{{--                                    <svg class="w-4 h-4 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>--}}
{{--                                </a>--}}
            </div>
        </div>
    </section>

@endsection
