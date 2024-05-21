<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-16">
            <a class="text-white text-xl font-black" href="{{ url('/dashboard') }}"><-- </a>
                    <h2 class="font-semibold text-2xl text-white leading-tight">Students List</h2>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8 flex justify-between items-center">
        <a class="text-white underline font-medium text-xl" href="{{ route('enroll.show') }}">Enroll students to a
            course</a>
        <form action="{{ url('/students') }}" method="GET">
            <select name="course_id" id="course_id" onchange="this.form.submit()">
                <option value="">Select Course</option>
                <option value="all">All Students</option>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                @endforeach
            </select>
        </form>
    </div>

    <div class="py-8" id="student-list">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex flex-col justify-start gap-5 p-5">
                @foreach ($students as $s)
                    <div class="border-t border-b flex gap-5 items-center p-3">
                        <img class="rounded-[100%] w-[50px]" src={{ $s->profile_photo_path }} alt="profile-photo">
                        <p class="text-xl mr-16">{{ $s->name }}</p>
                        <div class="flex-1"></div>
                        <div class="flex gap-7">
                            <livewire:action-user-btn :url="'/grades/' . $s->id" text="Grades" color="green" />
                            <livewire:action-user-btn url="/dashboard" text="Unlink" color="red" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
