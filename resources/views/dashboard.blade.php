<x-app-layout>


    <div class="py-4">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Tabs Section -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-12">
                <div class="p-6 text-gray-900 ">
                    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 justify-center gap-2">
                        <li>
                            <a href="#"
                                class="inline-block px-4 py-2 text-white bg-blue-600 rounded-lg active border-2 border-blue-700 shadow-md"
                                style="color: white !important; background-color: #2563eb !important; border-color: #1d4ed8 !important;"
                                aria-current="page">All</a>
                        </li>
                        @foreach ($categories as $category)
                            <li>
                                <a href="#"
                                    class="inline-block px-4 py-2 rounded-lg hover:text-gray-900 hover:bg-gray-100 transition-colors duration-200">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Posts Section -->
            <div class="text-gray-900 mt-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 ">
                    @foreach ($posts as $post)
                        <div class="w-full max-w-sm mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow-sm mb-4">
                            <a href="#" class="block">
                                <h5 class="mb-3 text-xl font-bold tracking-tight text-gray-900">Noteworthy
                                    technology
                                    acquisitions 2021</h5>
                            </a>
                            <p class="mb-4 font-normal text-gray-700">Here are the biggest enterprise
                                technology acquisitions
                                of 2021 so far, in reverse chronological order.</p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-colors duration-200"
                                style="background-color: #1d4ed8 !important;">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>