<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-7">
            <a class="text-white text-xl border p-1" href="{{ url('/dashboard') }}"><-- Dashboard</a>
            <h2 class="font-semibold text-2xl text-white leading-tight">Students List</h2>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex flex-col justify-start gap-5 p-5">
                @foreach ($students as $s)
                    <div class="border-t border-b flex gap-5 items-center p-3">
                        <img class="rounded-[100%] w-[50px]" src={{ $s->profile_photo_path }} alt="">
                        <p class="text-xl mr-16">{{ $s->name }}</p>
                        <div class="flex-1"></div>
                        <div class="flex gap-7">
                            <button
                                class="border-2 px-5 py-1 rounded-xl transition-all text-blue-700 border-blue-700 hover:bg-blue-700 hover:text-white">Grades</button>
                            <button
                                class="border-2 px-5 py-1 rounded-xl transition-all text-green-700 border-green-700 hover:bg-green-700 hover:text-white">Message</button>
                            <button
                                class="border-2 px-5 py-1 rounded-xl transition-all text-orange-700 border-orange-700 hover:bg-orange-700 hover:text-white">Unlink</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
