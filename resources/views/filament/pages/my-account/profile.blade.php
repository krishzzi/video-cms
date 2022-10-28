<x-filament::page>
{{--    {{ $this->user }}--}}
{{--    Roles--}}
{{--    @foreach ($this->user->roles as $role)--}}
{{--        <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium bg-green-100 text-green-800">--}}
{{--            {{ $role->name }} </span>--}}
{{--    @endforeach--}}

    <form wire:submit.prevent="submit" class="space-y-6">
        {{ $this->form }}

        <div class="flex flex-wrap items-center gap-4 justify-start">
            <x-filament::button type="submit">
                Save
            </x-filament::button>

            {{-- <x-filament::button type="button" color="secondary" tag="a" :href="$this->cancel_button_url">
                Cancel
            </x-filament::button> --}}
        </div>
    </form>
</x-filament::page>
