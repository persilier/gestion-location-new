<div class="flex items-center">
    {{ $columnName }}
    @if ($sortField !== $columnName)
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
            <path
                d="M18.2072 9.0428 12.0001 2.83569 5.79297 9.0428 7.20718 10.457 12.0001 5.66412 16.793 10.457 18.2072 9.0428ZM5.79282 14.9572 11.9999 21.1643 18.207 14.9572 16.7928 13.543 11.9999 18.3359 7.20703 13.543 5.79282 14.9572Z">
            </path>
        </svg>
    @elseif ($sortDirection === 'ASC')
        <i class="ri-arrow-down-s-line"></i>
    @else
        <i class="ri-arrow-up-s-line"></i>
    @endif
</div>
