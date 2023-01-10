<footer class="w-full bg-dark-100 pt-[94px] relative">
    <img src="{{ asset('assets/image') }}/footer-cure.png" alt="Stylish Design"
        class="w-auto h-auto object-contain absolute bottom-0 right-0 pointer-events-none z-10">
    <div
        class="max-w-[440px] sm:max-w-7xl w-full px-4 sm:px-6 lg:px-8 mx-auto grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-5 pb-[50px]">
        <div>
            <h2 class="text-lg-primary text-white">Course by Series</h2>
            <ul class="mt-5">
                <li class="mb-2">
                    <a href="{{ url('series','laravel') }}"
                        class="text-links text-gray-100 text-base before:text-gray-100">Laravel</a>
                </li>
                <li class="mb-2">
                    <a href="{{ url('series','php') }}"
                        class="text-links text-gray-100 text-base before:text-gray-100">PHP</a>
                </li>
                <li class="mb-2">
                    <a href="{{ url('series','livewire') }}"
                        class="text-links text-gray-100 text-base before:text-gray-100">Livewire</a>
                </li>
                <li class="mb-2">
                    <a href="{{ url('series','vuejs') }}"
                        class="text-links text-gray-100 text-base before:text-gray-100">Vue.js</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="text-lg-primary text-white">Course by Duration</h2>
            <ul class="mt-5">
                <li class="mb-2">
                    <a href="{{ url('durations','1-5-hours') }}"
                        class="text-links text-gray-100 text-base before:text-gray-100">1-5 hours</a>
                </li>
                <li class="mb-2">
                    <a href="{{ url('durations','5-10-hours') }}"
                        class="text-links text-gray-100 text-base before:text-gray-100">5-10 hours</a>
                </li>
                <li class="mb-2">
                    <a href="{{ url('durations','10-plus-hours') }}"
                        class="text-links text-gray-100 text-base before:text-gray-100">10+ hours</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="text-lg-primary text-white">Course by Level</h2>
            <ul class="mt-5">
                <li class="mb-2">
                    <a href="{{ url('levels','beginner') }}"
                        class="text-links text-gray-100 text-base before:text-gray-100">Beginner</a>
                </li>
                <li class="mb-2">
                    <a href="{{ url('levels','intermediate') }}"
                        class="text-links text-gray-100 text-base before:text-gray-100">Intermediate</a>
                </li>
                <li class="mb-2">
                    <a href="{{ url('levels','advanced') }}"
                        class="text-links text-gray-100 text-base before:text-gray-100">Advanced</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="text-lg-primary text-white">Course by Platform</h2>
            <ul class="mt-5">
                <li class="mb-2">
                    <a href="{{ url('platforms','laracasts') }}"
                        class="text-links text-gray-100 text-base before:text-gray-100">Laracasts</a>
                </li>
                <li class="mb-2">
                    <a href="{{ url('platforms','laraveldaily') }}"
                        class="text-links text-gray-100 text-base before:text-gray-100">Laravel Daily</a>
                </li>
                <li class="mb-2">
                    <a href="{{ url('platforms','codecourse') }}"
                        class="text-links text-gray-100 text-base before:text-gray-100">Codecourse</a>
                </li>
                <li class="mb-2">
                    <a href="{{ url('platforms','patie') }}"
                        class="text-links text-gray-100 text-base before:text-gray-100">Spatie</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="text-lg-primary text-white">Course by Topics </h2>
            <ul class="mt-5">
                <li class="mb-2">
                    <a href="{{ url('topics','eloquent') }}"
                        class="text-links text-gray-100 text-base before:text-gray-100">Eloquent</a>
                </li>
                <li class="mb-2">
                    <a href="{{ url('topics','validation') }}"
                        class="text-links text-gray-100 text-base before:text-gray-100">Validation</a>
                </li>
                <li class="mb-2">
                    <a href="{{ url('topics','refactoring') }}"
                        class="text-links text-gray-100 text-base before:text-gray-100">Refactoring</a>
                </li>
                <li class="mb-2">
                    <a href="{{ url('topics','testing') }}"
                        class="text-links text-gray-100 text-base before:text-gray-100">Testing</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- ::::::::::::footer bottom:::::::::::: -->
    <div
        class="max-w-[440px] md:max-w-7xl w-full px-4 sm:px-6 lg:px-8 mx-auto flex items-center justify-between gap-5 pb-8">
        <ul class="hidden md:flex items-center gap-3 z-50 relative">

            <li>
                <a href="" target="_blank">
                    <svg class="hover:filter hover:brightness-200" xmlns="http://www.w3.org/2000/svg" width="15"
                        height="12" fill="none">
                        <path fill="#898F92"
                            d="M15 1.412a6.217 6.217 0 0 1-1.764.487 3.043 3.043 0 0 0 1.348-1.68c-.595.353-1.255.6-1.95.741C12.067.353 11.27 0 10.368 0 8.683 0 7.306 1.355 7.306 3.028c0 .24.03.473.08.692A8.79 8.79 0 0 1 1.045.558a2.96 2.96 0 0 0-.415 1.517c0 1.052.538 1.984 1.37 2.513a3.08 3.08 0 0 1-1.399-.353v.021c0 1.469 1.061 2.697 2.467 2.972a3.072 3.072 0 0 1-1.384.05 3.023 3.023 0 0 0 1.09 1.505 3.1 3.1 0 0 0 1.778.598A6.171 6.171 0 0 1 .731 10.68c-.243 0-.487-.014-.731-.042A8.808 8.808 0 0 0 4.718 12c5.65 0 8.755-4.616 8.755-8.619 0-.134 0-.261-.007-.395A6.094 6.094 0 0 0 15 1.412Z">
                        </path>
                    </svg>
                </a>
            </li>
        </ul>
        <p class="text-base-primary text-sm text-[#E5E5E580] leading-5 z-50 relative">
            Developed by <a href="www.rahmatmondol.xyz" target="_blank"
                class="hover:underline font-medium">Rahmat mondol ⚡️</a>
        </p>
        <span></span>
    </div>
</footer>
