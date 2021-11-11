<!DOCTYPE html>
<html lang=" {{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>NoticiasExpress</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>
    <div id="app">

    </div>
    <!--     <div class="bg-gradient-to-r
                from-indigo-300
                to-blue-300"></div> -->
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>

</html>