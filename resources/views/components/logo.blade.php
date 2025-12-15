<a href="{{ route('home') }}">
    @if(isset($file))
        <img class="w-50 md:w-60 h-auto" src="assets/img/{{ $file }}" alt="logo" width="240" height="60" loading="eager"/>
    @else
        <img class="w-50 md:w-60 h-auto dark:hidden" src="assets/img/ds_logo.png" alt="logo" width="240" height="60" loading="eager"/>
        <img class="w-50 md:w-60 h-auto hidden dark:block" src="assets/img/ds_logo_inv.png" alt="logo" width="240" height="60" loading="eager"/>
    @endif
</a>