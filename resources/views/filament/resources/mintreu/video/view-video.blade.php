<x-filament::page>


    <div class="flex justify-center  h-full w-full bg-gradient-to-r from-indigo-500">
        <div class="">



            <h1 class="text-2xl"><b>Title :</b> {{ $this->record->title}}</h1>

            <iframe class="mx-auto p-3 m-3"
                width="{{ $this->record->width}}px"
                height="{{ $this->record->height}}px"
                src="{{ $this->record->embed_code }}" title="{{ $this->record->title  }}">
            </iframe>

            <div class="grid gap-2">
                <div><b>Uploader       : </b> {{ str_replace("https://www.youtube.com/c/",'',$this->record->uploader)}}</div>
                <div><b>Channel        : </b> {{ $this->record->channel }}</div>
                <div><b>Provider       : </b> {{ $this->record->provider }}</div>
                <div><b>Provider Link  : </b> https://www.youtube.com/watch?v={{ $this->record->video_code }}</div>
                <div><b>Description    : </b>{{ $this->record->desc }}</div>
            </div>



        </div>
    </div>




    {{ $this->form }}

</x-filament::page>
