<x-app-layout>
    <main class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-10">
        <div class="flex flex-col items-start gap-14">
            <a class="text-white text-xl font-black" href="{{ url('/students') }}"><-- Return to students view</a>
                    <h1 class="text-2xl mb-3 text-white">Here will appear <strong><em>{{ $student->name }}</em></strong>
                        grades:</h1>
        </div>
        <section class="bg-white overflow-hidden shadow-xl sm:rounded-lg gap-24  p-5 flex items-center justify-center">
            <ul class="border w-1/2 p-2">
                @php
                    $totalScore = 0;
                    $totalCount = 0;
                @endphp

                @foreach ($scores as $subjectId => $subjectScores)
                    @php
                        $subject = $subjectScores->first()->subject ?? null;
                    @endphp
                    @if ($subject)
                        <li class="text-lg flex py-3 justify-between">
                            {{ $subject->name }}:
                            <ul>
                                @foreach ($subjectScores as $score)
                                    <li>{{ $score->score }}</li>
                                    @php
                                        $totalScore += $score->score;
                                        $totalCount++;
                                    @endphp
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li>
                            Subject not found
                        </li>
                    @endif
                @endforeach
                @php
                    $finalAverage = $totalCount > 0 ? $totalScore / $totalCount : 0;
                @endphp

                <li class="text-xl flex py-3 justify-between font-semibold">
                    <p>Final Course Grade: </p>{{ $finalAverage }}
                </li>
            </ul>
            <div>
                <img width="200" src="/images/grades.png" alt="">
            </div>
        </section>
    </main>
</x-app-layout>
