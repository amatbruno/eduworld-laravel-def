<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-16">
            <a class="text-white text-xl font-black" href="{{ url('/tasks') }}"><-- </a>
                    <h2 class="font-semibold text-2xl text-white leading-tight">Add task to a course</h2>
        </div>
    </x-slot>

    <form class="flex gap-1 flex-col border justify-center w-[500px] mx-auto mt-10 px-7 py-6 bg-white rounded-xl"
        action="{{ route('add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label class="font-semibold" for="image">Thumbnail:</label>
        <input type="file" name="thumbnail">
        <br>
        <label class="font-semibold" for="title">Assignment Title:</label>
        <input class="rounded-lg" type="text" name="title">
        <br>
        <label class="font-semibold" for="description">Description:</label>
        <textarea class="rounded-lg resize-none" name="description" rows="3"></textarea>
        <br>
        <label class="font-semibold" for="due_date">Due Date:</label>
        <input class="rounded-lg" type="datetime-local" name="due_date">
        <br>
        <label class="font-semibold" for="course_id">Course:</label>
        <select class="rounded-lg" name="course_id">
            @foreach (App\Models\Course::all() as $course)
                <option value="{{ $course->id }}">{{ $course->title }}</option>
            @endforeach
        </select>
        <br>
        <button
            class="bg-[#007CC0] text-gray-200 px-7 py-1 font-semibold mt-5 
            rounded-md text-lg hover:bg-blue-600 transition-all"
            type="submit">Enroll</button>
    </form>

</x-app-layout>
