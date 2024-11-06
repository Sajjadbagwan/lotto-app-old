<x-layouts.admin>
    <x-slot name="title">{{ trans_choice('general.users', 2) }}</x-slot>


    <x-slot name="content">
        <livewire:users-table />
    </x-slot>

</x-layouts.admin>
