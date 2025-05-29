@props(['status'])

<div class="md:w-[24rem] flex-shrink-0 mb-5 md:min-h-full flex flex-col">
    {{-- Header Section --}}
    <div class="flex items-center justify-between p-4 bg-blue-500 text-white rounded-t-xl shadow-md">
        <h2 class="text-lg font-semibold truncate">{{ $status['title'] ?? 'Untitled' }}</h2>
        <button class="text-sm bg-blue-600 hover:bg-blue-700 px-2 py-1 rounded-md shadow">
            + Add
        </button>
    </div>

    {{-- Cards Container --}}
    <div data-status-id="{{ $status['id'] }}"
        class="flex flex-col flex-1 gap-3 p-4 bg-gray-100 dark:bg-gray-900 rounded-b-xl shadow-md overflow-y-auto">
        @forelse($status['records'] as $record)
        {{-- Individual Card --}}
        <div class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-lg transition">
            <h3 class="text-sm font-medium text-gray-800 dark:text-gray-200 truncate">
                {{ $record['title'] ?? 'Untitled Task' }}
            </h3>
            <p class="text-xs text-gray-600 dark:text-gray-400 mt-1 truncate">
                {{ $record['description'] ?? 'No description available.' }}
            </p>
            <div class="mt-2 flex items-center justify-between text-xs text-gray-500 dark:text-gray-400">
                <span>Due: {{ $record['due_date'] ?? 'N/A' }}</span>
            </div>
            {{-- Progress Bar --}}
            @if(isset($record['progress']))
            <div class="mt-3">
                <div class="text-xs text-gray-600 dark:text-gray-400 mb-1">
                    Progress: {{ round(($record['progress'] / 5) * 100, 2) }}%
                </div>
                <div class="w-full max-w-full bg-gray-900 dark:bg-gray-700 rounded-full h-2 overflow-hidden">
                    <div class="bg-blue-500 h-full transition-all duration-500 ease-in-out"
                        style="width: {{ min(max(($record['progress'] / 5) * 100, 0), 100) }}%;">
                    </div>
                </div>
            </div>
            @endif

        </div>
        @empty
        {{-- Empty State --}}
        <div class="p-4 text-center text-gray-500 dark:text-gray-400">
            No tasks available.
        </div>
        @endforelse
    </div>
</div>