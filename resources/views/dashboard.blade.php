<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if (auth()->user()->isAdmin())
            {{ __('Admin Dashboard') }}
            @endif
            @if (auth()->user()->isTeacher())
            {{ __('teacher Dashboard') }}
            @endif
            @if (auth()->user()->isStudent())
            {{ __('Student Dashboard') }}
            @endif
            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (auth()->user()->isAdmin())
                    <h1>eres administrador</h1>
                @endif
                @if (auth()->user()->isTeacher())
                    <h1>eres profesor</h1>
                @endif
                @if (auth()->user()->isStudent())
                    <h1>eres estudiante</h1>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
