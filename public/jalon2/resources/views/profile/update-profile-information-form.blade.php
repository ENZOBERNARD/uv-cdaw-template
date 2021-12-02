<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Information Profil') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Mettez à jour les informations de profil et l\'adresse e-mail de votre compte.') }}
        <form action="{{ url('/profile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image">
                        <input type="submit" value="Upload">
                    </form>    
     <img class="image rounded-circle" src="{{(Auth::user()->profile_photo_url)}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">
    </x-slot>
    
    <x-slot name="form">

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Pseudo') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo" style="background-color:darkgrey;">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
