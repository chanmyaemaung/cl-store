@php
    // Current Year
    $year = date('Y');
    $github = 'https://github.com/chanmyaemaung';
    $author = 'Chen Lay';
    $version = '0.1.0';
@endphp

<div class="footer-left">
    Copyright &copy; {{ $year }} <div class="bullet"></div> Powered By <a
        href="{{ $github }}">{{ $author }}</a>
</div>
<div class="footer-right">
    v{{ $version }}
</div>
