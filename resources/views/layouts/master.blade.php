<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Dashboard</title>
    <x-style/>
</head>
<body>
<div class="page">
    <!-- Navbar -->
    <x-header/>
    <x-navbar/>

    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <!-- Content here -->
                {{$slot}}
            </div>
        </div>
        <x-footer/>
    </div>
</div>

@stack('modals')
<x-scripts/>
</body>
</html>
