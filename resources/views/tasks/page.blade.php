<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-16">
            <a class="text-white text-xl font-black" href="{{ url('/dashboard') }}"><-- </a>
                    <h2 class="font-semibold text-2xl text-white leading-tight">Assignments List</h2>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8 flex justify-between items-center">
        <a class="text-white underline font-medium text-xl" href="{{ route('add.show') }}">Add new task</a>
        <form action="{{ url('/tasks') }}" method="GET">
            <select name="course_id" id="course_id" onchange="this.form.submit()">
                <option selected="selected">Select a course</option>
                <option value="all">All Assignments</option>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                @endforeach
            </select>
        </form>
    </div>

    <div class="mt-8">
        <div class="grid grid-cols-3 gap-5 max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($assignments as $assig)
                <article id="task-container" class="bg-white overflow-hidden shadow-xl sm:rounded-xl h-fit flex flex-col justify-start">
                    <img class="w-full h-52" src={{ $assig->thumbnail }} alt="assignment_photo">
                    <div class="border-t flex flex-col gap-2 items-start py-3 px-3">
                        <h1 class="text-xl font-semibold">{{ $assig->title }}</h1>
                        <p class="text-lg">{{ $assig->description }}</p>
                    </div>
                    <button class="bg-[#007CC0] text-white border rounded-md p-1 m-1">View assignment</button>
                </article>
            @endforeach
        </div>
    </div>
    </div>

</x-app-layout>
