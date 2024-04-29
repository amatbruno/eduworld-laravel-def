<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white leading-tight">
            @if (auth()->user()->isAdmin())
                {{ __('Admin Dashboard') }}
            @endif
            @if (auth()->user()->isTeacher())
                {{ __('Teacher Dashboard') }}
            @endif
            @if (auth()->user()->isStudent())
                {{ __('Student Dashboard') }}
            @endif

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex justify-center items-center gap-16 py-3">
                @if (auth()->user()->isAdmin())
                    <livewire:button-dashboard-admin />
                @endif
                @if (auth()->user()->isTeacher())
                    <livewire:button-dashboard-teacher />
                @endif
                @if (auth()->user()->isStudent())
                    <livewire:button-dashboard-student />
                @endif

                <div class="flex justify-center">
                    <livewire:calendar />
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
