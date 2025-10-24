@props(['categories'])
<ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 justify-center">
                        {{-- "All" tab set to non-active style (white/light) --}}
                        <li class="me-2">
                            <a href="#" class="inline-block px-4 py-2 rounded-lg text-gray-900 bg-gray-100">All</a>
                        </li>
                        {{-- Other categories --}}
                       
                        @forelse ($categories as $category)
                            <li class="me-2">
                                <a href="#"
                                    class="inline-block px-4 py-2 rounded-lg hover:text-gray-900 hover:bg-gray-100">
                                    {{ $category->name }}</a>
                            </li>
                        @empty
                            {{$slot}}
                        @endforelse
                    </ul>