@if ($paginator->hasPages())
    <nav aria-label="Page navigation" class="pagination-style-1 flex items-center space-x-5">
        <div>
            <p class="text-sm text-gray-700 leading-5 dark:text-gray-400">
                {!! __('Showing') !!}
                @if ($paginator->firstItem())
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    {!! __('to') !!}
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                @else
                    {{ $paginator->count() }}
                @endif
                {!! __('of') !!}
                <span class="font-medium">{{ $paginator->total() }}</span>
                {!! __('results') !!}
            </p>
        </div>
        <ul class="ti-pagination mb-0">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled rtl:rotate-180">

                    <a aria-label="anchor" class="page-link" href="javascript:void(0);">
                        <i class="ri-arrow-left-s-line align-middle"></i>
                    </a>

                </li>
            @else
                <li class="page-item rtl:rotate-180">

                    <a aria-label="anchor" class="page-link" href="{{ $paginator->previousPageUrl() }}">
                        <i class="ri-arrow-left-s-line align-middle"></i>
                    </a>

                </li>
            @endif
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item">
                        <a aria-label="anchor" class="page-link" href="javascript:void(0);">
                            {{ $element }}
                        </a>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item "><a class="page-link active"
                                    href="javascript:void(0);">{{ $page }}</a></li>
                        @else
                            <li class="page-item"><a class="page-link"
                                    href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item rtl:rotate-180">
                    <a aria-label="anchor" class="page-link" href="{{ $paginator->nextPageUrl() }}">
                        <i class="ri-arrow-right-s-line align-middle"></i>
                    </a>
                </li>
            @else
                <li class="page-item rtl:rotate-180 disabled">
                    <a aria-label="anchor" class="page-link" href="javascript:void(0);">
                        <i class="ri-arrow-right-s-line align-middle"></i>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
@endif
