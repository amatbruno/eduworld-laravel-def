<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-36">
            <a class="text-white text-xl font-black" href="{{ url('/mytasks') }}"><-- View all tasks</a>
                    <h2 class="font-semibold text-2xl text-white leading-tight">Assignments List</h2>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg justify-start gap-8">
                <article class="flex flex-col gap-3 bg-white rounded-lg shadow-lg h-fit">
                    @if ($assignment->thumbnail)
                        <div class="w-full">
                            <img class="w-full shadow-md rounded-t-lg object-cover h-[450px]"
                                src='{{ asset('storage/' . $assignment->thumbnail) }}' alt="task_thumbnail">
                        </div>
                    @else
                        <div class="w-full">
                            <img class="w-full shadow-md object-cover h-[450px]" src='/images/default-assignment.png'
                                alt="task_thumbnail">
                        </div>
                    @endif
                    <h1 class="px-5 text-4xl font-bold mt-4">{{ $assignment->title }}</h1>
                    <p class="px-5 text-2xl">{{ $assignment->description }}</p>
                    <div id="misc" class="px-5 flex justify-between items-center mt-5 pb-3">
                        <p class="text-lg text-gray-500">Task expires at
                            {{ $assignment->due_date }}</p>
                        <button
                            class="bg-green-600 transition-all hover:bg-green-700 py-2 rounded-lg px-3 text-white">Mark
                            as completed</button>
                    </div>
                </article>
            </div>
        </div>
    </div>

</x-app-layout>
