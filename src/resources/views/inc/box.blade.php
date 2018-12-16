<div class="card {{ $class_list ?? '' }}">
    @isset($title)
    <div class="card-header">
        <h4 class="card-title">{{ $title }}</h4>
        @isset($subtitle)<p class="card-category">{{ $subtitle }}</p>@endisset
    </div>
    @endisset
    <div class="card-body {{ $body_class_list ?? '' }}">
        {{ $body }}
    </div>
    @isset($footer)
    <div class="card-footer">
        {{ $footer }}
    </div>
    @endisset
</div>