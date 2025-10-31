<x-app-layout>
    <div class="py-4 ">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8 ">
                <!-- Title Section (Prominent) -->
                <h1 class="text-3xl  mb-8">
                    {{ $post->title }}
                </h1>


                <div class="flex items-center p-3 gap-3 mb-6">

                    {{-- User Avatar --}}
                    @if ($post->user->image)
                        <img src="{{ $post->user->imageUrl() }}" alt="{{ $post->user->name }}"
                            class="w-8 h-8 sm:w-11 sm:h-11 md:w-12 md:h-12 rounded-full object-cover flex-none">
                    @else
                        <img src="https://w7.pngwing.com/pngs/695/655/png-transparent-head-the-dummy-avatar-man-tie-jacket-user-thumbnail.png"
                            alt="Default avatar" class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 rounded-full object-cover flex-none">
                    @endif

                    <div class="flex-1 min-w-0">
                        <div class="flex flex-wrap sm:flex-nowrap items-center gap-2 text-sm leading-5">
                            <h3 class="font-semibold text-gray-900 break-words">{{ $post->user->name }}</h3>
                            <span class="text-gray-400">&middot;</span>
                            <a href="#" class="text-emerald-600 hover:text-emerald-700 font-medium">
                                Follow
                            </a>
                        </div>
                        <div class="flex flex-wrap sm:flex-nowrap items-center gap-1.5 text-xs text-gray-500 mt-0.5">
                            <span class="whitespace-nowrap">{{ $post->readTime() }} min read</span>
                            <span class="text-gray-500">&middot;</span>
                            <span class="whitespace-nowrap">{{ $post->created_at->format('M d, Y') }}</span>
                        </div>
                    </div>
                </div>

                 <div class=" border-gray-200 p-2 mb-8 flex ">
                    <x-clap-button />
                </div>

                <!-- Content Section -->
                <div class="mb-8">
                    <div class="mb-8">
                    <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}"
                        class="w-full object-cover rounded-lg mb-12" ></div>


                    <div class="flex mb-8">

                        <p class="text-lg leading-relaxed text-gray-800">
                            {{ $post->content }}
                        </p>
                    </div>
                </div>

                <!-- Category Name / Tags -->
                <div class="mb-8 flex gap-2">
                    @if ($post->category)
                        <span
                            class="p-2 bg-gray-100 text-gray-600 text-sm font-medium rounded-full cursor-pointer hover:bg-gray-200 transition">
                            {{ $post->category->name }}
                        </span>
                    @endif
                </div>

                <!-- Final Clap Section (Often larger, centered) -->
                <div class=" border-gray-200 p-2  flex">
                    <x-clap-button />
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
