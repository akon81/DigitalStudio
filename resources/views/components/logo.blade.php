<a href="{{ route('home') }}" @if(!isset($file)) class="block w-50 md:w-60" @endif>
    @if(isset($file))
        <img class="w-50 md:w-60 h-auto" src="assets/img/{{ $file }}" alt="logo" width="240" height="60" loading="eager"/>
    @else
        @include('partials.logo-animated')
    @endif
</a>
