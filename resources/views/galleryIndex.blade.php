<x-main-layout>
    <!-- component -->
 <section class="bg-white dark:bg-gray-900">
     <div class="container px-6 py-10 mx-auto">
         <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">All Galleries</h1>

         <div class="grid grid-cols-2 gap-4 mt-8 mb-6 md:mt-16 md:grid-cols-3">
             @foreach ($galleries as $gallery)
                 <div class="flex justify-center">

                     <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="{{ asset('/storage/'. $gallery->image) }}" alt="{{ $gallery->caption }}">

                 </div>
             @endforeach
        </div>
            {{ $galleries->links() }}
 </section>
 </x-main-layout>
