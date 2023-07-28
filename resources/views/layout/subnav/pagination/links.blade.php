    <style>
    .pagination.-buttons .pagination__button.disabled,
        fieldset[disabled] a {
        pointer-events: none;
        background-color: #DDDDDD;
        color: #777;
    }
    @media (max-width: 767px) {
    .pagination.-buttons .pagination__count > * + * {
        margin-left: 13px;
    }
}
    </style>
    
    {{--------------------------------------------------------------------------------------------------------- 
        
    -                                          Mochammad Ikhsan Nawawi                                        -
    
    -                                instagram : https://instagram.com/sanbray_                               -
    
    ----------------------------------------------------------------------------------------------------------}}
    @if ($paginator->haspages())
    <div class="row justify-center pt-60 lg:pt-40">
        <div class="col-xs-12 col-auto">
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
                            <span>{{ $element }}</span>
                        @endif
                        @if (is_array($element))
                            @php
                                $currentPage = $paginator->currentPage();
                                $lastPage = $paginator->lastPage();
                            @endphp
                            @foreach ($element as $page => $url)
                                @if ($page === 1)
                                    <a href="{{ $url }}">{{$page}}</a>
                                @elseif ($page === $currentPage - 1)
                                    <a href="{{ $url }}">{{ $page }}</a>
                                @elseif ($page === $currentPage)
                                    <a class="-count-is-active">{{ $page }}</a>
                                @elseif ($page === $currentPage + 1)
                                    <a href="{{ $url }}">{{ $page }}</a>
                                @elseif ($page === $lastPage)
                                    <a href="{{ $url }}">{{ $page }}</a>
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
    {{--------------------------------------------------------------------------------------------------------- 
        
    -                                          Mochammad Ikhsan Nawawi                                        -
    
    -                                instagram : https://instagram.com/sanbray_                               -
    
    ----------------------------------------------------------------------------------------------------------}}
    