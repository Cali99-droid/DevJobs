<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4">Postular a esta vacante</h3>
    @if (session()->has('mensaje'))
    <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-5 text-sm">
        {{session('mensaje')}}
    </div>

    @else
    <form action="" wire:submit.prevent='postularme' class="w-96 mt-5">
        <div class="mb-4">
            <x-label for="dv" :value="__('Curriculum o Hoja de vida')" />
            <x-input id="cv" type='file' wire:model="cv" accept=".pdf" class="block mt-1 w-full" />

        </div>
        @error('cv')
        <livewire:mostrar-alerta :message="$message" />

        @enderror

        <x-button class="my-5">
            {{__('Postularme')}}
        </x-button>
    </form>
    @endif

</div>