<div
    id="{{ $record->getKey() }}"
    wire:click="recordClicked('{{ $record->getKey() }}', {{ @json_encode($record) }})"
    class="record bg- dark:bg-gray-800 rounded-lg px-6 py-4 cursor-pointer font-semibold text-gray-700 dark:text-gray-200 shadow-md hover:shadow-lg transition-shadow duration-300 ease-in-out border border-gray-200 dark:border-gray-700"
    @if($record->timestamps && now()->diffInSeconds($record->{$record::UPDATED_AT}, true) < 3)
        x-data
        x-init="
            $el.classList.add('animate-pulse-twice', 'bg-primary-100', 'dark:bg-primary-800')
            $el.classList.remove('bg-white', 'dark:bg-gray-800')
            setTimeout(() => {
                $el.classList.remove('bg-primary-100', 'dark:bg-primary-800')
                $el.classList.add('bg-white', 'dark:bg-gray-800')
            }, 3000)
        "
    @endif
>
    <div class="flex items-center space-x-3">
        <div class="flex-shrink-0 w-10 h-10 bg-primary-500 text-white rounded-full flex items-center justify-center font-bold">
            {{ strtoupper(substr($record->{static::$recordTitleAttribute}, 0, 1)) }}
        </div>
        <div class="flex-1">
            <h3 class="text-lg font-semibold truncate">{{ $record->{static::$recordTitleAttribute} }}</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400">
                Last updated: {{ $record->{$record::UPDATED_AT}->diffForHumans() }}
            </p>
        </div>
    </div>
</div>
