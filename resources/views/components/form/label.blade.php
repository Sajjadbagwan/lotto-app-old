<label class="mb-2.5 block font-medium text-black dark:text-white" {{ $attributes }}>
    {!! $slot !!}

    @if ($attributes->has('required') && $attributes->get('required') === true)
        <span class="text-red ltr:ml-1 rtl:mr-1">*</span>
    @endif
</label>