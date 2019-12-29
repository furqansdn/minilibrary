<!DOCTYPE html>
<html lang="en">
    @include('frontend.templates.partials.head')
<body>
    {{-- Navigation --}}
    @include('frontend.templates.partials.navigation')

    <div class="container">
        @yield('content')
    </div>
        
    {{-- Script --}}
    @include('frontend.templates.partials.script')
</body>

</html>