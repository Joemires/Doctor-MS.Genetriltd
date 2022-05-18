@if ($attributes->has('title'))
    <x-backend.page-title title="{{ $attributes->get('title') }}">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('backend.overview') }}">Dashboard</a></li>
            {{ $slot }}

            <li class="breadcrumb-item active"> {{ $attributes->get('nav-title', $attributes->get('title')) }} </li>
        </ol>
    </x-backend.page-title>
@else
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('backend.overview') }}">Dashboard</a></li>
        {{ $slot }}
        <li class="breadcrumb-item active"> {{ $attributes->get('nav-title', $attributes->get('title')) }} </li>
    </ol>
@endif

