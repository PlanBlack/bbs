<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('layouts._head')

<body class="theme-light classic bg-tertiary-99">

<div class="flex flex-col overflow-auto bg-primary-300">

    @include('layouts._header')

    @include('layouts._msg')

    <div class="container flex flex-wrap flex-1 px-2 sm:px-5 mx-auto mt-3 sm:mt-5 md:flex-no-wrap">

        @yield('content')

        @include('layouts._sidebar')

    </div>

    @include('layouts._footer')

</div>

@include('layouts._javascript')

<!-- Global site tag (gtag.js) - Google Analytics -->

</body>
</html>
