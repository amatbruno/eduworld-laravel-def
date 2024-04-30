<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Students List
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex justify-center items-center gap-16 py-3">
                @foreach($studentUsers as $sp)
                    <p>{{ $sp->name }}</p>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
