<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>PHP MVC Frameworks</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/foundation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <meta class="foundation-mq">
</head>
<body>

<!-- Start Top Bar -->
<div class="top-bar">
    <div class="row">
        <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
                <li role="menuitem">PHP MVC Frameworks</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Top Bar -->

<br>

<div class="row">
    <div class="medium-12 large-12 columns">
        <h4>Details</h4>
        <form method="POST" action="{{ url('/clientes/details') }}">
            @csrf <!-- Protege contra ataques CSRF -->
            <div class="medium-4 columns">
                <label>Name</label>
                <input type="text" name="name" required>
            </div>
            <div class="medium-4 columns">
                <label>Last Name</label>
                <input type="text" name="last_name" required>
            </div>
            <div class="medium-4 columns">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="medium-12 columns">
                <input value="SEND" class="button success hollow" type="submit">
            </div>
        </form>
    </div>
</div>

<div class="row column">
    <hr>
    <ul class="menu">
        <li class="float-right">Copyright Footer</li>
    </ul>
</div>

<script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
<script src="{{ asset('assets/js/vendor/what-input.js') }}"></script>
<script src="{{ asset('assets/js/vendor/foundation.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
