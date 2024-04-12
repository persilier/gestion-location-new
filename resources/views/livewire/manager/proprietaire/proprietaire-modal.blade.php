<div class="box mt-2">
    <form wire:submit='saveProprietaire'>
        <div class="box-header">
            <span class="box-title">{{ __('Création d\'un proprietaire') }}</span>
        </div>
        <div class="box-body">
            <div class="sm:grid grid-cols-12 gap-6 mb-6">
                <div class="xl:col-span-6 col-span-12">
                    <label class="form-label">Utilisateurs :</label>
                    <select class="form-control w-full !rounded-md" name="user_id" wire:model='form.user_id'
                        id="user_id">
                        <option value=" " selected>choisir utilisateur</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">
                                {{ $user->nom }}{{ ' ' }}{{ $user->prenom }}</option>
                        @endforeach
                    </select>
                    <x-input-error for="form.user_id" class="mt-2" />
                </div>
                <div class="xl:col-span-6 col-span-12">
                    <label class="form-label">Agence :</label>
                    <select class="form-control w-full !rounded-md" name="agence_id" wire:model='form.agence_id'
                        id="agence_id">
                        <option value=" " selected>choisir agence</option>
                        @foreach ($agences as $agence)
                            <option value="{{ $agence->id }}">{{ $agence->raisonSoc }}</option>
                        @endforeach
                    </select>
                    <x-input-error for="form.agence_id" class="mt-2" />
                </div>
                <div class="xl:col-span-6 col-span-12">
                    <label for="numCompte" class="form-label">{{ __('Numero compte') }}</label>
                    <input type="text" name="numCompte" wire:model.blur='form.numCompte'
                        class="form-control w-full !rounded-md" id="numCompte" placeholder="numero compte">
                    <x-input-error for="form.numCompte" class="mt-2" />
                </div>
                <div class="xl:col-span-6 col-span-12">
                    <label class="form-label">Type compte :</label>
                    <select class="form-control w-full !rounded-md" name="typeCompte" wire:model='form.typeCompte'
                        id="typeCompte">
                        <option value=" ">choisir type compte</option>
                        <option value="mobile" {{ $this->proprietaire == 'mobile' ? 'selected' : '' }}>
                            {{ __('Mobile') }}
                        </option>
                        <option value="banque" {{ $this->proprietaire == 'banque' ? 'selected' : '' }}>
                            {{ __('Banque') }}</option>
                    </select>
                    <x-input-error for="form.typeCompte" class="mt-2" />
                </div>
                <div class="xl:col-span-6 col-span-12">
                    <label for="cniProprio" class="form-label">{{ __('Numero pièce identité') }}</label>
                    <input type="text" name="cniProprio" wire:model.blur='form.cniProprio'
                        class="form-control w-full !rounded-md" id="cniProprio" placeholder="m220033OO">
                    <x-input-error for="form.cniProprio" class="mt-2" />
                </div>
                <div class="xl:col-span-6 col-span-12">
                    <label class="form-label">Type proprietaire:</label>
                    <select class="form-control w-full !rounded-md" name="typeProprio" wire:model='form.typeProprio'
                        id="typeProprio">
                        <option value=" ">choisir type proprio</option>
                        <option value="physique" {{ $this->proprietaire == 'physique' ? 'selected' : '' }}>
                            {{ __('Physique') }}</option>
                        <option value="morale" {{ $this->proprietaire == 'morale' ? 'selected' : '' }}>
                            {{ __('Morale') }}</option>
                    </select>
                    <x-input-error for="form.typeProprio" class="mt-2" />
                </div>
                <div class="xl:col-span-6 col-span-12">
                    <label for="ifuProprio" class="form-label">{{ __('Numero Ifu proprietaire') }}</label>
                    <input type="text" name="ifuProprio" wire:model.blur='form.ifuProprio'
                        class="form-control w-full !rounded-md" id="nom" placeholder="ifu">
                    <x-input-error for="form.ifuProprio" class="mt-2" />
                </div>
                <div class="xl:col-span-6 col-span-12">
                    <label for="typePiece" class="form-label">{{ __('Type de la pièce') }}</label>
                    <input type="text" name="typePiece" wire:model.blur='form.typePiece'
                        class="form-control w-full !rounded-md" id="typePiece" placeholder="type piece">
                    <x-input-error for="form.typePiece" class="mt-2" />
                </div>
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
            </div </div>
    </form>
</div>
