@props([
    'title',
])

<head>
    @stack('head_start')

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8; charset=ISO-8859-1"/>
    
    <title>{!! $title !!}</title>

    <base href="{{ config('app.url') . '/' }}">

    <x-layouts.pwa.head />

   
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('public/img/favicon.ico') }}" type="image/png">

    @vite('resources/css/app.css')

    @stack('css')

    @stack('stylesheet')

    <!-- @livewireStyles -->

    <script type="text/javascript"><!--
        var app_url = '{{ config("app.url") }}';
        var url = "{{ route('admin.login.store') }}";
    //--></script>

    @stack('js')
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript"><!--
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;

        var flash_notification = {!! (session()->has('flash_notification')) ? json_encode(session()->get('flash_notification')) : 'false' !!};
    //--></script>

    {{ session()->forget('flash_notification') }}

    @stack('scripts')

    @stack('head_end')
</head>

