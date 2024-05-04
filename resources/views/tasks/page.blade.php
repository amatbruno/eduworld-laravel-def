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

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex flex-col justify-start gap-5 p-5">
                @foreach ($assignments as $assig)
                    <div class="border-t border-b flex gap-5 items-center p-3">
                        <p class="text-xl mr-16">{{ $assig->title }}</p>
                        <p class="text-xl mr-16">{{ $assig->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
