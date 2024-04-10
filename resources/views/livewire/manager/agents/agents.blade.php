<div>
    <x-breadcrumbs />
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="box">
                <div class="box-header">
                    <h5 class="box-title">{{ __('Liste des Agents') }}</h5>
                    <button type="button"
                        wire:click="$dispatch('openModal', { component: 'manager.agents.agent-modal' })"
                        class="ti-btn ti-btn-primary-full label-ti-btn">
                        <i class="ri-file-add-line label-ti-btn-icon me-2"></i>
                        {{ __('Ajout Agent') }}
                    </button>
                </div>
                <div class="box-body space-y-2">
                    <div class="flex items-center justify-between mb-4">
                        <div class="">
                            <input type="text" class="form-control" name="search" placeholder="Search"
                                wire:model.live.debounce.300ms='search'>
                        </div>
                        <div class="">
                            <div class="flex items-center flex-wrap mb-5">
                                <button type="button" class="ti-btn ti-btn-outline-primary ti-btn-wave m-1 ">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ">
                                        <path
                                            d="M15.3929 4.05365L14.8912 4.61112L15.3929 4.05365ZM19.3517 7.61654L18.85 8.17402L19.3517 7.61654ZM21.654 10.1541L20.9689 10.4592V10.4592L21.654 10.1541ZM3.17157 20.8284L3.7019 20.2981H3.7019L3.17157 20.8284ZM20.8284 20.8284L20.2981 20.2981L20.2981 20.2981L20.8284 20.8284ZM14 21.25H10V22.75H14V21.25ZM2.75 14V10H1.25V14H2.75ZM21.25 13.5629V14H22.75V13.5629H21.25ZM14.8912 4.61112L18.85 8.17402L19.8534 7.05907L15.8947 3.49618L14.8912 4.61112ZM22.75 13.5629C22.75 11.8745 22.7651 10.8055 22.3391 9.84897L20.9689 10.4592C21.2349 11.0565 21.25 11.742 21.25 13.5629H22.75ZM18.85 8.17402C20.2034 9.3921 20.7029 9.86199 20.9689 10.4592L22.3391 9.84897C21.9131 8.89241 21.1084 8.18853 19.8534 7.05907L18.85 8.17402ZM10.0298 2.75C11.6116 2.75 12.2085 2.76158 12.7405 2.96573L13.2779 1.5653C12.4261 1.23842 11.498 1.25 10.0298 1.25V2.75ZM15.8947 3.49618C14.8087 2.51878 14.1297 1.89214 13.2779 1.5653L12.7405 2.96573C13.2727 3.16993 13.7215 3.55836 14.8912 4.61112L15.8947 3.49618ZM10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981L2.64124 21.3588C3.38961 22.1071 4.33855 22.4392 5.51098 22.5969C6.66182 22.7516 8.13558 22.75 10 22.75V21.25ZM1.25 14C1.25 15.8644 1.24841 17.3382 1.40313 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588L3.7019 20.2981C3.27869 19.8749 3.02502 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14H1.25ZM14 22.75C15.8644 22.75 17.3382 22.7516 18.489 22.5969C19.6614 22.4392 20.6104 22.1071 21.3588 21.3588L20.2981 20.2981C19.8749 20.7213 19.2952 20.975 18.2892 21.1102C17.2615 21.2484 15.9068 21.25 14 21.25V22.75ZM21.25 14C21.25 15.9068 21.2484 17.2615 21.1102 18.2892C20.975 19.2952 20.7213 19.8749 20.2981 20.2981L21.3588 21.3588C22.1071 20.6104 22.4392 19.6614 22.5969 18.489C22.7516 17.3382 22.75 15.8644 22.75 14H21.25ZM2.75 10C2.75 8.09318 2.75159 6.73851 2.88976 5.71085C3.02502 4.70476 3.27869 4.12511 3.7019 3.7019L2.64124 2.64124C1.89288 3.38961 1.56076 4.33855 1.40313 5.51098C1.24841 6.66182 1.25 8.13558 1.25 10H2.75ZM10.0298 1.25C8.15538 1.25 6.67442 1.24842 5.51887 1.40307C4.34232 1.56054 3.39019 1.8923 2.64124 2.64124L3.7019 3.7019C4.12453 3.27928 4.70596 3.02525 5.71785 2.88982C6.75075 2.75158 8.11311 2.75 10.0298 2.75V1.25Z"
                                            fill="currentColor" />
                                        <path opacity="0.5"
                                            d="M13 2.5V5C13 7.35702 13 8.53553 13.7322 9.26777C14.4645 10 15.643 10 18 10H22"
                                            stroke="currentColor" stroke-width="1.5" />
                                    </svg>
                                    CSV
                                </button>
                                <button type="button" class="ti-btn ti-btn-outline-primary ti-btn-wave m-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ">
                                        <path
                                            d="M15.3929 4.05365L14.8912 4.61112L15.3929 4.05365ZM19.3517 7.61654L18.85 8.17402L19.3517 7.61654ZM21.654 10.1541L20.9689 10.4592V10.4592L21.654 10.1541ZM3.17157 20.8284L3.7019 20.2981H3.7019L3.17157 20.8284ZM20.8284 20.8284L20.2981 20.2981L20.2981 20.2981L20.8284 20.8284ZM14 21.25H10V22.75H14V21.25ZM2.75 14V10H1.25V14H2.75ZM21.25 13.5629V14H22.75V13.5629H21.25ZM14.8912 4.61112L18.85 8.17402L19.8534 7.05907L15.8947 3.49618L14.8912 4.61112ZM22.75 13.5629C22.75 11.8745 22.7651 10.8055 22.3391 9.84897L20.9689 10.4592C21.2349 11.0565 21.25 11.742 21.25 13.5629H22.75ZM18.85 8.17402C20.2034 9.3921 20.7029 9.86199 20.9689 10.4592L22.3391 9.84897C21.9131 8.89241 21.1084 8.18853 19.8534 7.05907L18.85 8.17402ZM10.0298 2.75C11.6116 2.75 12.2085 2.76158 12.7405 2.96573L13.2779 1.5653C12.4261 1.23842 11.498 1.25 10.0298 1.25V2.75ZM15.8947 3.49618C14.8087 2.51878 14.1297 1.89214 13.2779 1.5653L12.7405 2.96573C13.2727 3.16993 13.7215 3.55836 14.8912 4.61112L15.8947 3.49618ZM10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981L2.64124 21.3588C3.38961 22.1071 4.33855 22.4392 5.51098 22.5969C6.66182 22.7516 8.13558 22.75 10 22.75V21.25ZM1.25 14C1.25 15.8644 1.24841 17.3382 1.40313 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588L3.7019 20.2981C3.27869 19.8749 3.02502 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14H1.25ZM14 22.75C15.8644 22.75 17.3382 22.7516 18.489 22.5969C19.6614 22.4392 20.6104 22.1071 21.3588 21.3588L20.2981 20.2981C19.8749 20.7213 19.2952 20.975 18.2892 21.1102C17.2615 21.2484 15.9068 21.25 14 21.25V22.75ZM21.25 14C21.25 15.9068 21.2484 17.2615 21.1102 18.2892C20.975 19.2952 20.7213 19.8749 20.2981 20.2981L21.3588 21.3588C22.1071 20.6104 22.4392 19.6614 22.5969 18.489C22.7516 17.3382 22.75 15.8644 22.75 14H21.25ZM2.75 10C2.75 8.09318 2.75159 6.73851 2.88976 5.71085C3.02502 4.70476 3.27869 4.12511 3.7019 3.7019L2.64124 2.64124C1.89288 3.38961 1.56076 4.33855 1.40313 5.51098C1.24841 6.66182 1.25 8.13558 1.25 10H2.75ZM10.0298 1.25C8.15538 1.25 6.67442 1.24842 5.51887 1.40307C4.34232 1.56054 3.39019 1.8923 2.64124 2.64124L3.7019 3.7019C4.12453 3.27928 4.70596 3.02525 5.71785 2.88982C6.75075 2.75158 8.11311 2.75 10.0298 2.75V1.25Z"
                                            fill="currentColor" />
                                        <path opacity="0.5" d="M6 14.5H14" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path opacity="0.5" d="M6 18H11.5" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path opacity="0.5"
                                            d="M13 2.5V5C13 7.35702 13 8.53553 13.7322 9.26777C14.4645 10 15.643 10 18 10H22"
                                            stroke="currentColor" stroke-width="1.5" />
                                    </svg>
                                    TXT
                                </button>
                                <button type="button" class="ti-btn ti-btn-outline-primary ti-btn-wave m-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ">
                                        <path
                                            d="M15.3929 4.05365L14.8912 4.61112L15.3929 4.05365ZM19.3517 7.61654L18.85 8.17402L19.3517 7.61654ZM21.654 10.1541L20.9689 10.4592V10.4592L21.654 10.1541ZM3.17157 20.8284L3.7019 20.2981H3.7019L3.17157 20.8284ZM20.8284 20.8284L20.2981 20.2981L20.2981 20.2981L20.8284 20.8284ZM14 21.25H10V22.75H14V21.25ZM2.75 14V10H1.25V14H2.75ZM21.25 13.5629V14H22.75V13.5629H21.25ZM14.8912 4.61112L18.85 8.17402L19.8534 7.05907L15.8947 3.49618L14.8912 4.61112ZM22.75 13.5629C22.75 11.8745 22.7651 10.8055 22.3391 9.84897L20.9689 10.4592C21.2349 11.0565 21.25 11.742 21.25 13.5629H22.75ZM18.85 8.17402C20.2034 9.3921 20.7029 9.86199 20.9689 10.4592L22.3391 9.84897C21.9131 8.89241 21.1084 8.18853 19.8534 7.05907L18.85 8.17402ZM10.0298 2.75C11.6116 2.75 12.2085 2.76158 12.7405 2.96573L13.2779 1.5653C12.4261 1.23842 11.498 1.25 10.0298 1.25V2.75ZM15.8947 3.49618C14.8087 2.51878 14.1297 1.89214 13.2779 1.5653L12.7405 2.96573C13.2727 3.16993 13.7215 3.55836 14.8912 4.61112L15.8947 3.49618ZM10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981L2.64124 21.3588C3.38961 22.1071 4.33855 22.4392 5.51098 22.5969C6.66182 22.7516 8.13558 22.75 10 22.75V21.25ZM1.25 14C1.25 15.8644 1.24841 17.3382 1.40313 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588L3.7019 20.2981C3.27869 19.8749 3.02502 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14H1.25ZM14 22.75C15.8644 22.75 17.3382 22.7516 18.489 22.5969C19.6614 22.4392 20.6104 22.1071 21.3588 21.3588L20.2981 20.2981C19.8749 20.7213 19.2952 20.975 18.2892 21.1102C17.2615 21.2484 15.9068 21.25 14 21.25V22.75ZM21.25 14C21.25 15.9068 21.2484 17.2615 21.1102 18.2892C20.975 19.2952 20.7213 19.8749 20.2981 20.2981L21.3588 21.3588C22.1071 20.6104 22.4392 19.6614 22.5969 18.489C22.7516 17.3382 22.75 15.8644 22.75 14H21.25ZM2.75 10C2.75 8.09318 2.75159 6.73851 2.88976 5.71085C3.02502 4.70476 3.27869 4.12511 3.7019 3.7019L2.64124 2.64124C1.89288 3.38961 1.56076 4.33855 1.40313 5.51098C1.24841 6.66182 1.25 8.13558 1.25 10H2.75ZM10.0298 1.25C8.15538 1.25 6.67442 1.24842 5.51887 1.40307C4.34232 1.56054 3.39019 1.8923 2.64124 2.64124L3.7019 3.7019C4.12453 3.27928 4.70596 3.02525 5.71785 2.88982C6.75075 2.75158 8.11311 2.75 10.0298 2.75V1.25Z"
                                            fill="currentColor" />
                                        <path opacity="0.5"
                                            d="M13 2.5V5C13 7.35702 13 8.53553 13.7322 9.26777C14.4645 10 15.643 10 18 10H22"
                                            stroke="currentColor" stroke-width="1.5" />
                                        <path opacity="0.5" d="M7 14L6 15L7 16M11.5 16L12.5 17L11.5 18M10 14L8.5 18"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    JSON
                                </button>
                                <button type="button" class="ti-btn ti-btn-outline-primary ti-btn-wave  m-1 ">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ">
                                        <path
                                            d="M6 17.9827C4.44655 17.9359 3.51998 17.7626 2.87868 17.1213C2 16.2426 2 14.8284 2 12C2 9.17157 2 7.75736 2.87868 6.87868C3.75736 6 5.17157 6 8 6H16C18.8284 6 20.2426 6 21.1213 6.87868C22 7.75736 22 9.17157 22 12C22 14.8284 22 16.2426 21.1213 17.1213C20.48 17.7626 19.5535 17.9359 18 17.9827"
                                            stroke="currentColor" stroke-width="1.5" />
                                        <path opacity="0.5" d="M9 10H6" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path d="M19 14L5 14" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path
                                            d="M18 14V16C18 18.8284 18 20.2426 17.1213 21.1213C16.2426 22 14.8284 22 12 22C9.17157 22 7.75736 22 6.87868 21.1213C6 20.2426 6 18.8284 6 16V14"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path opacity="0.5"
                                            d="M17.9827 6C17.9359 4.44655 17.7626 3.51998 17.1213 2.87868C16.2427 2 14.8284 2 12 2C9.17158 2 7.75737 2 6.87869 2.87868C6.23739 3.51998 6.06414 4.44655 6.01733 6"
                                            stroke="currentColor" stroke-width="1.5" />
                                        <circle opacity="0.5" cx="17" cy="10" r="1"
                                            fill="currentColor" />
                                        <path opacity="0.5" d="M15 16.5H9" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path opacity="0.5" d="M13 19H9" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                    </svg>
                                    PRINT
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden table-bordered">

                        <div class="table-responsive">
                            <table class="table whitespace-nowrap min-w-full">
                                <thead class="bg-primary/10">
                                    <tr class="border-b border-primary/10 uppercase">
                                        <th wire:click='doSort("nom complet")' scope="col" class="text-start">
                                            <x-datatable-item columnName="nom complet" :sortField="$sortField"
                                                :sortDirection="$sortDirection" />
                                        </th>
                                        <th wire:click='doSort("email")' scope="col" class="text-start">
                                            <x-datatable-item columnName="email" :sortField="$sortField" :sortDirection="$sortDirection" />
                                        </th>
                                        <th wire:click='doSort("email")' scope="col" class="text-start">
                                            <x-datatable-item columnName="service" :sortField="$sortField"
                                                :sortDirection="$sortDirection" />
                                        </th>
                                        <th wire:click='doSort("telephone")' scope="col" class="text-start">
                                            <x-datatable-item columnName="telephone" :sortField="$sortField"
                                                :sortDirection="$sortDirection" />
                                        </th>
                                        <th wire:click='doSort("role")' scope="col" class="text-start">
                                            <x-datatable-item columnName="role" :sortField="$sortField" :sortDirection="$sortDirection" />
                                        </th>
                                        <th scope="col" class="text-start">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($agents !== 0)
                                        @foreach ($agents as $agent)
                                            <tr class="border-b border-primary/10">
                                                <td>
                                                    <div class="flex items-center">
                                                        <span class="avatar avatar-sm me-2 online avatar-rounded">
                                                            <img src="/assets/images/faces/13.jpg" alt="img">
                                                        </span>{{ $agent->user->nom }}{{ ' ' }}{{ $agent->user->prenom }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge !rounded-full bg-secondary/10 text-secondary"">{{ $agent->user->email }}</span>

                                                </td>
                                                <td>
                                                    <span
                                                        class="badge !rounded-full bg-danger/10 text-danger uppercase"">{{ $agent->service }}</span>

                                                </td>
                                                <td>
                                                    <span
                                                        class="badge !rounded-full bg-secondary/10 text-secondary"">{{ $agent->user->tel }}</span>

                                                </td>
                                                <td>
                                                    @if ($agent->user->getRoleNames())
                                                        @foreach ($agent->user->getRoleNames() as $role)
                                                            <span
                                                                class="badge  uppercase  {{ $role == 'manager' ? 'bg-success/10 text-success' : 'bg-primary/10 text-primary' }}">{{ $role }}</span>
                                                        @endforeach
                                                    @endif


                                                </td>
                                                <td>
                                                    <div class="hstack flex gap-3 text-[.9375rem]">
                                                        <button type="button"
                                                            wire:click="$dispatch('openModal', { component: 'manager.agents.agent-show-modal',  arguments: { agent: {{ $agent->id }} } })"
                                                            class="ti-btn ti-btn-sm ti-btn-success !rounded-full"><i
                                                                class="ri-list-settings-line"></i></button>
                                                        <button
                                                            wire:click="$dispatch('openModal', { component: 'manager.agents.agent-modal',  arguments: { agent: {{ $agent->id }} } })"
                                                            class="ti-btn ti-btn-sm ti-btn-info !rounded-full"><i
                                                                class="ri-edit-line"></i></button>
                                                        <button type="button"
                                                            wire:click.prevent="deleteConfirmation({{ $agent->id }})"
                                                            class="ti-btn ti-btn-sm ti-btn-danger !rounded-full"><i
                                                                class="ri-delete-bin-line"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    @if ($agents->count() === 0)
                                        <div class="alert alert-warning  fade show flex" role="alert"
                                            id="dismiss-alert1">
                                            <div>
                                                <strong>Oops!</strong> {{ __('Pas de données') }}
                                            </div>
                                            <div class="ms-auto">
                                                <div class="mx-1 my-1">
                                                    <button type="button"
                                                        class="inline-flex bg-teal-50 rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-teal-50 focus:ring-teal-600"
                                                        data-hs-remove-element="#dismiss-alert1">
                                                        <span class="sr-only">Dismiss</span>
                                                        <svg class="h-3 w-3" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                            <path
                                                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </tbody>
                            </table>
                        </div>
                        <div class="flex items-center w-full justify-between my-3">
                            @if ($agents->hasPages())
                                <div class=" flex items-center space-x-4">
                                    <div class="flex-1">{{ __('par page') }}</div>
                                    <div class="">
                                        <select class="ti-form-select rounded-sm !py-2 !px-3"
                                            wire:model.live='perPage'>
                                            <option>8</option>
                                            <option>25</option>
                                            <option>50</option>
                                            <option>100</option>
                                        </select>
                                    </div>
                                </div>
                            @endif
                            <div>
                                {{ $agents->links('pagination::new-pagination') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
