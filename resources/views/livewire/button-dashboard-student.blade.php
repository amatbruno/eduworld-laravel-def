<div class="flex flex-col items-center gap-2 py-3">
    <a class="flex gap-4 items-center py-14 w-[300px] h-[150px] text-gray-400 text-center font-bold px-10 text-xl rounded-2xl border-4
        hover:text-gray-700 hover:border-4 hover:border-gray-700 transition-all"
        href=" {{ url($routeManageStudents) }} ">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-school">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />
            <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
        </svg>My Grades</a>
    <a class="flex gap-3 items-center py-14 w-[300px] h-[150px] text-gray-400 text-center font-bold px-10 text-xl rounded-2xl border-4
        hover:text-gray-700 hover:border-4 hover:border-gray-700 transition-all"
        href=" {{ url($routeManageGrades) }} ">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
            <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
        </svg>My Profile</a>
    <a class="flex gap-3 items-center py-14 w-[300px] h-[150px] text-gray-400 text-center font-bold px-10 text-xl rounded-2xl border-4
        hover:text-gray-700 hover:border-4 hover:border-gray-700 transition-all"
        href=" {{ url($routeManageTraining) }} ">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-monkeybar">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M3 21v-15l5 -3l5 3v15" />
            <path d="M8 21v-7" />
            <path d="M3 14h10" />
            <path d="M6 10a2 2 0 1 1 4 0" />
            <path d="M13 13c6 0 3 8 8 8" />
        </svg>Training Zone</a>
</div>
