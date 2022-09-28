<x-filament::page>


    <div class="grid gap-2 bg-indigo-500">

        <div><b>Name :</b> {{ $this->record->name }}</div>
        <div><b>Slug :</b> {{ $this->record->slug }}</div>
        <div><b>Priority :</b> {{ $this->record->priority }}</div>
        <div><b>Parent Category :</b> {{ $this->record->parent_id }}</div>


        <div> Total Videos Found : {{ $this->record->videos->count() }}</div>
        <div> Total Posts Found : {{ $this->record->posts->count() }}</div>



    </div>







    {{ $this->form }}


</x-filament::page>
