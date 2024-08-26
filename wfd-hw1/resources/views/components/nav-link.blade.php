<li class="nav-item">
    <a class="nav-link{{ Route::is($name) || (isset($active) && $active) ? ' active' : '' }}" aria-current="page" href="{{ $href }}">
        {{ $slot }}
    </a>
</li>
