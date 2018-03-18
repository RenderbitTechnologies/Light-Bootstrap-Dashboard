<div class="card {{ $class_list or '' }}">
    <div class="card-header">
        <h4 class="card-title">{{ $title }}</h4>
        <p class="card-category">{{ $subtitle }}</p>
    </div>
    <div class="card-body">
        {{ $body }}
    </div>
    @isset($footer)
    <div class="card-footer">
        {{ $footer }}
    </div>
    @endisset
</div>