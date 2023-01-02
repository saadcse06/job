<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="BANBEIS ICT DIV">
    <meta name="generator" content="BANBEIS ICT DIV">
    <title>BANBEIS JOB</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
</head>
<body>

@include('layouts.partials.navbar')

<main class="container">
    @yield('content')
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
</body>
</html>
