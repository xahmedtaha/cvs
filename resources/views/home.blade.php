@extends('layouts.app')

@push('meta')
    <meta property="og:url"           content="{{url()->current()}}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Curriculum Vitae School" />
    <meta property="og:description"   content="a youth organization, non-profitable team that aims to help everyone find their way to their careers." />
    <meta property="og:image"         content="{{asset('img/logo.png')}}" />
@endpush

@section('content')
    <section class="text-gray-700 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <div data-aos="fade-up" data-aos-delay="50">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 full-name">
                        <span class="font-bold text-orange-500">C</span>urriculum <span class="font-bold text-orange-500">V</span>itae <span class="font-bold text-orange-500">S</span>chools
                    </h1>
                    <p class="mb-8 leading-relaxed">
{{--                        The initiative organization CVS provides a platform for--}}
{{--                        experts and students to share their knowledge, experience,--}}
{{--                        and consultation with others. This creates a learning--}}
{{--                        environment that helps students improve their curricular--}}
{{--                        vitae and shape their career paths.--}}
                        CVS (Curriculum Vitae School) is a youth organization, non-profitable team that aims to help everyone find their way to their careers. Either high schoolers, college students or graduates! We want to direct and put you near your goals through providing the following services.
                    </p>
                </div>
                <div class="flex justify-center">
                    <a href="#services" data-aos="zoom-in" data-aos-delay="100" class="inline-flex text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-orange-600 rounded text-lg">Get Started</a>
                    <a href="#contact" data-aos="zoom-in" data-aos-delay="200" class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 rounded text-lg">Contact</a>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6" data-aos="fade-up" data-aos-delay="50">
                <img class="object-cover object-center rounded" alt="hero" src="{{asset('img/board.svg')}}">
            </div>
        </div>
    </section>
    <section class="text-gray-700 body-font" id="services">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
{{--                <h2 class="text-xs text-orange-500 tracking-widest font-medium title-font mb-1">SUBTITLE</h2>--}}
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Our Services</h1>
{{--                <p class="lg:w-2/3 mx-auto leading-relaxed text-base"></p>--}}
            </div>
            <div class="flex flex-wrap -m-4 items-stretch">
                <div class="xl:w-1/3 md:w-1/2 p-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-orange-100 text-orange-500 mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Build your CV/Resume</h2>
                        <p class="leading-relaxed text-base">In this service, you will be able to dive deep into what to write in your CV and how to correctly! Serving you this to be able to reach your dream college, job or recruitment! </p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-orange-100 text-orange-500 mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Get you close to your admission process</h2>
                        <p class="leading-relaxed text-base">This service clears the confusion about standardized tests and colleges/universities! Providing you with information about them, and how to prepare! </p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-orange-100 text-orange-500 mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Enhance your soft and hard skills</h2>
                        <p class="leading-relaxed text-base">CVS sets one’s sights on all the different soft skills a student needs to have and improve by supplying them with materials & ways to reach a certain goal to ensure efficient work! </p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-orange-100 text-orange-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Know more about local and international activities and competitions</h2>
                        <p class="leading-relaxed text-base">To make sure you implement these skills into a useful output, our goal is delivering details about competitions/activities you can execute your skills in and upgrade your CV with.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Latest Events</h1>
{{--                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>--}}
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="lg:w-1/3 sm:w-1/2 p-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="{{asset('img/events/Event.png')}}">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="mb-3 tracking-widest text-xs title-font font-medium text-orange-500 mb-1 bg-orange-100 rounded py-1 px-2 font-bold inline-block">EVENT</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">First Step to success!</h1>
                            <p class="leading-relaxed">First Successful, sponsored event talking about how to write a CV and how to choose your career correctly and efficiently.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="{{asset('img/events/supervision.png')}}">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="mb-3 tracking-widest text-xs title-font font-medium text-orange-500 mb-1 bg-orange-100 rounded py-1 px-2 font-bold inline-block">EVENT</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Main Partner; Bena</h1>
                            <p class="leading-relaxed">The official sponsor of the team, providing certified speakers for our sessions and trainings in various fields.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="{{asset('img/events/Elshamy.png')}}">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="mb-3 tracking-widest text-xs title-font font-medium text-orange-500 mb-1 bg-orange-100 rounded py-1 px-2 font-bold inline-block">EVENT</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Viitor online event</h1>
                            <p class="leading-relaxed">Through our partnership with Viitor, we were able to participate in Al-Shami and Maghribi event by supplying trainers.</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="{{asset('img/events/Abdo-Smay.png')}}">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="mb-3 tracking-widest text-xs title-font font-medium text-orange-500 mb-1 bg-orange-100 rounded py-1 px-2 font-bold inline-block">EVENT</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">MARJ3</h1>
                            <p class="leading-relaxed">The co-founder of MARJ3 gave a session for our audience, awarding them a ticket to attend a course for studying abroad!</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/605x365">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="mb-3 tracking-widest text-xs title-font font-medium text-orange-500 mb-1 bg-orange-100 rounded py-1 px-2 font-bold inline-block">EVENT</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Online Free Sessions</h1>
                            <p class="leading-relaxed">We offer sessions and live aside from events that discuss different topics and skills explained by professional speakers!</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="{{asset('img/events/benaa-training.png')}}">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                            <h2 class="mb-3 tracking-widest text-xs title-font font-medium text-orange-500 mb-1 bg-orange-100 rounded py-1 px-2 font-bold inline-block">EVENT</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Trainers preparation online course</h1>
                            <p class="leading-relaxed">Again with Bena partnership, this virtual session aimed to give you a full understanding on soft skills and training.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    <section class="text-gray-700 body-font">--}}
{{--        <div class="container px-5 py-24 mx-auto">--}}
{{--            <div class="flex flex-col text-center w-full mb-20">--}}
{{--                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Master Cleanse Reliac Heirloom</h1>--}}
{{--                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>--}}
{{--            </div>--}}
{{--            <div class="flex flex-wrap -m-4 text-center">--}}
{{--                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">--}}
{{--                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">--}}
{{--                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-orange-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">--}}
{{--                            <path d="M8 17l4 4 4-4m-4-5v9"></path>--}}
{{--                            <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>--}}
{{--                        </svg>--}}
{{--                        <h2 class="title-font font-medium text-3xl text-gray-900">2.7K</h2>--}}
{{--                        <p class="leading-relaxed">Downloads</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">--}}
{{--                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">--}}
{{--                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-orange-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">--}}
{{--                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>--}}
{{--                            <circle cx="9" cy="7" r="4"></circle>--}}
{{--                            <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>--}}
{{--                        </svg>--}}
{{--                        <h2 class="title-font font-medium text-3xl text-gray-900">1.3K</h2>--}}
{{--                        <p class="leading-relaxed">Users</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">--}}
{{--                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">--}}
{{--                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-orange-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">--}}
{{--                            <path d="M3 18v-6a9 9 0 0118 0v6"></path>--}}
{{--                            <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>--}}
{{--                        </svg>--}}
{{--                        <h2 class="title-font font-medium text-3xl text-gray-900">74</h2>--}}
{{--                        <p class="leading-relaxed">Files</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">--}}
{{--                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">--}}
{{--                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-orange-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">--}}
{{--                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>--}}
{{--                        </svg>--}}
{{--                        <h2 class="title-font font-medium text-3xl text-gray-900">46</h2>--}}
{{--                        <p class="leading-relaxed">Places</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="text-gray-700 body-font">--}}
{{--        <div class="container px-5 py-24 mx-auto">--}}
{{--            <div class="flex flex-wrap w-full mb-20">--}}
{{--                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">--}}
{{--                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Our Blog</h1>--}}
{{--                    <div class="h-1 w-20 bg-orange-500 rounded"></div>--}}
{{--                </div>--}}
{{--                <p class="lg:w-1/2 w-full leading-relaxed text-base">See More</p>--}}
{{--            </div>--}}
{{--            <div class="flex flex-wrap -m-4">--}}
{{--                <div class="xl:w-1/4 md:w-1/2 p-4">--}}
{{--                    <div class="bg-gray-100 p-6 rounded-lg">--}}
{{--                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content">--}}
{{--                        <h3 class="tracking-widest text-orange-500 text-xs font-medium title-font">SUBTITLE</h3>--}}
{{--                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Chichen Itza</h2>--}}
{{--                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="xl:w-1/4 md:w-1/2 p-4">--}}
{{--                    <div class="bg-gray-100 p-6 rounded-lg">--}}
{{--                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/721x401" alt="content">--}}
{{--                        <h3 class="tracking-widest text-orange-500 text-xs font-medium title-font">SUBTITLE</h3>--}}
{{--                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Colosseum Roma</h2>--}}
{{--                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="xl:w-1/4 md:w-1/2 p-4">--}}
{{--                    <div class="bg-gray-100 p-6 rounded-lg">--}}
{{--                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/722x402" alt="content">--}}
{{--                        <h3 class="tracking-widest text-orange-500 text-xs font-medium title-font">SUBTITLE</h3>--}}
{{--                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Great Pyramid of Giza</h2>--}}
{{--                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="xl:w-1/4 md:w-1/2 p-4">--}}
{{--                    <div class="bg-gray-100 p-6 rounded-lg">--}}
{{--                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/723x403" alt="content">--}}
{{--                        <h3 class="tracking-widest text-orange-500 text-xs font-medium title-font">SUBTITLE</h3>--}}
{{--                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">San Francisco</h2>--}}
{{--                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
            <h1 class="text-3xl font-medium title-font text-gray-900 mb-12 text-center">Testimonials</h1>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/2 mx-auto w-full" data-aos="zoom-in" data-aos-delay="100">
                    <div class="h-full bg-gray-200 p-8 rounded" dir="rtl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                        </svg>
                        <p class="leading-relaxed mb-6 text-right">قد كان هدف "CVS" الاول و الأخير هو ان يكون ذاك الوميض من النور الذي سيهدي الشباب الي البداية ليدفعهم إلي إكمال باقي الطريق، فما كان لشباب اليوم ان يصلوا لكل هذه الإنجازات والنجاحات لولا وسائل الإرشاد التي تدلهم علي الطريق والتي حرصت “CVS” علي ان تكون واحدة منهم.</p>
                        <div>
                            <a href="https://elwekalanews.net/" class="inline-flex text-right items-center">
                                <img alt="testimonial" src="{{asset('img/testimonials/el-wekala-news.png')}}" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                                <span class="flex-grow flex flex-col pr-4">
                              <span class="title-font font-medium text-gray-900">الوكالة نيوز</span>
                              <span class="text-gray-500 text-sm">صحيفة مصرية</span>
                            </span>
                            </a>
                        </div>
                    </div>
                </div>
{{--                <div class="p-4 md:w-1/2 w-full">--}}
{{--                    <div class="h-full bg-gray-200 p-8 rounded">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">--}}
{{--                            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>--}}
{{--                        </svg>--}}
{{--                        <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>--}}
{{--                        <a class="inline-flex items-center">--}}
{{--                            <img alt="testimonial" src="https://dummyimage.com/107x107" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">--}}
{{--                            <span class="flex-grow flex flex-col pl-4">--}}
{{--                              <span class="title-font font-medium text-gray-900">Alper Kamu</span>--}}
{{--                              <span class="text-gray-500 text-sm">DESIGNER</span>--}}
{{--                            </span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Our Highboard</h1>
{{--                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Our high board consists of ambitious and creative people who makes all of this possible</p>--}}
            </div>
            <div class="flex flex-wrap -m-2">
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="100">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/Board of Directors/Motasem Mahran - Founder.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Motasem Mahran</h2>
                            <p class="text-gray-500">Chairman</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="300">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/Board of Directors/Hazem Mohamed - Vice Chairwoman.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Hazem Mohamed</h2>
                            <p class="text-gray-500">Vice Chairman</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="400">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/Board of Directors/Saga Ayman - CEO.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Saga Ayman</h2>
                            <p class="text-gray-500">CEO</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="500">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/Board of Directors/Rawda Khaled - CQO.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Rawda Khaled</h2>
                            <p class="text-gray-500">CQO</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="600">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/PR/Maha Sharif - CCO.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Maha Sheriff</h2>
                            <p class="text-gray-500">CCO</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="700">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/HR/Hadeer Abd Elkhalek - Haed HR.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Hadeer Abd Elkhalek</h2>
                            <p class="text-gray-500">Head HR</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="800">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/HR/Hana Amr - Vice Head HR.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Hana Amr</h2>
                            <p class="text-gray-500">Vice Head HR</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="900">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/FR/Naira Mahmoud - Head FR.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Naira Mahmoud</h2>
                            <p class="text-gray-500">Head FR</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="1000">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/PR/Ehab Khater - Head PR.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Ehab Khater</h2>
                            <p class="text-gray-500">Head PR</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="1200">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/OC/Omar elgendy - Head OC.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Omar Elgendy</h2>
                            <p class="text-gray-500">Head OC</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="1300">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/OC/Eiad Waleed Adnan - Vice Head OC.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Eiad Waleed</h2>
                            <p class="text-gray-500">Vice Head OC</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="1400">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/OC/Shahd Atef - Vice Head OC.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Shahd Atef</h2>
                            <p class="text-gray-500">Vice Head OC</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="1500">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/Media/Abdullah El Afifi - Chief Multimedia.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Abdullah El Afifi</h2>
                            <p class="text-gray-500">Chief Multimedia</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="1600">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/Media/Marwan Mostafa - Head Graphic Design.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Marwan Mostafa</h2>
                            <p class="text-gray-500">Head Graphic Design</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="1700">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/Media/Seif Eldein Walid - Vice Head Graphic Design.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Seif Eldeen Waleed</h2>
                            <p class="text-gray-500">Vice Head Graphic Design</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="1800">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/Media/Ibrahim Ezzat - Head Vedio Editing.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Ibrahim Ezzat</h2>
                            <p class="text-gray-500">Head Video Editing</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="1900">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/Marketing/Nourseen Mosad - Head Markting.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Nourseen Mosaad</h2>
                            <p class="text-gray-500">Head Marketing</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="2000">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/Technical Support/Omar Yehia Tawfeek - Head Technical Support.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Omar Yehia Tawfeek</h2>
                            <p class="text-gray-500">Head Technical</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="2100">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/Content writing/Menna Ramadan - Head Content Writing.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Menna Ramadan</h2>
                            <p class="text-gray-500">Head Content Writing</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="2200">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/Content writing/Reem Mohamed - Vice Content Writing.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Reem Mohamed</h2>
                            <p class="text-gray-500">Vice Head Content Writing</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="2300">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/Content writing/ahmed khaled - Vice Content Writing.JPG')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Ahmed Khaled</h2>
                            <p class="text-gray-500">Vice Head Content Writing</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="2400">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/Athletics/Ziad Mahmoud - Head Athletics.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Ziad Mahmoud</h2>
                            <p class="text-gray-500">Head Athletics</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full" data-aos="fade-in" data-aos-delay="2500">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4 border" src="{{asset('img/highboard/Athletics/Nour Zakaria - Vice Head Athletics.jpg')}}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Nour Zakaria</h2>
                            <p class="text-gray-500">Vice Head Athletics</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-700 body-font relative" id="contact">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
{{--                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify.</p>--}}
            </div>
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                @if(session()->has('messageSent'))
                    <div class="mb-8 bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md" role="alert">
                        <div class="flex">
                            <div class="py-1"><svg class="fill-current h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                            <div>
                                <p class="font-bold">Message Sent Successfully</p>
                                <p class="text-sm">We will contact you using the provided email</p>
                            </div>
                        </div>
                    </div>
                @endif
                <form class="flex flex-wrap -m-2" method="POST" action="{{route('message.send')}}" data-aos="fade-up">
                    @csrf
                    <div class="p-2 w-1/2">
                        <input name="name" value="{{old('name')}}" required class="@error('name') border-red-500 @enderror focus:shadow-outline-orange transition duration-100 w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-orange-500 text-base px-4 py-2" placeholder="Name" type="text">
                        @error('name')
                        <p class="text-sm text-red-500 font-semibold mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="p-2 w-1/2">
                        <input name="email" value="{{old('email')}}" required class="@error('email') border-red-500 @enderror focus:shadow-outline-orange transition duration-100 w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-orange-500 text-base px-4 py-2" placeholder="Email" type="email">
                        @error('email')
                        <p class="text-sm text-red-500 font-semibold mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="p-2 w-full">
                        <textarea name="message" required class="@error('message') border-red-500 @enderror focus:shadow-outline-orange transition duration-100 w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-orange-500 text-base px-4 py-2 resize-none block" placeholder="Message">{{old('messagez')}}</textarea>
                        @error('message')
                        <p class="text-sm text-red-500 font-semibold mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="p-2 w-full">
                        <button type="submit" class="focus:shadow-outline-orange transition duration-100 flex mx-auto text-white bg-orange-500 border-0 py-2 px-8 focus:outline-none hover:bg-orange-600 rounded text-lg">Submit</button>
                    </div>
                    <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                        <a href="mailto:cvshrs120@gmail.com" class="text-orange-500">cvshrs120@gmail.com</a>
                        <br>
                        <a href="tel:01557365784" class="text-orange-500 mt-2">01557365784</a>
                        <p class="leading-normal my-5">Egypt, Cairo
                        </p>
                        <span class="inline-flex">
                            <a class="text-gray-500">
                              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                              </svg>
                            </a>
                            <a class="ml-4 text-gray-500">
                              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                              </svg>
                            </a>
                            <a class="ml-4 text-gray-500">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                              </svg>
                            </a>
                            <a class="ml-4 text-gray-500">
                              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                              </svg>
                            </a>
                          </span>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
