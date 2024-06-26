<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-36">
            <a class="text-white text-xl font-black" href="{{ url('/dashboard') }}"><-- Return to dashboard</a>
                    <h2 class="font-semibold text-2xl text-white leading-tight">Assignments List</h2>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($assignments->isEmpty())
                <h1 class="text-white text-4xl font-semibold w-full text-center mt-10">There's no tasks actually for your
                    course</h1>
            @else
                <div class="overflow-hidden sm:rounded-lg grid grid-cols-3 justify-start gap-8">
                    @foreach ($assignments as $assig)
                        <article class="flex flex-col gap-3 bg-white rounded-lg shadow-lg h-fit">
                            @if ($assig->thumbnail)
                                <div class="w-full">
                                    <img class="w-full shadow-md rounded-t-lg object-cover h-[250px]"
                                        src='{{ asset('storage/' . $assig->thumbnail) }}' alt="task_thumbnail">
                                </div>
                            @else
                                <div class="w-full">
                                    <img class="w-full shadow-md h-[250px]" src='/images/default-assignment.png'
                                        alt="task_thumbnail">
                                </div>
                            @endif
                            <h1 class="px-5 text-xl font-semibold mt-4">{{ $assig->title }}</h1>
                            <p class="px-5 text-lg">{{ $assig->description }}</p>
                            <div id="misc" class="px-5 flex justify-between items-center mt-5 pb-3">
                                <p class="text-md text-gray-500 w-[210px]">Task expires at
                                    {{ $assig->due_date }}</p>
                                <a class="bg-green-600 transition-all hover:bg-green-700 py-2 rounded-lg px-3 text-white"
                                    href="/task-detail/{{ $assig->id }}">View Task</a>
                            </div>
                        </article>
                    @endforeach
            @endif
        </div>
    </div>
    </div>

</x-app-layout>
