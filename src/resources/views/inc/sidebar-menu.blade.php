@foreach($items as $item)
    <li @lm-attrs($item) class="nav-item" @lm-endattrs>
    @if($item->link)
        <a @lm-attrs($item->link) {!! $item->hasChildren() ? 'data-toggle="collapse"' : '' !!}  {!! $item->hasChildren() && is_child_active($item->children()) ? 'aria-expanded="true"' : '' !!} class="nav-link" @lm-endattrs href="{!! $item->url() !!}">
            @if($item->beforeHTML)
                {!! $item->beforeHTML !!}
            @endif
            <p>
                {!! $item->title !!}
                @if($item->hasChildren()) <b class="caret"></b> @endif
            </p>
            @if($item->afterHTML)
                {!! $item->afterHTML !!}
            @endif
        </a>
    @else
        {!! $item->title !!}
    @endif
    @if($item->hasChildren())
        <div class="collapse {{ is_child_active($item->children()) ? 'show' : '' }}" id="{{ substr($item->url(), 1) }}">
            <ul class="nav">
                @include('lbd::inc.sidebar-menu', array('items' => $item->children()))
            </ul>
        </div>
    @endif
    </li>
    @if($item->divider)
    <li {!! Lavary\Menu\Builder::attributes($item->divider) !!}></li>
    @endif
@endforeach
