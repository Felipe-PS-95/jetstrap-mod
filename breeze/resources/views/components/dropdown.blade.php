@props(['id' => 'navbarDropdown'])

<li class="nav-item dropdown">
    <a id="{{ $id }}" {!! $attributes->merge(['class' => 'nav-link dropdown-toggle']) !!} role="button" data-bs-toggle="dropdown" aria-expanded="false">
        {{ $trigger }}
    </a>

    <div class="dropdown-menu dropdown-menu-end animate slideIn" aria-labelledby="{{ $id }}">
        {{ $content }}
    </div>
</li>