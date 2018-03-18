<div class="card {{ $class_list or 'card-stats' }}">
    <div class="card-body">
        <div class="row">
            <div class="col-5">
                <div class="icon-big text-center icon-warning">
                    <i class="{{ $icon }}"></i>
                </div>
            </div>
            <div class="col-7">
                <div class="numbers">
                    <p class="card-category">{{ $category }}</p>
                    <h4 class="card-title">{{ $title }}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <hr>
        <div class="stats">
            <i class="{{ $footer_icon }}"></i> {{ $footer }}
        </div>
    </div>
</div>