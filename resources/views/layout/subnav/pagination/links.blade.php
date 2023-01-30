<style>
.pagination.-buttons .pagination__button.disabled,
    fieldset[disabled] a {
    pointer-events: none;
    background-color: #DDDDDD;
    color: #777;
}
</style>



@if ($paginator->haspages())
<div class="row justify-center pt-60 lg:pt-40">
    <div class="col-auto">
      <div class="pagination -buttons">
        @if ($paginator->onFirstPage())
            <a class="pagination__button -prev disabled">
                <i class="icon icon-chevron-left"></i>
            </a>
        @else
        <a href="{{$paginator->previousPageUrl()}}" class="pagination__button -prev">
            <i class="icon icon-chevron-left"></i>
        </a>
        @endif


        <div class="pagination__count">
            @foreach ($elements as $element)
                @if (is_string($element))
                    <span>{{$element}}</span>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="-count-is-active" >{{$page}}</a>
                        @else
                            <a href="{{$url}}" >{{$page}}</a>   
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>
        @if ($paginator->onLastPage())
        <a class="pagination__button -next disabled">
            <i class="icon icon-chevron-right"></i>
        </a>
        @else
        <a href="{{$paginator->nextPageUrl()}}" class="pagination__button -next">
            <i class="icon icon-chevron-right"></i>
        </a>
        @endif

        
      </div>
    </div>
</div>
@endif
