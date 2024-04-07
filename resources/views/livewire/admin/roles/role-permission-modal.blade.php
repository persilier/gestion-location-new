<div class="box p-2">
    <div class="box-header items-start p-2">
        <span class="box-title">{{ __('Edition rôle & permissions') }}</span>
    </div>
    <div class="box-body w-full flex flex-col items-center justify-center mx-auto mb-12 px-10">

        <button type="button" class="ti-btn ti-btn-primary !rounded-full ti-btn-wave">{{ $role->name }}</button>

        <div class="w-full grid grid-cols-12 gap-4 box items-start">
            <div class="box-header w-full">
                <span class="box-title">{{ __('Role permissions') }}</span>
            </div>
            <div class="box-body col-span-12 w-full ">
                <div class="mb-12 w-full">
                    @if ($role->permissions)
                        @foreach ($role->permissions as $role_permission)
                            <button type="button"
                                class="ti-btn ti-btn-danger-full  label-ti-btn label-end !rounded-full">
                                <i class="ri-close-line label-ti-btn-icon ms-2 !rounded-full"></i>
                                <span class="text-xs">{{ $role_permission->name }}</span>

                            </button>
                        @endforeach
                    @endif
                    @if ($role->permissions->count() < 1)
                        <div class="alert alert-warning  fade show flex" role="alert" id="dismiss-alert1">
                            <div>
                                <strong>Oops!</strong> {{ __('Aucune permission') }}
                            </div>
                            <div class="ms-auto">
                                <div class="mx-1 my-1">
                                    <button type="button"
                                        class="inline-flex bg-teal-50 rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-teal-50 focus:ring-teal-600"
                                        data-hs-remove-element="#dismiss-alert1">
                                        <span class="sr-only">Dismiss</span>
                                        <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path
                                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="mb-12 col-span-12">
                    <form wire:submit='givePermission' class="col-span-12">
                        @csrf
                        <div class="mb-5" wire:ignore>
                            <select id="selectize" class="js-example-placeholder-single js-states form-control"
                                name="permission">
                                @foreach ($permissions as $permission)
                                    <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit"
                            class="ti-btn ti-btn-outline-danger !rounded-full ti-btn-wave">{{ __('Give permission') }}</button>
                    </form>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#selectize').select2();
            });
        </script>
    </div>
