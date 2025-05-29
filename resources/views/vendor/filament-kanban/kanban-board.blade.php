<x-filament-panels::page>
    <div x-data wire:ignore.self class="flex flex-col md:flex-row gap-6 overflow-x-auto pb-6">
        @foreach($statuses as $status)
            <div class="flex-shrink-0 md:w-1/3 rounded-lg shadow-md border border-gray-900">
                <div class="p-4 space-y-4">
                    @include(static::$statusView)
                </div>
            </div>
        @endforeach

        <div wire:ignore class="hidden">
            @include(static::$scriptsView)
        </div>
    </div>

    @unless($disableEditModal)
        <x-filament-kanban::edit-record-modal />
    @endunless
</x-filament-panels::page>
