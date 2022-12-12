@if ($paginator->hasPages())
    <div>
        <p class="small text-muted">
            {!! __('Showing') !!}
            <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
            {!! __('to') !!}
            <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
            {!! __('of') !!}
            <span class="fw-semibold">{{ $paginator->total() }}</span>
            {!! __('results') !!}
        </p>
    </div>
    <div class="question-answer-card-pagination">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true"><img style=""
                                    src="new-design/assets/image/question-answer/previous.png" alt=""></span>
                        </a>
                    </li>
                @else 
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true"><img style=""
                                    src="new-design/assets/image/question-answer/previous.png" alt=""></span>
                        </a>
                    </li>
                @endif
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <li class="page-item disabled" aria-disabled="true"><a class="page-link" href="#">{{$element}}</a></li>
                    @endif
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item" aria-current="page"><a class="page-link active" href="#">{{ $page }}</a></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true"><img style="width:10px"
                                    src="new-design/assets/image/question-answer/next.png" alt=""></span>
                        </a>
                    </li>
                @else 
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true"><img style="width:10px"
                                    src="new-design/assets/image/question-answer/next.png" alt=""></span>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
@endif
