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
        <x-modal-theme-basic :eventName="$event" :modalTitle="$title">
            <div class="box w-[300px]">
                <div class="box-header">
                    <span
                        class="box-title badge badge-outline-primary rounded-full font-bold uppercase text-md dark:text-white-light">
                        {{ __('Ajout role') }}</span>
                </div>
                <div class="box-body">
                    <x-label for="name" value="{{ __('Name') }}" />
                    <input type="text" wire:model='form.name' placeholder="Type role here..."
                        class="form-control-lg" />
                    <x-input-error for="form.name" class="mt-5" />

                </div>
            </div>
        </x-modal-theme-basic>
    </div>
</div>
