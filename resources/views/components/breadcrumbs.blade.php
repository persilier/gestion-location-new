<div class="md:flex block items-center justify-between my-[1.5rem] page-header-breadcrumb">
    <div>
        <p class="font-semibold text-[1.125rem] text-defaulttextcolor dark:text-defaulttextcolor/70 !mb-0 ">
            Welcome back, {{ auth()->user()->name ?? __('User') }} !</p>
        <p class="font-normal text-[#8c9097] dark:text-white/50 text-[0.813rem]">Track your sales
            activity, leads and deals here.</p>
    </div>
    <div>
        <div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-smtext-primary hover:text-primary dark:text-primary">
                    <a class="flex items-center text-primary hover:text-primary dark:text-primary"
                        href="javascript:void(0);">
                        Home
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-300 dark:text-white/10 mx-2" width="16"
                            height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round" />
                        </svg>
                    </a>
                </li>

                <li class="text-smtext-primary hover:text-primary dark:text-primary">
                    <a class="flex items-center text-primary hover:text-primary dark:text-primary"
                        href="javascript:void(0);">
                        App Center
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-300 dark:text-white/10 mx-2" width="16"
                            height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round" />
                        </svg>
                    </a>
                </li>

                <li class="text-sm text-gray-500 dark:text-[#8c9097] dark:text-white/50 hover:text-primary truncate"
                    aria-current="page">
                    Application
                </li>
            </ol>
        </div>
    </div>
</div>
