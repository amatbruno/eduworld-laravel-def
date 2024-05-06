<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-16">
            <a class="text-white text-xl font-black" href="{{ url('/tasks') }}"><-- </a>
                    <h2 class="font-semibold text-2xl text-white leading-tight">Add tasks for courses</h2>
        </div>
    </x-slot>

    <form class="flex gap-1 flex-col border justify-center w-[500px] mx-auto mt-10 px-7 py-9 bg-white rounded-xl"
        action="{{ route('add') }}" method="POST">
        @csrf
        <label class="font-semibold" for="title">Assignment Title:</label>
        <input class="rounded-lg" type="text" name="title" required>
        <br>
        <label class="font-semibold" for="description">Description:</label>
        <textarea class="rounded-lg resize-none" name="description" required rows="4"></textarea>
        <br>
        <label class="font-semibold" for="due_date">Due Date:</label>
        <input class="rounded-lg" type="date" name="due_date" required>
        <br>
        <label class="font-semibold" for="course_id">Course:</label>
        <select class="rounded-lg" name="course_id" required>
            @foreach (App\Models\Course::all() as $course)
                <option value="{{ $course->id }}">{{ $course->title }}</option>
            @endforeach
        </select>
        <br>
        <label class="font-semibold" for="thumbnail">Assignment Thumbnail:</label>
        <div class="flex gap-0">
            <input disabled type="text" value="URL"
                class="bg-gray-300 border-gray-400 w-14 text-center rounded-sm">
            <input class="rounded-md w-full" type="text" name="thumbnail">
        </div>

        <br>
        <button
            class="bg-[#007CC0] rounded-lg text-gray-200 px-7 py-1 text-lg font-semibold mt-5 hover:bg-blue-500 transition-all"
            type="submit">Enroll</button>
    </form>

</x-app-layout>
