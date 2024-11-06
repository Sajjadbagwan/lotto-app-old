@stack('content_start')
<div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
    <div class="flex flex-wrap items-center">
        {!! $slot !!}
    </div>
</div>
@stack('content_end')
