<div class="w-full h-full mx-auto text-center">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <h1 class="text-2xl mb-2"> My Profile</h1>


            <div class="mb-2">
                <label class="mr-4">Name</label>
                <input class="rounded border-0" type="text" value="{{$user->name}}" wire:click="updateName" wire:model="name">
            </div>

            <div class="mb-2">
                <label class="mr-4">Email</label>
                <input class="rounded border-0" type="text" value="{{$user->email}}" readonly>
            </div>

{{--    <form wire:submit.prevent="save">--}}
{{--            <div class="mb-2">--}}
{{--                <label class="mr-4">Avatar</label>--}}
{{--                <img src="@if(!empty($user->avatar)) {{asset('storage/'.$user->avatar)}} @endif" height="200px" width="200px" class="rounded text-center mx-auto" wire:model="photo">--}}
{{--                @error('photo') <span class="error">{{ $message }}</span> @enderror--}}
{{--                <input class="rounded border-0" type="file" value="{{$user->avatar}}" accept="image/*">--}}
{{--            </div>--}}
{{--        <button type="submit" class="bg-gray-300 p-3 m-3">Update Avatar</button>--}}
{{--    </form>--}}

    <form wire:submit.prevent="updateAvatar">
        @if ($user->avatar)  <!-- this should be $avatar -->
        Avatar Preview:
        <img src="{{ asset('storage/'.$user->avatar) }}" height="300px" width="300px" class="mx-auto rounded text-center"> <!-- this should be $avatar->temporaryUrl() -->
        @endif
        <input type="file" wire:model="avatar">

        @error('avatar') <span class="error">{{ $message }}</span> @enderror

        <button type="submit" class="bg-gray-300 rounded m-2 p-3">Save Avatar</button>
    </form>










</div>
