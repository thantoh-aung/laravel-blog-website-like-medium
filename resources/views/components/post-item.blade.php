  {{-- Post Card Structure --}}
                        <div
                            class="flex bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden mb-8">

                            <div class="p-4 flex-1 min-w-0"> {{-- FIX: Reduced padding from p-5 to p-4 --}}
                                <a href="#">
                                    {{-- FIX: Reduced to line-clamp-1 for a more compact title --}}
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 line-clamp-1">
                                        {{ $post->title}}</h5>
                                </a>
                                {{-- FIX: Reduced to line-clamp-2 for shorter content preview --}}
                                <div class="mb-3 font-normal text-gray-700 line-clamp-2"> {{ Str::words($post->content, 20) }}
                                </div>
                                <a href="#"
                                    {{-- Button style is BLUE with white text --}}

                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-800 rounded-lg hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300">
                                    <x-primary-button>
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        {{-- FIX: Explicitly set stroke="white" to make the arrow visible on the blue button --}}
                                        <path stroke="white" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    </x-primary-button>
                                </a>
                            </div>
                            <a href="#" class="flex-shrink-0">
                                {{-- Image size kept at w-48 and h-full --}}
                                <img class="w-48 h-full max-h--64 object-cover rounded-r-lg"
                                 src="{{ Storage::url($post->image)}}" alt="" />
                            </a>
                        </div>

