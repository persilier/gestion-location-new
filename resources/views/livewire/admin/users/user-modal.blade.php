<div class="box">
    <link rel='stylesheet' type='text/css' href='{{ Vite::asset('resources/css/nice-select2.css') }}'>
    <div class="box-header">
        <span class="box-title">{{ __('Ajouter un utilisateur') }}</span>
    </div>
    <div class="box-body">
        <div class="dark:border-defaultborder/10" id="personal-info" aria-labelledby="Personal-item">
            <form class="sm:p-4 p-0" wire:submit='saveUser'>
                <h6 class="font-semibold mb-4 text-[1rem]">
                    Photo :
                </h6>
                <div class="mb-6 sm:flex items-center">
                    <div class="mb-0 me-[3rem]">
                        <span class="avatar avatar-xxl avatar-rounded">
                            @if ($this->user->profile_photo_path)
                                <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}"
                                    id="profile-img">
                            @endif
                            <img src="/assets/images/faces/9.jpg" alt="" id="profile-img">
                            <a aria-label="anchor" href="javascript:void(0);"
                                class="badge rounded-full bg-primary avatar-badge">
                                <input type="file" name="photo" wire:model='form.photo'
                                    class="absolute w-full h-full opacity-0" id="profile-image">
                                <i class="fe fe-camera !text-[0.65rem]"></i>
                            </a>
                        </span>
                    </div>
                    <div class="inline-flex">
                        <button type="button"
                            class="ti-btn bg-primary text-white !rounded-e-none !font-medium ">Change</button>
                        <button type="button" class="ti-btn ti-btn-light !font-medium !rounded-s-none">Remove</button>
                    </div>
                </div>
                <h6 class="font-semibold mb-4 text-[1rem]">
                    Information de connexion :
                </h6>
                <div class="sm:grid grid-cols-12 gap-6 mb-6">
                    <div class="xl:col-span-6 col-span-12">
                        <label for="nom" class="form-label">{{ __('Nom') }}</label>
                        <input type="text" name="nom" wire:model.blur='form.nom'
                            class="form-control w-full !rounded-md" id="nom" placeholder="Nom">
                        <x-input-error for="form.nom" class="mt-2" />
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <label for="prenom" class="form-label">{{ __('Prenom') }}</label>
                        <input type="text" name="prenom" wire:model.blur='form.prenom'
                            class="form-control w-full !rounded-md" id="prenom" placeholder="Prenom">
                        <x-input-error for="form.prenom" class="mt-2" />
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <label class="form-label">User Name</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">username</span>
                            <input type="text" name="username" wire:model.blur='form.username'
                                class="form-control w-full rounded-md" id="basic-url" aria-describedby="basic-addon3">
                            <x-input-error for="form.username" class="mt-2" />
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <label class="form-label">Email</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">user2413@gmail.com</span>
                            <input type="text" name="email" wire:model.blur='form.email'
                                class="form-control w-full rounded-md" id="basic-url" aria-describedby="basic-addon3">
                            <x-input-error for="form.email" class="mt-2" />
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <label for="password" class="form-label">{{ __('Mot de passe') }}</label>
                        <input type="text" name="password" wire:model.blur='form.password'
                            class="form-control w-full !rounded-md" id="nom" placeholder="mot de passe">
                        <x-input-error for="form.password" class="mt-2" />
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <label for="password_confirmation"
                            class="form-label">{{ __('Confirmation mot de passe') }}</label>
                        <input type="text" name="password_confirmation"
                            wire:model.blur='form.password_confirmation' class="form-control w-full !rounded-md "
                            id=password_confirmation" placeholder="confirmation mot de passe">
                        <x-input-error for="form.password_confirmation" class="mt-2" />
                    </div>
                </div>
                <h6 class="font-semibold mb-4 text-[1rem]">
                    Personal information :
                </h6>
                <div class="sm:grid grid-cols-12 gap-6 mb-6">
                    <div class="xl:col-span-6 col-span-12">
                        <label for="telephone" class="form-label">Telephone :</label>
                        <input type="text" name="tel" wire:model.blur='form.tel'
                            class="form-control w-full !rounded-md" id="telephone" placeholder="00 00 99 00">
                        <x-input-error for="form.tel" class="mt-2" />
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <label for="adresse" class="form-label">Adresse :</label>
                        <input type="text" name="adresse" wire:model.blur='form.adresse'
                            class="form-control w-full !rounded-md" id="adresse" placeholder="adresse">
                        <x-input-error for="form.adresse" class="mt-2" />
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <label class="form-label">Statut :</label>
                        <select class="form-control w-full !rounded-md" name="statut" wire:model='form.statut'
                            id="statut">
                            <option value=" " selected>choisir statut</option>
                            <option value="actif">{{ __('actif') }}</option>
                            <option value="inactif">{{ __('inactif') }}</option>
                        </select>
                        <x-input-error for="form.statut" class="mt-2" />
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <label class="form-label">Role :</label>
                        <select class="selectize form-control w-full !rounded-md" name="role" id="role"
                            wire:model.blur='form.role'>
                            <option value=" " selected>choisir rôle</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error for="form.role" class="mt-2" />
                    </div>

                </div>
                <div class="box-footer">
                    <div class="ltr:float-right rtl:float-left">
                        <button type="button" class="ti-btn ti-btn-light m-1">
                            Restore Defaults
                        </button>
                        <button type="submit" class="ti-btn bg-primary text-white m-1">
                            {{ __('Sauvegarder') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="/assets/nice-select2.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(e) {
            // default
            var els = document.querySelectorAll(".selectize");
            els.forEach(function(select) {
                NiceSelect.bind(select);
            });
        });
    </script>
</div>
