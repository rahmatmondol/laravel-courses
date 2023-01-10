<x-guest-layout>
    <div wire:id="8utNThjePkwYZhxGnLjr" x-data="{ showOffCanvasFilter: false }">
        <div x-show="showOffCanvasFilter" class="relative z-40" role="dialog" aria-modal="true"
            style="display: none">
            <div class="fixed inset-0 bg-black bg-opacity-25"></div>

            <div class="fixed inset-0 z-40 flex">
                <div
                    class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl">

                    <!-- Filters -->
                    <div class="border-t border-gray-200 px-4 py-6">
                        <div wire:id="OJPt8N2Xh8GrsWyEsTmq" x-data="{ open: true }"
                            class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button @click="open = ! open" type="button"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium text-gray-900 font-bold">Search</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="open">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="! open" style="display: none;">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>

                            <!-- Filter section, show/hide based on section state. -->
                            <div x-show="open" class="pt-6">
                                <div class="space-y-2">
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <svg class="h-5 w-5 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input wire:model.debounce.500ms="keyword" type="text"
                                            class="block w-full rounded-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="Enter keywords">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Livewire Component wire-end:OJPt8N2Xh8GrsWyEsTmq -->
                        <div wire:id="47VmHdFOSUu8g3mFCHnQ" x-data="{ open: true }"
                            class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button @click="open = ! open" type="button"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium text-gray-900 font-bold">Level</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="open">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="! open" style="display: none;">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>

                            <!-- Filter section, show/hide based on section state. -->
                            <div x-show="open" class="pt-6">
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input wire:model="selected" id="filter-level-beginner"
                                            value="beginner" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-level-beginner"
                                            class="ml-3 text-sm text-gray-600">
                                            Beginner
                                            <span class="text-xs text-gray-500">(10)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input wire:model="selected" id="filter-level-intermediate"
                                            value="intermediate" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-level-intermediate"
                                            class="ml-3 text-sm text-gray-600">
                                            Intermediate
                                            <span class="text-xs text-gray-500">(12)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input wire:model="selected" id="filter-level-advanced"
                                            value="advanced" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-level-advanced"
                                            class="ml-3 text-sm text-gray-600">
                                            Advanced
                                            <span class="text-xs text-gray-500">(2)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Livewire Component wire-end:47VmHdFOSUu8g3mFCHnQ -->
                        <div wire:id="zUm7R3Ef3lzJNXL7FRLF" x-data="{ open: true }"
                            class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button @click="open = ! open" type="button"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium text-gray-900 font-bold">Price</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="open">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="! open" style="display: none;">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>

                            <!-- Filter section, show/hide based on section state. -->
                            <div x-show="open" class="pt-6">
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input wire:model="selected" id="filter-price-free" value="free"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-price-free" class="ml-3 text-sm text-gray-600">
                                            Free
                                            <span class="text-xs text-gray-500">(5)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input wire:model="selected" id="filter-price-onetime"
                                            value="onetime" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-price-onetime"
                                            class="ml-3 text-sm text-gray-600">
                                            Paid (One-time)
                                            <span class="text-xs text-gray-500">(10)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input wire:model="selected" id="filter-price-membership"
                                            value="membership" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-price-membership"
                                            class="ml-3 text-sm text-gray-600">
                                            Paid (Membership)
                                            <span class="text-xs text-gray-500">(9)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Livewire Component wire-end:zUm7R3Ef3lzJNXL7FRLF -->
                        <div wire:id="WsgrVGyyTFfX8prLVW0a" x-data="{ open: true }"
                            class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button @click="open = ! open" type="button"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium text-gray-900 font-bold">Duration</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="open">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="! open" style="display: none;">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>

                            <!-- Filter section, show/hide based on section state. -->
                            <div x-show="open" class="pt-6">
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input wire:model="selected" id="filter-duration-1h-5h"
                                            value="1h-5h" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-duration-1h-5h"
                                            class="ml-3 text-sm text-gray-600">
                                            1-5 hours
                                            <span class="text-xs text-gray-500">(17)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input wire:model="selected" id="filter-duration-5h-10h"
                                            value="5h-10h" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-duration-5h-10h"
                                            class="ml-3 text-sm text-gray-600">
                                            5-10 hours
                                            <span class="text-xs text-gray-500">(6)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input wire:model="selected" id="filter-duration-10h+" value="10h+"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-duration-10h+"
                                            class="ml-3 text-sm text-gray-600">
                                            10+ hours
                                            <span class="text-xs text-gray-500">(0)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Livewire Component wire-end:WsgrVGyyTFfX8prLVW0a -->
                        <div wire:id="Lb84PCPJO5w1SSh8tKA2" x-data="{ open: true }"
                            class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button @click="open = ! open" type="button"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium text-gray-900 font-bold">Platform</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="open">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="! open" style="display: none;">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>

                            <!-- Filter section, show/hide based on section state. -->
                            <div x-show="open" class="pt-6">
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input wire:model="selected" id="filter-platform-1" value="1"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-platform-1" class="ml-3 text-sm text-gray-600">
                                            Laracasts
                                            <span class="text-xs text-gray-500">(4)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input wire:model="selected" id="filter-platform-2" value="2"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-platform-2" class="ml-3 text-sm text-gray-600">
                                            Laravel Daily
                                            <span class="text-xs text-gray-500">(3)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input wire:model="selected" id="filter-platform-3" value="3"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-platform-3" class="ml-3 text-sm text-gray-600">
                                            Codecourse
                                            <span class="text-xs text-gray-500">(4)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input wire:model="selected" id="filter-platform-4" value="4"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-platform-4" class="ml-3 text-sm text-gray-600">
                                            Spatie
                                            <span class="text-xs text-gray-500">(5)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Livewire Component wire-end:Lb84PCPJO5w1SSh8tKA2 -->
                        <div wire:id="YBWyKINcznbXJNCPvuWs" x-data="{ open: true }"
                            class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button @click="open = ! open" type="button"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium text-gray-900 font-bold">Series</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="open">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="! open" style="display: none;">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>

                            <!-- Filter section, show/hide based on section state. -->
                            <div x-show="open" class="pt-6">
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input wire:model="selected" id="filter-series-1" value="1"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-series-1" class="ml-3 text-sm text-gray-600">
                                            Laravel
                                            <span class="text-xs text-gray-500">(19)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input wire:model="selected" id="filter-series-2" value="2"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-series-2" class="ml-3 text-sm text-gray-600">
                                            PHP
                                            <span class="text-xs text-gray-500">(1)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input wire:model="selected" id="filter-series-3" value="3"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-series-3" class="ml-3 text-sm text-gray-600">
                                            Livewire
                                            <span class="text-xs text-gray-500">(1)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input wire:model="selected" id="filter-series-4" value="4"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-series-4" class="ml-3 text-sm text-gray-600">
                                            Vue.js
                                            <span class="text-xs text-gray-500">(1)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input wire:model="selected" id="filter-series-5" value="5"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-series-5" class="ml-3 text-sm text-gray-600">
                                            Alpine.js
                                            <span class="text-xs text-gray-500">(1)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input wire:model="selected" id="filter-series-6" value="6"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-series-6" class="ml-3 text-sm text-gray-600">
                                            Tailwind CSS
                                            <span class="text-xs text-gray-500">(1)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Livewire Component wire-end:YBWyKINcznbXJNCPvuWs -->
                    </div>
                </div>
            </div>
        </div>

        <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-baseline justify-between pt-10">
                <h1 class="text-lg font-bold tracking-tight text-gray-900">All Courses</h1>
                <pre>
                    {{-- {{ print_r($_GET) }} --}}       
                </pre>
            </div>

            <section aria-labelledby="courses-heading" class="pt-6 pb-12">
                <h2 id="courses-heading" class="sr-only">Courses</h2>

                <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                    <!-- Search -->
                    @php
                        function selected($key,$value){
                            if (isset($_GET[$key])) {
                                if (in_array($value, $_GET[$key])){
                                    return true;
                                }else {
                                    return false;
                                }
                            }else {
                                return false;
                            }
                        }
                    @endphp
                    <form id="filters" class="hidden lg:block bg-white p-4 px-6 shadow rounded-sm" method="get">
                        <h3 class="sr-only">Filters</h3>
                        <div wire:id="9Z7DCXSsLKO3qHQs60lA" x-data="{ open: true }"
                            class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Search -->
                                <button type="button"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium text-gray-900 font-bold">Search</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="open">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="! open" style="display: none;">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>

                            <!-- Filter section, show/hide based on section state. -->
                            <div x-show="open" class="pt-6">
                                <div class="space-y-2">
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <svg class="h-5 w-5 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input wire:model.debounce.500ms="keyword" type="text"
                                            class="block w-full rounded-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="Enter keywords">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Level -->
                        <div wire:id="xUgr20C9FRlyTbpExBH3" x-data="{ open: true }"
                            class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                           
                                <button type="button"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium text-gray-900 font-bold">Level</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="open">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="! open" style="display: none;">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>
                            <div  class="pt-6">
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input id="filter-level-beginner" onchange="formSubmit()"
                                            value="beginner" type="checkbox"
                                            name="level[]"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" @checked(selected('level', 'beginner'))>
                                        <label for="filter-level-beginner"
                                            class="ml-3 text-sm text-gray-600">
                                            Beginner
                                            <span class="text-xs text-gray-500">({{ $filters['levelBeginner'] }})</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input onchange="formSubmit()" id="filter-level-intermediate"
                                            name="level[]"
                                            value="intermediate" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"  @checked(selected('level', 'intermediate'))>
                                        <label for="filter-level-intermediate"
                                            class="ml-3 text-sm text-gray-600">
                                            Intermediate 
                                            <span class="text-xs text-gray-500">({{ $filters['levelIntermediate'] }})</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input onchange="formSubmit()" id="filter-level-advanced"
                                            @checked(selected('level', 'advanced'))
                                            name="level[]"
                                            value="advanced" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-level-advanced"
                                            class="ml-3 text-sm text-gray-600">
                                            Advanced
                                            <span class="text-xs text-gray-500">({{ $filters['levelAdvancedr'] }})</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Duration -->
                        <div wire:id="0OgcYRXGgS5ksExRae1r" x-data="{ open: true }"
                            class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button @click="open = ! open" type="button"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium text-gray-900 font-bold">Duration</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="open">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="! open" style="display: none;">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>

                            <!-- Filter section, show/hide based on section state. -->
                            <div x-show="open" class="pt-6">
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input  onchange="formSubmit()" name="duration[]" id="filter-duration-1h-5h"
                                            @checked(selected('duration', '1h-5h'))
                                            value="1h-5h" type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-duration-1h-5h"
                                            class="ml-3 text-sm text-gray-600">
                                            1-5 hours
                                            <span class="text-xs text-gray-500">({{ $filters['duration15'] }})</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input onchange="formSubmit()" name="duration[]" id="filter-duration-5h-10h"
                                            value="5h-10h" type="checkbox"
                                            @checked(selected('duration', '5h-10h'))
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-duration-5h-10h"
                                            class="ml-3 text-sm text-gray-600">
                                            5-10 hours
                                            <span class="text-xs text-gray-500">({{ $filters['duration510'] }})</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input onchange="formSubmit()" name="duration[]" id="filter-duration-10h+" value="10h+"
                                        @checked(selected('duration', '10h+'))
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-duration-10h+"
                                            class="ml-3 text-sm text-gray-600">
                                            10+ hours
                                            <span class="text-xs text-gray-500">({{ $filters['duration10'] }})</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Platform -->
                        <div wire:id="GfDAHqFchWzZGDy2Epny" x-data="{ open: true }"
                            class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button @click="open = ! open" type="button"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium text-gray-900 font-bold">Platform</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="open">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="! open" style="display: none;">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>

                            <!-- Filter section, show/hide based on section state. -->
                            <div x-show="open" class="pt-6">
                                <div class="space-y-2">
                                    @foreach ($filters['platforms'] as $platform)
                                        <div class="flex items-center">
                                            <input onchange="formSubmit()" name="platform[]" value="{{ $platform->slug }}"
                                                @checked(selected('platform', $platform->slug))
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-platform-1" class="ml-3 text-sm text-gray-600">
                                                {{ $platform->name }}
                                                <span class="text-xs text-gray-500">({{ count($platform->course) }})</span>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Series -->
                        <div wire:id="jhsgWPu1u3OC0zJzr3l7" x-data="{ open: true }"
                            class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button @click="open = ! open" type="button"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium text-gray-900 font-bold">Series</span>
                                    <span class="ml-6 flex items-center">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="open">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                            x-show="! open" style="display: none;">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>

                            <!-- Filter section, show/hide based on section state. -->
                            <div x-show="open" class="pt-6">
                                <div class="space-y-2">
                                    @foreach ($filters['series'] as $series)
                                        <div class="flex items-center">
                                            <input onchange="formSubmit()" name="series[]"  id="filter-series-1" value="{{ $series->slug }}"
                                                @checked(selected('series',  $series->slug))
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-series-1" class="ml-3 text-sm text-gray-600">
                                                {{ $series->name }}
                                                <span class="text-xs text-gray-500">( {{ count($series->course) }})</span>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </form>

                    <script>
                        function formSubmit(){
                            // var pass = document.getElementsById('filters');
                            document.getElementById("filters").submit(); 
                            // console.log(pass);
                        }
                    </script>

                    <div class="lg:col-span-3">
                        <ul role="list" class="space-y-6">
                            @foreach ($data as $course)
                                <li class="bg-white px-4 py-6 shadow rounded-sm">
                                    <div class="flex justify-center">
                                        <div class="min-w-fit mx-auto">
                                            <img class="inline-block w-10 rounded-full"
                                                src="{{ $course->series->img->url }}"
                                                alt="{{ $course->series->name }}">
                                        </div>
                                        <div class="w-10/12">
                                            <div class="flex">
                                                <div class="flex-1 overflow-hidden flex-wrap">
                                                    <h2 class="text-xl font-bold text-gray-900 mb-1">
                                                        <a href="{{ url( $course->type == 0 ? 'courses/'. $course->slug : 'books/'. $course->slug ) }}"
                                                            class="text-blue-500 hover:underline">
                                                            {{ $course->title }}
                                                        </a>
                                                    </h2>
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
                                                        <span class="text-sm text-gray-500">
                                                            @if ( $star > 1 )
                                                                {{$star }} Reviews
                                                            @else
                                                                {{$star }} Review
                                                            @endif
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-4 space-y-1 text-sm text-gray-700 line-clamp-5">
                                                <p>
                                                    {{ $course->sort_description }}
                                                </p>

                                            </div>

                                            <div class="mt-6">
                                                <div class="flex flex-col md:flex-row sm:justify-between">
                                                    <div
                                                        class="flex space-x-0 md:space-x-5 gap-2 flex-wrap justify-items-start">
                                                        <div
                                                            class="inline-flex items-center gap-2 text-sm text-gray-500">
                                                            <svg class="w-6 h-6 text-gray-400 shrink-0"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z">
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
                                                        </div>
                                                        @if ( $course->type == 0 )
                                                            <div
                                                                class="inline-flex items-center gap-2 text-sm text-gray-500">
                                                                <svg class="w-6 h-6 text-gray-400 shrink-0"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0118 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0118 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 016 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5">
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
                                                            </div>
                                                        @endif
                                                        <div
                                                            class="inline-flex items-center gap-2 text-sm text-gray-500">
                                                            <svg class="w-6 h-6 text-gray-400 shrink-0"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25">
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
                                                        </div>
                                                        @if ( $course->type == 0 )
                                                        <div
                                                            class="inline-flex items-center gap-2 text-sm text-gray-500">
                                                            <svg class="w-6 h-6 text-gray-400 shrink-0"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                </path>
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
                                                        </div>
                                                        @endif
                                                        @if ( $course->type == 0 )
                                                        <div class="inline-flex items-center gap-2 text-sm text-gray-500"
                                                            title="Last Updated">
                                                            <svg class="w-6 h-6 text-gray-400 shrink-0"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor">
                                                                <path stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z">
                                                                </path>
                                                            </svg>
                                                            <time>
                                                                {{ $course->year }}
                                                            </time>
                                                        </div>
                                                        @endif
                                                        <div
                                                            class="inline-flex items-center gap-2 text-sm text-gray-500">
                                                            <svg class="w-6 h-6 text-gray-400 shrink-0"
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="none" viewBox="0 0 24 24"
                                                                stroke-width="1.5" stroke="currentColor">
                                                                <path stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                </path>
                                                            </svg>
                                                            <span>${{ sprintf("%.2f",$course->price ) }}</span>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>

                                            <div class="mt-6 flex justify-between space-x-8 hidden">
                                            </div>
                                        </div>
                                        <div class="hidden md:flex md:w-1/12 overflow-hidden justify-end">
                                            @foreach ($course->author as $author)
                                                <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                                src="{{ $author->img->url }}"
                                                alt="{{ $author->name }}">
                                            @endforeach
                                          
                                           
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <div class="mt-5">
                          {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</x-guest-layout>