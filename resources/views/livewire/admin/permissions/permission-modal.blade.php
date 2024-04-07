<div class="box">
    <div class="box-header">
        <span class="box-title">
            {{ __('Ajout permission') }}</span>
    </div>
    <div class="box-body w-full flex items-center justify-center mx-auto ">
        <form wire:submit='savePermission' class="w-full grid grid-cols-12 gap-4">
            <div class="col-span-12">
                <x-label for="name" value="{{ __('Name') }}" class="flex items-start" />

                <input type="text" wire:model='form.name' placeholder="Type permission here..."
                    class="form-control col-span-12 my-2" />
                <x-input-error for="form.name" class="mt-5" />
            </div>
            <button type="submit" class="ti-btn ti-btn-primary-full ti-btn-wave col-span-12"
                type="button">{{ __('Sauvegarder') }}</button>
        </form>
    </div>
</div>
