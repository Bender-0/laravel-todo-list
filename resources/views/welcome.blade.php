<x-guest-layout>
    <div class="relative sm:flex sm:justify-center sm:items-center">

        <main role="main" class="max-w-7xl mx-auto p-2 md:p-4">
            <section class="text-center">
                @php
                    $technologies = [
                        'Laravel',
                        'Livewire',
                        'Tailwind',
                        'Jetstream',
                        'Sanctum',
                        'Rest API',
                    ];
                @endphp

                <h2 class="py-2 md:py-4 text-gray-600 dark:text-gray-300 text-xl md:text-2xl">Simple Todo List app made with:</h2>
                @foreach ($technologies as $technology)
                    <div class="mt-1 md:mt-2 text-xl md:text-2xl">
                        <div class="w-fill h-full flex p-3 pl-3 bg-white shadow-lg rounded-md dark:bg-slate-800 dark:highlight-white/5">
                            <svg class="ml-2 md:ml-3 w-8 md:w-10 h-full self-center text-green-500 dark:text-green-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="ml-2 md:ml-3 self-center text-gray-800 dark:text-gray-200">{{ $technology }}</span>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="mt-1 md:mt-2 text-xl md:text-2xl">
                    <div class="w-fill h-full flex p-3 pl-3 bg-white shadow-lg rounded-md dark:bg-slate-800 dark:highlight-white/5">
                        <svg class="ml-2 md:ml-3 w-8 md:w-10 h-full self-center text-green-500 dark:text-green-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span class="ml-2 md:ml-3 self-center text-gray-800 dark:text-gray-200">Livewire</span>
                    </div>
                </div>

                <div class="mt-1 md:mt-2 text-xl md:text-2xl">
                    <div class="w-fill h-full flex p-3 pl-3 bg-white shadow-lg rounded-md dark:bg-slate-800 dark:highlight-white/5">
                        <svg class="ml-2 md:ml-3 w-8 md:w-10 h-full self-center text-green-500 dark:text-green-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span class="ml-2 md:ml-3 self-center text-gray-800 dark:text-gray-200">Api-Rest</span>
                    </div>
                </div>

                <div class="mt-1 md:mt-2 text-xl md:text-2xl">
                    <div class="w-fill h-full flex p-3 pl-3 bg-white shadow-lg rounded-md dark:bg-slate-800 dark:highlight-white/5">
                        <svg class="ml-2 md:ml-3 w-8 md:w-10 h-full self-center text-green-500 dark:text-green-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span class="ml-2 md:ml-3 self-center text-gray-800 dark:text-gray-200">Sanctum</span>
                    </div>
                </div>

                <div class="mt-1 md:mt-2 text-xl md:text-2xl">
                    <div class="w-fill h-full flex p-3 pl-3 bg-white shadow-lg rounded-md dark:bg-slate-800 dark:highlight-white/5">
                        <svg class="ml-2 md:ml-3 w-8 md:w-10 h-full self-center text-green-500 dark:text-green-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span class="ml-2 md:ml-3 self-center text-gray-800 dark:text-gray-200">Tailwind</span>
                    </div>
                </div> --}}
            </section>
        </main>

    </div>
</x-guest-layout>
