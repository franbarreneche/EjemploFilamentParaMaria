{{-- <x-filament-panels::page>
    <div>
        <form wire:submit="submit">
            {{ $this->form }}

            <button type="submit">
                Submit
            </button>
        </form>

        <x-filament-actions::modals />
    </div>
</x-filament-panels::page> --}}
<x-filament-panels::page>
    <livewire:io-t-message-form />
</x-filament-panels::page>
