<div>
    <x-breadcrumbs />
    <form class="mt-10 box max-w-7xl mx-auto" wire:submit='updateAgence'>
        <div class="box-header">
            <span class="box-title">
                Information de l'Agence de location
            </span>
        </div>
        <div class="box-body grid grid-cols-12 gap-4">
            <div class="py-3 center mx-auto col-span-3" x-data="{ src: '/assets/images/profile-34.jpeg' }">
                <div class="px-4 py-5 ">
                    @if ($agence->logoAgence)
                        <div class="mb-4 w-full">
                            <img src="" class="w-20 h-20 md:w-32 md:h-32 rounded-2xl object-cover "
                                alt="image" />
                        </div>
                    @endif
                    <div class="mb-4 w-full">
                        <img src="/assets/images/faces/9.jpg" alt="image"
                            class="w-20 h-20 md:w-32 md:h-32 rounded-2xl object-cover " />
                    </div>

                    <label class="cursor-pointer mt-6">
                        <span
                            class="mt-2 text-base leading-normal px-4 py-2 bg-danger text-white  rounded-full">{{ __('upload Logo') }}
                        </span>
                        <input type='file' class="hidden" name="logoAgence" accept="image/png , image/jpeg"
                            wire:model='logoAgence' id="logoAgence"
                            @change ="src = URL.createObjectURL($event.target.files[0])" />
                    </label>
                    <x-input-error for="form.logoAgence" class="mt-2" />
                </div>
            </div>
            <div class="col-span-9">
                <div class="sm:p-4 p-0">


                    <div class="sm:grid grid-cols-12 gap-6 mb-6">
                        <div class="xl:col-span-6 col-span-12">
                            <label for="raisonSoc" class="form-label">{{ __('Raison sociale') }}</label>
                            <input type="text" name="raisonSoc" wire:model.blur='form.raisonSoc'
                                class="form-control w-full !rounded-md" id="raisonSoc" placeholder="raison sociale">
                            <x-input-error for="form.raisonSoc" class="mt-2" />
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <label for="telAgence" class="form-label">{{ __('Telephone') }}</label>
                            <input type="text" name="telAgence" wire:model.blur='form.telAgence'
                                class="form-control w-full !rounded-md" id="telAgence" placeholder="telAgence">
                            <x-input-error for="form.telAgence" class="mt-2" />
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <label class="form-label">{{ __('Ifu') }}</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">IFU</span>
                                <input type="text" name="ifu" wire:model.blur='form.ifu'
                                    class="form-control w-full rounded-md" id="basic-url"
                                    aria-describedby="basic-addon3">
                                <x-input-error for="form.ifu" class="mt-2" />
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <label class="form-label">Email</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">user2413@gmail.com</span>
                                <input type="text" name="email" wire:model.blur='form.email'
                                    class="form-control w-full rounded-md" id="email"
                                    aria-describedby="basic-addon3">
                                <x-input-error for="form.email" class="mt-2" />
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <label for="compte_bancaire" class="form-label">{{ __('Compte Bancaire') }}</label>
                            <input type="text" name="compte_bancaire" wire:model.blur='form.compte_bancaire'
                                class="form-control w-full !rounded-md" id="nom"
                                placeholder="IBAN-OOOOOOOOOOOOOO">
                            <x-input-error for="form.compte_bancaire" class="mt-2" />
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <label for="cnss" class="form-label">{{ __('Cnss') }}</label>
                            <input type="text" name="cnss" wire:model.blur='form.cnss'
                                class="form-control w-full !rounded-md " id=cnss"
                                placeholder="confirmation mot de passe">
                            <x-input-error for="form.cnss" class="mt-2" />
                        </div>
                    </div>
                    <div class="sm:grid grid-cols-12 gap-6 mb-6">
                        <div class="xl:col-span-6 col-span-12">
                            <label class="form-label">Ville :</label>
                            <select class="form-control w-full !rounded-md" name="ville" wire:model='form.ville'
                                id="ville">
                                <option value=" ">choisir ville</option>
                                <option value="cotonou" {{ $agence->ville === 'cotonou' ? 'Selected' : '' }}>
                                    {{ __('Cotonou') }}</option>
                                <option value="ouidah" {{ $agence->ville === 'ouidah' ? 'Selected' : '' }}>
                                    {{ __('Ouidah') }}</option>
                                <option value="Parakou" {{ $agence->ville === 'Parakou' ? 'Selected' : '' }}>
                                    {{ __('Parakou') }}</option>
                                <option value="Bohicon" {{ $agence->ville === 'Bohicon' ? 'Selected' : '' }}>
                                    {{ __('Bohicon') }}</option>
                                <option value="Lome" {{ $agence->ville === 'Lome' ? 'Selected' : '' }}>
                                    {{ __('Lome') }}</option>
                            </select>
                            <x-input-error for="form.statut" class="mt-2" />
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <label class="form-label">Pays :</label>
                            <select class="selectize form-control w-full !rounded-md" name="pays" id="pays"
                                wire:model.blur='form.pays'>
                                <option value=" ">choisir pays</option>
                                <option value="Benin" {{ $agence->pays === 'Benin' ? 'Selected' : '' }}>
                                    {{ __('Benin') }}</option>
                                <option value="Togo" {{ $agence->pays === 'Togo' ? 'Selected' : '' }}>
                                    {{ __('Togo') }}</option>
                                <option value="Niger" {{ $agence->pays === 'Niger' ? 'Selected' : '' }}>
                                    {{ __('Niger') }}</option>
                            </select>
                            <x-input-error for="form.pays" class="mt-2" />
                        </div>

                    </div>
                    <div class="box-footer">
                        <div class="ltr:float-right rtl:float-left">
                            <button type="submit" class="ti-btn bg-primary text-white m-1">
                                {{ __('Sauvegarder') }}
                            </button>
                        </div>
                    </div>
    </form>
</div>

</div>
</div>
</div>
