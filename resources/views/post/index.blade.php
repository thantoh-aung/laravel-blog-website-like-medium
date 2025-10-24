<x-app-layout>
    <div class="py-4 bg-gray-100"> {{-- FIX: Added bg-gray-100 to the main wrapper --}}
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-7">
            {{-- Category Filter Section --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <x-category-tabs >No Categories Found</x-category-tabs>
                </div>
            </div>

            {{-- Post List Section --}}
            <div class="mt-8 text-gray-900">
                {{-- Padding wrapper remains p-6 --}}
                <div class="p-6">
                    @forelse ($posts as $post)
                      <x-post-item :post="$post"></x-post-item>
                    @empty
                    <div class="text-center text-gray-400 py-16 "> No Posts Found </div>

                    @endforelse
                </div>
            </div>
            {{$posts->onEachSide(1)->links()}}
        </div>
    </div>
</x-app-layout>
