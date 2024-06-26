<div class="flex flex-col items-center gap-2 py-3">
    <a class="flex items-center py-14 w-[300px] h-[150px] text-gray-400 text-center font-bold px-10 text-xl rounded-2xl border-4
        hover:text-gray-700 hover:border-4 hover:border-gray-700 transition-all"
        href=" {{ url($routeManageStudents) }} ">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-school">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />
            <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
        </svg>Students Management</a>
    <a class="flex items-center py-14 w-[300px] h-[150px] text-gray-400 text-center font-bold px-10 text-xl rounded-2xl border-4
        hover:text-gray-700 hover:border-4 hover:border-gray-700 transition-all"
        href=" {{ url($routeManageGrades) }} ">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-file-certificate">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
            <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5" />
            <path d="M6 14m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
            <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5" />
        </svg>Grades Management</a>
    <a class="flex items-center py-14 w-[300px] h-[150px] text-gray-400 text-center font-bold px-10 text-xl rounded-2xl border-4
        hover:text-gray-700 hover:border-4 hover:border-gray-700 transition-all"
        href=" {{ url($routeManageTasks) }} ">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-list-check">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M3.5 5.5l1.5 1.5l2.5 -2.5" />
            <path d="M3.5 11.5l1.5 1.5l2.5 -2.5" />
            <path d="M3.5 17.5l1.5 1.5l2.5 -2.5" />
            <path d="M11 6l9 0" />
            <path d="M11 12l9 0" />
            <path d="M11 18l9 0" />
        </svg>Tasks Management</a>
</div>
