<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    @include('admin.layouts.styles')
    @include('admin.layouts.scripts')

</head>

<body id="page-top">

    <section>
        <div id="wrapper">
    @include('admin.layouts.sidebar')
    @include('admin.layouts.wrapper')
            <section class="content">
    @include('admin.layouts.content')
    @include('admin.layouts.footer')
            </section>
        </div>
    </section>
</body>

</html>
