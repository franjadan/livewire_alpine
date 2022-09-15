<div>

    <p>Count: {{ $count }}</p>

    <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" wire:click="incrementar">
        Aumentar desde livewire
    </button>

    <div x-data="{ count: @entangle('count') }">
        <p>Count dentro de alpine <span x-text="count"></span></p>

        <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" @click="count++">
            Pulsar para aumentar
        </button>
    </div>
</div>
