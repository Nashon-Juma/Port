<div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
    <div class="p-4 bg-white dark:bg-gray-800 shadow rounded-md">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Total Visits</h3>
        {{-- <p class="text-xl text-gray-800 dark:text-gray-300">{{ $stats['total_visits'] }}</p> --}}
        <p class="text-xl text-gray-800 dark:text-gray-300">3456</p>
    </div>

    <div class="p-4 bg-white dark:bg-gray-800 shadow rounded-md">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Visits by Country</h3>
        <ul>
            {{-- @foreach($stats['visits_by_country'] as $stat)
                <li class="text-gray-800 dark:text-gray-300">{{ $stat->country }}: {{ $stat->count }}</li>
            @endforeach --}}
        </ul>
    </div>
</div>
