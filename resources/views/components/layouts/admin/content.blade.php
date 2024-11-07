@stack('content_start')
<div id="app" class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
    @stack('content_content_start')

    {!! $slot !!}

    @stack('content_content_end')

    <notifications></notifications>

    <form id="form-dynamic-component" method="POST" action="#"></form>

    <component v-bind:is="component"></component>
</div>
@stack('content_end')
