<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('PageTitle')</title>

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./logo.png">

</head>

<body id="section_1">
    @include('Include.TopNav')
    @include('Include.nav')
    @yield('content')
    @include('Include.footer')
</body>

</html>
