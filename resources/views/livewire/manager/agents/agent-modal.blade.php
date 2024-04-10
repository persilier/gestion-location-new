<div class="box mt-2">
    <form wire:submit='saveAgent'>
        <div class="box-header">
            <span class="box-title">{{ __('Création d\'un agent') }}</span>
        </div>
        <div class="box-body">
            <div class="sm:grid grid-cols-12 gap-6 mb-6">
                <div class="xl:col-span-6 col-span-12">
                    <label for="fonction" class="form-label">{{ __('Fonction') }}</label>
                    <input type="text" name="fonction" wire:model.blur='form.fonction'
                        class="form-control w-full !rounded-md" id="fonction" placeholder="Fonction">
                    <x-input-error for="form.fonction" class="mt-2" />
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
                    <label class="form-label">Date anniversaire</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">DOB</span>
                        <input type="date" name="dateAniv" wire:model.blur='form.dateAniv'
                            class="form-control w-full rounded-md" id="basic-url" aria-describedby="basic-addon3">
                        <x-input-error for="form.dateAniv" class="mt-2" />
                    </div>
                </div>
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
                    <label for="service" class="form-label">{{ __('Service') }}</label>
                    <input type="text" name="service" wire:model.blur='form.service'
                        class="form-control w-full !rounded-md" id="nom" placeholder="mot de passe">
                    <x-input-error for="form.service" class="mt-2" />
                </div>
                <div class="xl:col-span-6 col-span-12">
                    <label class="form-label">Date embauche</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">DOH</span>
                        <input type="date" name="dateEmbauche" wire:model.blur='form.dateEmbauche'
                            class="form-control w-full rounded-md" id="basic-url" aria-describedby="basic-addon3">
                        <x-input-error for="form.dateEmbauche" class="mt-2" />
                    </div>
                </div>
                <div class="xl:col-span-12 col-span-12">
                    <label class="form-label">Statut :</label>
                    <select class="form-control w-full !rounded-md" name="statut" wire:model='form.statut'
                        id="statut">
                        <option value=" " selected>choisir statut</option>
                        <option value="celibataire">{{ __('celibataire') }}</option>
                        <option value="marie">{{ __('marie') }}</option>
                        <option value="divorcé">{{ __('divorcé') }}</option>
                        <option value="fiancé">{{ __('fiancé') }}</option>
                    </select>
                    <x-input-error for="form.statut" class="mt-2" />
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
