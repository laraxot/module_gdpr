<x-modal.skin on-submit="save" :content-padding="false">

    {!! $document_html !!}

    <x-slot name="buttons">
        <button type="button" wire:click="$emit('modal.close')">
            Cancel
        </button>
    </x-slot>
</x-modal.skin>
