<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-16">
            <a class="text-white text-xl font-black" href="{{ url('/tasks') }}"><-- </a>
                    <h2 class="font-semibold text-2xl text-white leading-tight">Add tasks for courses</h2>
        </div>
    </x-slot>

    <form class="flex gap-1 flex-col border justify-center w-[500px] mx-auto mt-16 px-7 py-10 bg-white rounded-xl"
        action="{{ route('add') }}" method="POST">
        @csrf
        <label class="font-semibold" for="title">Assignment Title:</label>
        <input class="rounded-lg" type="text" name="title">
        <br>
        <label class="font-semibold" for="description">Description:</label>
        <textarea class="rounded-lg" name="description" rows="4"></textarea>
        <br>
        <label class="font-semibold" for="due_date">Due Date:</label>
        <input class="rounded-lg" type="date" name="due_date">
        <br>
        <label class="font-semibold" for="course_id">Course:</label>
        <select class="rounded-lg" name="course_id">
            @foreach (App\Models\Course::all() as $course)
                <option value="{{ $course->id }}">{{ $course->title }}</option>
            @endforeach
        </select>
        <br>
        <button class="bg-[#007CC0] text-gray-200 px-7 py-1 font-semibold mt-7" type="submit">Enroll</button>
    </form>

</x-app-layout>
