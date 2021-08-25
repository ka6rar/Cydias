
@php
    header("Content-Type: text/plain");
    //Generates HTTP error 500
    header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
@endphp