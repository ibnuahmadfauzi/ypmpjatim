<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title') | Yayasan Pengembangan Mutu Pendidikan - Jawa Timur</title>

    {{-- Setting favicon page --}}
    <link rel="icon" href="/assets/images/icon-ypmpjatim.ico" type="image/x-icon">
    {{-- end Setting favicon page --}}

    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    {{-- end Bootstrap CDN --}}

    {{-- CDN Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- end CDN Fontawesome --}}

    {{-- CSS File --}}
    <link rel="stylesheet" href="/assets/css/frontend.css">
    {{-- end CSS File --}}

    {{-- extra CSS File --}}
    @yield('extra-css')
    {{-- end extra CSS File --}}
</head>

<body>
    {{-- Navbar --}}
    @include('frontend.partials.navbar')
    {{-- end Navbar --}}

    @yield('body')

    {{-- Footer --}}
    @include('frontend.partials.footer')
    {{-- end Footer --}}

    {{-- Bootstrap CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    {{-- end Bootstrap CDN --}}

    {{-- CDN Fontawesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/js/all.min.js"
        integrity="sha512-6BTOlkauINO65nLhXhthZMtepgJSghyimIalb+crKRPhvhmsCdnIuGcVbR5/aQY2A+260iC1OPy1oCdB6pSSwQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- end CDN Fontawesome --}}

    {{-- jQuery CDN --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
        integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- end jQuery CDN --}}

    <script src="/assets/js/frontend.js"></script>

    @yield('extra-javascript')
</body>

</html>
