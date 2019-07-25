<!-- <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>VueJS - Index</title>
</head>
<body> -->
    @extends('layouts.app')

    @section('content')
    <div id="app">
        <!-- <index></index> -->
        <!-- <conditional-rendering></conditional-rendering> -->
        <!-- <list-rendering></list-rendering> -->
        <!-- <user-dashboard></user-dashboard> -->
        <!-- <my-text></my-text> -->
        <!-- <nick-name></nick-name> -->
        <!-- <binding-html></binding-html> -->
        <!-- <form-input-binding></form-input-binding> -->
        <!-- <event-handling></event-handling> -->
        <!-- <welcome-text></welcome-text> -->
        <!-- <api-calling></api-calling> -->
        <User></User>

    </div>
    @endsection
<!-- 
    <script src="/js/app.js"></script>
</body>
</html> -->