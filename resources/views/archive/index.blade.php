<x-guest-layout>
    <section class="mt-20 lg:mt-[60px] pb-10">
        <h1 class="heading-tertiory text-center mb-10 md:mb-16">
           {{ $title }}
        </h1>

        <!-- ::::::::::::card:::::::::::: -->
        <div class="max-w-[400px] sm:max-w-[700px] lg:max-w-7xl w-full sm:px-6 lg:px-8 mx-auto grid sm:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-10">
            @foreach ($data as $course)
                
            <div class="bg-white rounded overflow-hidden shadow-card">
                <a href="{{ url( $course->type == 0 ? 'courses/'. $course->slug : 'books/'. $course->slug ) }}">
                    <img src="{{ $course->img->url }}" alt="{{ $course->title }}" class="w-full h-auto object-contain">
                </a>
                <div class="px-6 pb-5">
                    <div class="mt-7 flex justify-between items-center gap-4 mb-4">
                        <a href="{{ url( $course->type == 0 ? 'courses/'. $course->slug : 'books/'. $course->slug ) }}"
                            class="text-lg-primary w-full hover:underline">{{ $course->title }}</a>
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
                                <p
                                    class="text-sm-primary bg-parrot-100 py-1.5 px-1.5 rounded-[3px] flex items-center gap-1.5 w-max">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none">
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
                                <p
                                    class="text-sm-primary bg-accent-100 py-1.5 px-1.5 rounded-[3px] flex items-center gap-1.5 w-max">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" fill="none">
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

        <div class="max-w-7xl px-4 sm:px-6 lg:px-8 mt-10 mx-auto">
            {{ $data->links() }}
        </div>
    </section>
</x-guest-layout>