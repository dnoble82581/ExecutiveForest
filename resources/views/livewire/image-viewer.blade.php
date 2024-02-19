<div class="flex-1">
    <div class="relative">
        <img
            src="{{ $currentImage }}"
            alt="{{ $product->images->first()->alt_text }}"
            class="rounded">
    </div>
    <div class="grid grid-cols-5 mt-2 gap-2">
        @foreach($product->images as $image)
            <div wire:key="{{ $image->id }}">
                <button type="submit" wire:click="swap('{{ $image->image }}')">
                    <img
                        src="{{ $image->image }}"
                        alt="{{ $image->alt_text }}"
                        class="rounded">
                </button>
            </div>
        @endforeach
    </div>
</div>
