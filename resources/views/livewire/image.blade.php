<div>
    <form wire:submit.prevent="save" class="d-flex justify-content-center p-4">
        <input type="file" wire:model="photo">
        {{$xy}}

        @error('photo') <span class="error">{{ $message }}</span> @enderror

        <button class="btn btn-primary" type="button" wire:click="save()">Save Photo</button>
    </form>
    @if(session()->has('message'))
           
            <img src="/{{session('message')}}" class="img-thumbnail rounded mx-auto d-block w-50"></img>

            @endif
    
</div>