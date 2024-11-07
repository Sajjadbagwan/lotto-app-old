<x-layouts.admin>
    <x-slot name="title">{{ trans_choice('general.users', 2) }}</x-slot>


    <x-slot name="content">
        <div x-data="{ page: 'user'}" class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                    Users
                </h2>

                <nav>
                    <ol class="flex items-center gap-2">
                    <li>
                        <a class="font-medium" href="index.html">Dashboard /</a>
                    </li>
                    <li class="font-medium text-primary">Users</li>
                    </ol>
                </nav>
        </div>
        <div class="grid grid-cols-1 gap-9">
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <livewire:users-table />
            </div>
        </div>
        
    </x-slot>

</x-layouts.admin>
