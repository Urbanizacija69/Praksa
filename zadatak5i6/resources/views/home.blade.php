<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadatak 5&6</title>

    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset("js/phpgrid/js/themes/redmond/jquery-ui.custom.css") }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset("js/phpgrid/js/jqgrid/css/ui.jqgrid.bs.css") }}">
    <script src="{{ asset("js/phpgrid/js/jquery.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("js/phpgrid/js/jqgrid/js/jquery.jqGrid.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("js/phpgrid/js/jqgrid/js/i18n/grid.locale-en.js") }}" type="text/javascript"></script>
    <script src="{{ asset("js/phpgrid/js/themes/jquery-ui.custom.min.js") }}" type="text/javascript"></script>
</head>
<body>

<div class="container" style="margin-bottom: 100px;">
    <div class="row">
        <div class="quote">{!! $showDatas !!}</div>
    </div>
</div>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

</body>
</html>
