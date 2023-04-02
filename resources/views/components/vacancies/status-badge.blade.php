@props([
    'status'
])
<span
    class="badge
    @switch($status)
    @case('done')
        badge-success
    @break
    @case('active')
        badge-primary
    @break
    @case('draft')
        badge-info
    @break
    @case('archive')
        badge-secondary
    @break
    @endswitch">
    {{ $status }}
</span>
