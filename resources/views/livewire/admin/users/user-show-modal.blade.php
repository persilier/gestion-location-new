<div class="grid grid-cols-12 gap-x-6">
    <div class="xxl:col-span-4 xl:col-span-12 col-span-12">
        <div class="box overflow-hidden">
            <div class="box-body !p-0">
                <div class="sm:flex items-start p-6  main-profile-cover">
                    <div>
                        <span class="avatar avatar-xxl avatar-rounded online me-4">
                            <img src="/assets/images/faces/9.jpg" alt="">
                        </span>
                    </div>
                    <div class="flex-grow main-profile-info">
                        <div class="flex items-center !justify-between -mb-3">
                            <h6 class="font-semibold mb-1 text-white text-[1rem]">
                                {{ $user->nom }}{{ ' ' }}{{ $user->prenom }}
                            </h6>
                            <button type="button" class="ti-btn ti-btn-light !font-medium !gap-0"><i
                                    class="ri-add-line me-1 align-middle inline-block"></i>{{ $user->statut }}</button>
                        </div>
                        <p class="mb-1 !text-white  opacity-[0.7]">Nom d'utilisateur: {{ $user->username }}</p>
                        <div class="flex mb-0">
                            <div class="me-6">
                                @foreach ($user->getRoleNames() as $role)
                                    <p class="font-bold text-[1.25rem] text-white text-shadow mb-0 capitalize">
                                        {{ $role }}</p>
                                @endforeach

                                <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">{{ __('Role') }}</p>
                            </div>
                            <div class="me-6">
                                <p class="font-bold text-[1.25rem] text-white text-shadow mb-0 capitalize">
                                    {{ $user->statut }}</p>
                                <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">{{ __('Statut') }}</p>
                            </div>
                            <div class="me-6">
                                <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">128</p>
                                <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Following</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6 border-b border-dashed dark:border-defaultborder/10">
                    <p class="text-[.9375rem] mb-2 me-6 font-semibold">Contact Information :</p>
                    <div class="text-[#8c9097] dark:text-white/50">
                        <p class="mb-2">
                            <span
                                class="avatar avatar-sm avatar-rounded me-2 bg-light text-[#8c9097] dark:text-white/50">
                                <i
                                    class="ri-mail-line align-middle text-[.875rem] text-[#8c9097] dark:text-white/50"></i>
                            </span>
                            {{ $user->email }}
                        </p>
                        <p class="mb-2">
                            <span
                                class="avatar avatar-sm avatar-rounded me-2 bg-light text-[#8c9097] dark:text-white/50">
                                <i
                                    class="ri-phone-line align-middle text-[.875rem] text-[#8c9097] dark:text-white/50"></i>
                            </span>
                            {{ $user->tel }}
                        </p>
                        <p class="mb-0">
                            <span
                                class="avatar avatar-sm avatar-rounded me-2 bg-light text-[#8c9097] dark:text-white/50">
                                <i
                                    class="ri-map-pin-line align-middle text-[.875rem] text-[#8c9097] dark:text-white/50"></i>
                            </span>
                            {{ $user->adresse }}
                        </p>
                    </div>
                </div>
                <div class="p-6 border-b dark:border-defaultborder/10 border-dashed">
                    <p class="text-[.9375rem] mb-2 me-6 font-semibold">Rôle :</p>
                    <div class="mb-5 grid grid-cols-4 gap-2 p-2">
                        @if (!empty($user->getRoleNames()))
                            @foreach ($user->getRoleNames() as $role)
                                <button type="button"
                                    class="ti-btn ti-btn-primary !rounded-full ti-btn-wave">{{ $role }}</button>
                            @endforeach
                        @endif

                    </div>
                    <div class="mb-2 col-span-12">
                        <form wire:submit='assignRole' class="col-span-12">
                            @csrf
                            <div class="mb-5" wire:ignore>
                                <select id="selectize" class="js-example-placeholder-single js-states form-control"
                                    name="role" wire:model='role'>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit"
                                class="ti-btn ti-btn-outline-success !rounded-full ti-btn-wave">{{ __('Assigner Role') }}</button>
                        </form>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-[.9375rem] mb-2 me-6 font-semibold">Permissions :</p>
                    <div class="box-body col-span-12 w-full ">
                        <div class="mb-4 w-full">
                            @if (!empty($user->getAllPermissions()))
                                @foreach ($user->getAllPermissions() as $user_permission)
                                    <button type="button"
                                        class="ti-btn ti-btn-danger-full  label-ti-btn label-end !rounded-full">
                                        <i class="ri-close-line label-ti-btn-icon ms-2 !rounded-full"></i>
                                        <span class="text-xs">{{ $user_permission->name }}</span>

                                    </button>
                                @endforeach
                            @endif
                        </div>
                        <div class="mb-12 col-span-12">
                            <form wire:submit='givePermission' class="col-span-12">
                                @csrf
                                <div class="mb-5" wire:ignore>
                                    <select id="selectize" class="js-example-placeholder-single js-states form-control"
                                        name="permission" wire:model='permission'>
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
            </div>
        </div>
    </div>
</div>
