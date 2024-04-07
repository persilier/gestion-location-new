<div>
    <x-breadcrumbs />
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="box">
                <div class="box-header">
                    <h5 class="box-title">{{ __('Liste des roles') }}</h5>
                    <button type="button" wire:click="$dispatch('openModal', { component: 'admin.roles.role-modal' })"
                        class="ti-btn ti-btn-primary-full label-ti-btn">
                        <i class="ri-file-add-line label-ti-btn-icon me-2"></i>
                        {{ __('Ajout rôle') }}
                    </button>
                </div>
                <div class="box-body space-y-2">
                    <div class="overflow-hidden table-bordered">
                        <div class="flex items-center justify-between mb-4">
                            <div class="">
                                <input type="text" class="form-control" name="search" placeholder="Search"
                                    wire:model.live.debounce.300ms='search'>
                            </div>
                            <div class="flex items-center gap-4">
                                <button type="button" class="ti-btn ti-btn-warning-full label-ti-btn !rounded-full">
                                    <i class="ri-file-text-fill label-ti-btn-icon me-2 !rounded-full"></i>
                                    TXT
                                </button>
                                <button type="button" class="ti-btn ti-btn-success-full label-ti-btn !rounded-full">
                                    <i class="ri-file-excel-fill label-ti-btn-icon me-2 !rounded-full"></i>
                                    XLS
                                </button>
                                <button type="button" class="ti-btn ti-btn-info-full label-ti-btn !rounded-full">
                                    <i class="ri-printer-fill label-ti-btn-icon me-2 !rounded-full"></i>
                                    PRINT
                                </button>
                                <button type="button" class="ti-btn ti-btn-danger-full label-ti-btn !rounded-full">
                                    <i class="ri-file-pdf-fill label-ti-btn-icon me-2 !rounded-full"></i>
                                    PDF
                                </button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table whitespace-nowrap min-w-full">
                                <thead class="bg-primary/10">
                                    <tr class="border-b border-primary/10 uppercase">
                                        <th wire:click='doSort("id")' scope="col" class="text-start">
                                            <x-datatable-item columnName="id" :sortField="$sortField" :sortDirection="$sortDirection" />
                                        </th>
                                        <th wire:click='doSort("name")' scope="col" class="text-start">
                                            <x-datatable-item columnName="name" :sortField="$sortField" :sortDirection="$sortDirection" />
                                        </th>
                                        <th wire:click='doSort("created_at")' scope="col" class="text-start">
                                            <x-datatable-item columnName="created_at" :sortField="$sortField"
                                                :sortDirection="$sortDirection" />
                                        </th>
                                        <th scope="col" class="text-start">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($roles !== 0)
                                        @foreach ($roles as $role)
                                            <tr class="border-b border-primary/10">
                                                <th scope="row" class="text-start">{{ $role->id }}</th>
                                                <td>
                                                    <span
                                                        class="badge !rounded-full uppercase bg-primary/10 text-primary"">{{ $role->name }}</span>

                                                </td>
                                                <td><span
                                                        class="badge bg-success/10 text-success">{{ $role->created_at }}</span>
                                                </td>
                                                <td>
                                                    <div class="hstack flex gap-3 text-[.9375rem]">
                                                        <button type="button"
                                                            wire:click="$dispatch('openModal', { component: 'admin.roles.role-permission-modal',  arguments: { role: {{ $role->id }} } })"
                                                            class="ti-btn ti-btn-sm ti-btn-success !rounded-full"><i
                                                                class="ri-list-settings-line"></i></button>
                                                        <button
                                                            wire:click="$dispatch('openModal', { component: 'admin.roles.role-modal',  arguments: { role: {{ $role->id }} } })"
                                                            class="ti-btn ti-btn-sm ti-btn-info !rounded-full"><i
                                                                class="ri-edit-line"></i></button>
                                                        <button type="button"
                                                            wire:click.prevent="deleteConfirmation({{ $role->id }})"
                                                            class="ti-btn ti-btn-sm ti-btn-danger !rounded-full"><i
                                                                class="ri-delete-bin-line"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    @if ($roles->count() === 0)
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
                            @if ($roles->hasPages())
                                <div class=" flex items-center space-x-4">
                                    <div class="flex-1">{{ __('par page') }}</div>
                                    <div class="">
                                        <select class="ti-form-select rounded-sm !py-2 !px-3" wire:model.live='perPage'>
                                            <option>8</option>
                                            <option>25</option>
                                            <option>50</option>
                                            <option>100</option>
                                        </select>
                                    </div>
                                </div>
                            @endif
                            <div>
                                {{ $roles->links('pagination::tailwind') }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
