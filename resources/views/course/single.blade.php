<x-guest-layout>

    <section class="py-4 sm:py-6">
        <div class="max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto">
            <nav class="flex mt-4">
                <ol role="list" class="flex items-center space-x-0.5">
                    <li>
                        <div class="-m-1">
                            <a href="{{ route("home") }}" class="p-1 ml-0.5 text-base font-medium text-gray-400 rounded-md focus:outline-none focus:ring-2 focus:text-gray-900 focus:ring-gray-900 hover:text-gray-700">
                                Home
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="flex items-center">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"></path>
                            </svg>
                            <div class="-m-1">
                                <a href="{{ url( $course->type == 0 ? 'courses' : 'books' ) }}" class="p-1 ml-0.5 text-base font-medium text-gray-400 rounded-md focus:outline-none focus:ring-2 focus:text-gray-900 focus:ring-gray-900 hover:text-gray-700">
                                   {{  $course->type == 0 ? 'Courses' : 'Books' }}
                                </a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="flex items-center">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"></path>
                            </svg>
                            <div class="-m-1" href="#">
                                <a href="{{ url( 'series',$course->series->name ) }}" class="p-1 ml-0.5 text-base font-medium text-gray-400 rounded-md focus:outline-none focus:ring-2 focus:text-gray-900 focus:ring-gray-900 hover:text-gray-700">
                                    {{ $course->series->name }}
                                </a>
                            </div>
                        </div>
                    </li>
                </ol>
            </nav>

            <div class="grid grid-cols-1 mt-12 lg:grid-cols-5 xl:grid-cols-6 lg:mt-4">
                <div class="mt-2 pb-8 border-b border-gray-100 lg:col-span-3 xl:col-span-4 lg:border-r lg:pr-10 lg:pb-0 lg:border-b-0">
                    <div class="flex">
                        <h1 class="text-3xl font-bold text-gray-900">
                            {{ $course->title }}
                        </h1>
                    </div>

                    <div class="flex items-center gap-3 mt-5">
                        <div class="flex items-center space-x-px">
                            @php
                            $star = count($course->review);
                            $total = 0;
                            $avarege = 0;
                            foreach ($course->review as $review ) {
                            $total += $review->star;
                            }
                            if ($total > 0) {
                            $expected = $star * 5;
                            $avarege = $total * 5 / $expected;
                            }
                            @endphp

                            <x-5-star star="{{ round($avarege) }}" />

                        </div>
                        <a href="#reviews" class="text-sm text-gray-500">
                            @if ( $star == 1 )
                            {{ $star }} Review
                            @elseif ( $star > 1 )
                            {{ $star }} Reviews
                            @else
                            0 Review
                            @endif
                        </a>
                    </div>

                    <ul class="flex flex-wrap items-center gap-4 mt-5 text-gray-700">
                        @if ( $course->type == 0 )
                        <li class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0118 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0118 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 016 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5">
                                </path>
                            </svg>
                            <span>
                                @if ( $course->video == 1 )
                                {{ $course->video }} Video
                                @elseif ( $course->video > 1 )
                                {{ $course->video }} Videos
                                @else
                                0 Video
                                @endif
                            </span>
                        </li>
                        @endif
                        <li class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25">
                                </path>
                            </svg>
                            <span>
                                @if ( $course->book == 1 )
                                {{ $course->book }} Book
                                @elseif ( $course->book > 1 )
                                {{ $course->book }} Books
                                @else
                                0 Book
                                @endif
                            </span>
                        </li>
                        @if ( $course->type == 0 )
                        <li class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>
                                @if ( $course->duration == 0 )
                                1-5 hours
                                @elseif( $course->duration == 1 )
                                5-10 hours
                                @else
                                10+ hours
                                @endif
                            </span>
                        </li>
                        @endif
                        <li class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z">
                                </path>
                            </svg>
                            <span>
                                @if ( $course->level == 0 )
                                Beginner
                                @elseif( $course->level == 1 )
                                Intermediate
                                @else
                                Advanced
                                @endif
                            </span>
                        </li>
                        @if ( $course->type == 0 )
                        <li class="flex items-center gap-2" title="Last Updated">
                            <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z">
                                </path>
                            </svg>
                            <time>{{ $course->year }}</time>
                        </li>
                        @endif
                        <li class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>


                            <span>${{ sprintf("%.2f",$course->price ) }}</span>
                        </li>
                    </ul>

                    <div class="rounded-sm mt-8 shadow-sm bg-white">
                        <img class="w-full" style="height: 250px;" src="{{ $course->img->url }}" alt="{{ $course->title }}">

                        <div x-data="{ expanded : false }" class="p-6">
                            <div class="text-base space-y-6 font-normal text-gray-700 line-clamp-20" :class="!expanded &amp;&amp; 'line-clamp-20'">
                                {{ $course->description }}
                            </div>
                        </div>
                    </div>
                    @if (count($course->episod) > 0)
              
                    <h2 class="mt-4 pt-4 mb-4 text-lg font-bold text-gray-900">
                        Episodes
                    </h2>
                   
                    <div class="px-6 py-4 bg-white shadow-md rounded-sm">
                        <ul id="episode-list" class="mt-4 space-y-4 max-h-[600px] overflow-hidden">
                            @foreach ($course->episod as $episod)
                                <li class="bg-white border border-gray-200 divide-y divide-gray-200 rounded">
                                    <div class="px-5 py-4">
                                        <div class="flex items-start justify-between">
                                            <div class="flex items-center">
                                                @if ($course->price == 0)
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5V6.75a4.5 4.5 0 119 0v3.75M3.75 21.75h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H3.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"></path>
                                                    </svg>
                                                @else
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"></path>
                                                    </svg>
                                                @endif
                                                <div class="ml-3">
                                                    <p class="text-sm font-semibold text-gray-900">
                                                        {{  $episod->name }}
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="text-sm font-semibold text-gray-900">
                                                <a target="_blank" href="{{  $episod->url }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 inline-block ml-1">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"></path>
                                                    </svg>
                                                </a> 
                                            </p>
                                        </div>
                                    </div>                              
                                </li>
                            @endforeach
                        </ul>
                    </div>
      
                    @endif

                    <h2 id="reviews" class="mt-4 pt-4 text-lg font-bold text-gray-900">Reviews</h2>
                    @if ( count($course->review) > 0 )

                        <ul class="space-y-6 mt-4">
                            @foreach ($course->review as $review)
                                <li class="bg-white rounded-sm shadow">
                                    <div class="px-6 py-5">
                                        <div class="sm:flex sm:items-center sm:justify-between">
                                            <div class="flex items-center">
                                                <div class="flex items-center space-x-px">
                                                    <div class="flex items-center space-x-px">
                                                        <x-5-star star="{{ $review->star }}" />
                                                    </div>
                                                </div>
                                            </div>

                                            <p class="text-sm mt-2.5 sm:mt-0 font-normal text-gray-400">
                                                {{ $review->created_at }}
                                            </p>
                                        </div>
                                       
                                        <blockquote class="mt-4 sm:mt-6">
                                            <p class="text-base font-normal leading-7 text-gray-600">
                                                {{ $review->review }}
                                            </p>
                                        </blockquote>

                                        <div class="flex items-center mt-5 sm:mt-8">
                                            <span class="ml-2.5 text-sm font-medium text-gray-900"> 
                                                {{ $review->user->name }}
                                             </span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="mt-2 bg-white rounded-sm shadow p-6">No review yet.</p>
                    @endif
                </div>

                <div class="pt-8 lg:col-span-2 lg:pl-10 lg:pt-0">
                    <div class="mt-2 mb-4 space-y-3">
                        <a href="" target="_blank" class="flex items-center justify-center w-full px-4 py-3 text-base font-bold text-center text-white transition-all duration-200 bg-red-500 border-2 border-transparent rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 hover:bg-white hover:text-black hover:border-b-2 hover:border-red-500">
                            Get the Course &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25">
                                </path>
                            </svg>
                        </a>
                    </div>

                    <div class="mt-2 mb-7 space-y-3">
                        <a href="" @click.prevent="showLoginModal = true" class="flex items-center justify-center w-full px-4 py-3 text-base font-bold text-center text-white transition-all duration-200 hover:bg-white hover:text-black hover:border-b-2 hover:border-black bg-gray-900 border-2 border-transparent rounded focus:outline-none">
                            Write a Review &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10">
                                </path>
                            </svg>
                        </a>
                    </div>

                    <div class="overflow-hidden bg-white border border-gray-200 rounded-sm shadow-sm">
                        <div class="space-y-4 p-6">
                            <h3 class="text-sm font-bold tracking-widest text-gray-900 uppercase">
                                @if (count($course->author) > 1)
                                    Authors
                                @else
                                    Author
                                @endif
                               
                            </h3>
                            <hr class="mt-5 mb-5 border-gray-200">
                            @foreach ($course->author as $author)
                                <div class="space-y-4 pb-2">
                                    <div class="aspect-w-3 aspect-h-2">
                                        <img class="object-cover w-48 m-auto shadow" src="{{ $author->img->url }}" alt="Brent Roose Profile Picture">
                                    </div>
                                    <div class="space-y-1 text-lg font-medium leading-6 text-center">
                                        <h4 class="font-semibold">{{ $author->name }}</h4>
                                    </div>

                                    <ul role="list" class="flex space-x-5 justify-center">
                                        @if (!$author->twitter_url == null)
                                            <li>
                                                <a href="{{ $author->twitter_url }}" class="text-gray-400 hover:text-gray-500" target="_blank">
                                                    <span class="sr-only">Twitter</span>
                                                    <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            
                                            </li>
                                        @endif

                                        @if (!$author->github_url == null)
                                        <li>
                                            <a href="{{ $author->github_url }}" class="text-gray-400 hover:text-gray-500" target="_blank">
                                                <span class="sr-only">GitHub</span>
                                                <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        @endif
                                        @if (!$author->website_url == null)
                                        <li>
                                            <a href="{{ $author->website_url }}" class="text-gray-400 hover:text-gray-500" target="_blank">
                                                <span class="sr-only">Website</span>
                                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        @endif
                                    </ul>

                                    <div class="text-sm px-7">
                                        <p class="text-gray-500">
                                            {{ $author->bio }}
                                        </p>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white border border-gray-200 rounded-sm mt-6 shadow-sm">
                        <div class="px-4 py-5 sm:p-6">
                            <h3 class="text-sm font-bold tracking-widest text-gray-900 uppercase">Topics
                            </h3>
                            <hr class="mt-5 border-gray-200">

                            <div class="mt-8 flex flex-wrap gap-2.5">

                                @foreach ( $course->topic as $topic)
                                    <a href="{{ route('multiple',['topics',$topic->slug]) }}" class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-1.5 hover:bg-gray-100">
                                        <div class="absolute flex flex-shrink-0 items-center justify-center">
                                            <span class="h-1.5 w-1.5 rounded-full bg-rose-500" aria-hidden="true"></span>
                                        </div>
                                        <div class="ml-3.5 text-sm font-medium text-gray-900">{{ $topic->name }}</div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div x-show="showLoginModal" class="relative z-10" style="display: none" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0" @click="showLoginModal = false">
                    <div x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                        <div>
                            <div class="mt-1">
                                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full">
                                    <!-- Heroicon name: outline/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33">
                                        </path>
                                    </svg>
                                </div>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">To write a review, you must have a
                                        registered account on the site.</p>
                                    <p class="text-sm text-gray-500 mt-3 leading-20">If you already have an
                                        account, please <b>Sign In</b>.</p>
                                    <p class="text-sm text-gray-500 mt-3 leading-20">If you do not have one,
                                        please <b>Sign Up</b>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 sm:mt-6 sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3">
                            <a href="https://laravel-courses.com/register" class="inline-flex w-full justify-center rounded-md border border-transparent bg-red-500 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-black focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:col-start-2 sm:text-sm">Sign
                                Up</a>
                            <a href="https://laravel-courses.com/login" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-black hover:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:col-start-1 sm:mt-0 sm:text-sm">Sign
                                In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>