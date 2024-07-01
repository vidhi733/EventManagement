<x-main-layout>
    <!-- component -->
 <section class="bg-white dark:bg-gray-900">
     <div class="container px-6 py-10 mx-auto">
         <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">All Events</h1>

         <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
             @foreach ($events as $event)
                 <div class="lg:flex bg-gray-200 dark:bg-gray-800 rounded-lg">
                     <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="{{ asset('/storage/'. $event->image) }}" alt="{{ $event->title }}">

                     <div class="flex flex-col justify-between py-6 lg:mx-6">
                         <a href="{{ route('eventShow',$event->id) }}"
                            class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                             {{ $event->title }}
                         </a>

                         <span class="text-lg text-gray-500 dark:text-gray-300">{{ $event->country->name }}</span>
                         <span class="text-md text-gray-500 dark:text-gray-300">
                             @foreach ($event->tags as $tag)
                                 <span class="inline-flex items-center rounded-md bg-gray-50 dark:bg-gray-700 px-2 py-1 text-xs font-medium text-gray-600 dark:text-gray-300 ring-1 ring-inset ring-gray-500/10">
                                     {{ $tag->name }}</span>
                             @endforeach
                         </span>
                     </div>
                 </div>
             @endforeach
         </div>
         {{ $events->links() }}
     </div>
 </section>
 </x-main-layout>
