<x-layouts.admin>
    <x-slot name="title">{{ trans_choice('general.users', 2) }}</x-slot>


    <x-slot name="content">
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Dashboard
                </h2>

                
        </div>
        <div class="grid grid-cols-1 gap-9">
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <p> Dashborad</p>
            </div>
        </div>
        
    </x-slot>

</x-layouts.admin>
