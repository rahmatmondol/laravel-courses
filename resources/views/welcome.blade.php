<x-guest-layout>
    @slot('header')
        <div class="sm:mt-20">
            <form action="/courses" method="GET">
                <div
                    class="w-full relative max-w-[740px] lg:max-w-[860px] mx-auto px-5 pb-10 lg:pb-[138px] pt-20 lg:pt-24">
                    <div
                        class="w-full max-w-[400px] sm:max-w-full mx-auto flex flex-col items-center justify-center">
                        <h1 class="lg:max-w-[750px] text-center w-full mx-auto heading-primary mb-3">
                            The best Courses and Books on the <span class="text-orange-100">Laravel</span>
                            ecosystem
                        </h1>
    
                        <p class="text-lg-secondary w-full text-center my-4 mb-10">
                            Find the right books and courses on the
                            Laravel framework and related topics to suite your level of expertise.
                            Know how good a course is through your peers
                            review and share your own too.
                        </p>
    
                        <!-- ::::::::::::search for header:::::::::::: -->
                        <div
                            class="grid grid-cols-1 md:grid-cols-[1fr,200px] lg:flex items-center flex-col sm:flex-row gap-5 max-w-[400px] sm:max-w-[700px] md:mb-0 w-full">
                            <input type="search" name="keyword" placeholder="Enter keywords to search courses"
                                class="md:max-w-[482px] lg:max-w-[582px] w-full bg-white h-12 border border-orange-100 rounded-lg px-3.5 outline-none"
                                required="">
                            <button type="submit" class="btn-primary w-full lg:w-[106px] h-12 shrink-0">
                                Search
                            </button>
                        </div>
                    </div>
    
                    <!-- ::::::::::::header angles:::::::::::: -->
                    <img src="{{ asset('assets/image') }}/left-top-angle.png" alt="angle"
                        class="absolute hidden lg:block pointer-events-none top-[150px] -left-28">
                    <img src="{{ asset('assets/image') }}/left-bottom-angle.png" alt="angle"
                        class="absolute hidden lg:block pointer-events-none top-[370px] -left-12">
                    <img src="{{ asset('assets/image') }}/right-angle.png" alt="angle"
                        class="absolute hidden lg:block pointer-events-none top-[70px] -right-6">
                    <img src="{{ asset('assets/image') }}/right-bottom-angle.png" alt="angle"
                        class="absolute hidden lg:block pointer-events-none top-[360px] -right-24">
                </div>
            </form>
    
            <img src="{{ asset('assets/image') }}/right-center-angle.png" alt="angle"
                class="w-auto h-auto object-contain absolute top-1/2 -translate-y-1/2 right-10 pointer-events-none hidden lg:block">
    
            <!-- ::::::::::::series logo:::::::::::: -->
            <div class="max-w-[440px] sm:max-w-[740px] lg:max-w-7xl w-full mx-auto mt-2 md:mt-0 px-4 sm:px-6 lg:px-8">
                <ul class="grid grid-cols-2 sm:grid-cols-3 lg:flex items-center flex-nowrap justify-center lg:justify-between md:gap-y-7 gap-3">
                    @foreach ($series as $item)
                        <li class="w-full lg:max-w-[165px]">
                            <a href="{{ url('series', $item->slug) }}" class="bg-white border mx-auto border-orange-100 box-shadow w-full rounded-lg flex items-center justify-center">
                                <img src="{{ $item->img->url }}"
                                    alt="Laravel" class="rounded-lg w-20 md:w-auto h-auto object-contain">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endslot

    <section class="mt-20 lg:mt-[140px]">
        <h1 class="heading-tertiory text-center mb-10 md:mb-16">
            Featured Courses
        </h1>

        <!-- ::::::::::::card:::::::::::: -->
        <div class="max-w-[400px] sm:max-w-[700px] lg:max-w-7xl w-full sm:px-6 lg:px-8 mx-auto grid sm:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-10">
            @foreach ($courses as $course)
                <div class="bg-white rounded overflow-hidden shadow-card">
                    <a href="{{ url( $course->type == 0 ? 'courses/'. $course->slug : 'books/'. $course->slug ) }}">
                        <img src="{{ $course->img->url }}"
                            alt="{{ $course->title }}" class="w-full h-auto object-contain">
                    </a>
                    <div class="px-6 pb-5">
                        <div class="mt-7 flex justify-between items-center gap-4 mb-4">
                            <a href="{{ url( $course->type == 0 ? 'courses/'. $course->slug : 'books/'. $course->slug ) }}" class="text-lg-primary w-full hover:underline">{{ $course->title }}</a>
                        </div>

                        <div>
                            <div class="flex items-center mb-2">
                                <div class="flex items-center mr-2">
                                    @foreach ($course->author as $author)
                                        <img src="{{ $author->img->url }}" alt="{{ $author->name }}"  class="w-7 h-7 object-contain flex shrink-0 rounded-full">
                                    @endforeach
                                </div>
                                <h4 class="text-sm-primary w-full leading-5 ml-2">
                                    @if ( count($course->author) > 1 )
                                       {{ $course->author[0]->name }} & {{ $course->author[1]->name }}
                                    @else
                                        @foreach ($course->author as $author)
                                        {{ $course->author[0]->name }}
                                        @endforeach
                                    @endif
                                </h4>
                            </div>

                            <div class="mt-3">
                                <div class="flex items-center gap-3">
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

                                        <x-5-star star="{{ round($avarege) }}"/>

                                    </div>
                                    <p class="text-sm-primary">
                                        @if ( $star > 1 )
                                           {{$star }} Reviews
                                        @else
                                            {{$star }} Review
                                        @endif
                                    </p>
                                </div>
                                <div class="flex items-center gap-3 mt-6">
                                    @if ($course->type == 0)
                                    <p
                                        class="text-sm-primary bg-parrot-100 py-1.5 px-1.5 rounded-[3px] flex items-center gap-1.5 w-max">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            fill="none">
                                            <path fill="#464646"
                                                d="M7.493 0A7.08 7.08 0 0 0 .417 7.083a7.08 7.08 0 0 0 7.076 7.084 7.088 7.088 0 0 0 7.09-7.084A7.087 7.087 0 0 0 7.493 0ZM7.5 12.75a5.665 5.665 0 0 1-5.667-5.667A5.665 5.665 0 0 1 7.5 1.417a5.665 5.665 0 0 1 5.667 5.666A5.665 5.665 0 0 1 7.5 12.75Zm-.156-9.208h-.042a.508.508 0 0 0-.51.51v3.343c0 .248.127.482.347.61l2.94 1.763a.505.505 0 0 0 .763-.358.502.502 0 0 0-.247-.513l-2.74-1.63V4.053a.508.508 0 0 0-.51-.51Z">
                                            </path>
                                        </svg>

                                        @if ( $course->duration == 0 )
                                            1-5 hours
                                        @elseif( $course->duration == 1 )
                                            5-10 hours
                                        @else
                                            10+ hours
                                        @endif
                                     
                                    </p>
                                    @endif
                                    <p
                                        class="text-sm-primary bg-accent-100 py-1.5 px-1.5 rounded-[3px] flex items-center gap-1.5 w-max">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13"
                                            fill="none">
                                            <path fill="#464646"
                                                d="M14.063 12.188h-3.75V0h3.75v12.188Zm-2.813-.938h1.875V.937H11.25V11.25Zm-1.875.938h-3.75V3.75h3.75v8.438Zm-2.813-.938h1.875V4.687H6.563v6.563Zm-1.875.938H.938V6.561h3.75v5.625Zm-2.812-.938H3.75V7.5H1.875v3.75Z">
                                            </path>
                                        </svg>
                                        @if ( $course->level == 0 )
                                            Beginner
                                        @elseif( $course->level == 1 )
                                            Intermediate
                                        @else
                                        Advanced
                                        @endif
                                      
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex justify-center mt-12 mb-12">
            <a href="">
                <button class="btn-primary max-w-[160px] w-full h-14 w-32">
                    Browse all
                </button>
            </a>
        </div>

    </section>

    @slot('subscribe')
        <div wire:id="td2YsP0OCCLkVhTYUqTP">
            <!-- ::::::::::::subscribe:::::::::::: -->
            <div class="w-full bg-update bg-no-repeat bg-cover lg:h-[400px] py-10 lg:py-0">
                <div
                    class="max-w-[440px] sm:max-w-7xl px-4 sm:px-6 lg:px-8 w-full flex flex-col lg:flex-row justify-between items-center gap-5 mx-auto h-full">
                    <div class="max-w-[579px] w-full">
                        <h2 class="heading-secondary">
                            Don’t miss any updates
                        </h2>
                        <p class="mt-3.5 text-base-primary">
                            We will be covering course reviews, comparison
                            between the best courses, and will be sharing exclusive discounts with
                            you on a monthly basis.
                        </p>

                        <div class="mt-6 md:mt-12 w-full flex flex-col sm:flex-row items-center gap-5">
                            <input wire:model="email" type="email" placeholder="Your email address"
                                class="md:max-w-[385px] w-full h-14 bg-white border border-orange-100 rounded-lg px-3.5 text-base-primary text-[#262626] placeholder:text-current outline-none"
                                required="">
                            <button wire:click="subscribe"
                                class="bg-white w-full sm:w-[135px] shrink-0 h-14 rounded-lg flex justify-center items-center border border-orange-100 text-lg-primary font-medium text-orange-100 hover:bg-orange-100 hover:text-white transition-all duration-300">
                                Subscribe
                            </button>
                        </div>


                    </div>

                    <div class="hidden md:flex justify-center">
                        <img src="{{ asset('assets/image') }}/letter.png" alt="letter" class="w-auto h-auto object-contain">
                    </div>
                </div>
            </div>
        </div>
    @endslot

</x-guest-layout>
