<form
    wire:submit="save"
    x-data="{open:'images'}">
    @csrf
{{--  TABS  --}}
    <div
        class="text-sm font-medium text-center text-gray-500 border-b border-gray-200">

        <ul class="flex flex-wrap -mb-px">
            <li class="me-2">
                <button
                    type="button"
                    @click="open='general'"
                    :class="open === 'general' ? 'text-accentBlue border-b-2 border-accentBlue transition-colors ease-in':''"
                    class="inline-block p-4 rounded-t-lg">General</button>
            </li>
            <li class="me-2">
                <button
                    type="button"
                    @click="open='details'"
                    class="inline-block p-4 rounded-t-lg"
                    :class="open === 'details' ? 'text-accentBlue border-b-2 border-accentBlue transition-colors ease-in':''"
                    aria-current="page">Details</button>
            </li>
            <li class="me-2">
                <button
                    type="button"
                    @click="open='meta'"
                    :class="open === 'meta' ? 'text-accentBlue border-b-2 border-accentBlue transition-colors ease-in':''"
                    class="inline-block p-4 rounded-t-lg">Meta</button>
            </li>
            <li class="me-2">
                <button
                    type="button"
                    @click="open='images'"
                    :class="open === 'images' ? 'text-accentBlue border-b-2 border-accentBlue transition-colors ease-in':''"
                    class="inline-block p-4 rounded-t-lg">Images</button>
            </li>
        </ul>
    </div>

{{--  GENERAL  --}}
    <div class="mt-5" x-show="open==='general'">
        <div class="flex gap-5 items-center">
            <div class="flex-1">

                <x-input-label class="text-primaryBlack inline-block mb-1" for="name" :value="__('Product Title')"/>
                <x-input-error class="inline-block" :messages="$errors->get('form.name')"/>
                <x-text-input wire:model="form.name" class="w-full" type="text" id="title"/>

            </div>
            <div class="flex-1">

                <x-input-label class="text-primaryBlack inline-block mb-1" for="price" :value="__('Price')"/>
                <x-input-error class="inline-block" :messages="$errors->get('form.price')"/>
                <x-text-input class="w-full" wire:model="form.price" id="price" type="text"/>

            </div>
            <div class="flex-1">

                <x-input-label class="text-primaryBlack inline-block mb-1" for="sale_price" :value="__('Sale Price')"/>
                <x-input-error class="inline-block" :messages="$errors->get('form.sale_price')"/>
                <x-text-input class="w-full" wire:model="form.sale_price" id="sale_price" type="text"/>

            </div>
            <div>
                <x-input-label class="text-primaryBlack mb-1" for="quantity" :value="__('Quantity')"/>
                <x-input-error class="" :messages="$errors->get('form.quantity')"/>
                <x-text-input class="w-14" wire:model="form.quantity" id="quantity" type="text"/>

            </div>
        </div>

        <div class="flex gap-5 mt-4">
            <div class="flex-1">
                <x-input-label class="text-primaryBlack mb-1 inline-block" for="slug" :value="__('Slug')"/>
                <x-input-error class="inline-block" :messages="$errors->get('form.slug')"/>
                <x-text-input class="w-full" id="slug" wire:model="form.slug" type="text"/>
            </div>
            <div class="flex-1">
                <x-input-label class="text-primaryBlack mb-1 inline-block" for="dimensions" :value="__('Dimensions')"/>
                <x-input-error class="inline-block" :messages="$errors->get('form.dimensions')"/>
                <x-text-input class="w-full" id="dimensions" wire:model="form.dimensions" type="text"/>
            </div>
            <div class="flex-1">
                <x-input-label class="text-primaryBlack mb-1 inline-block" for="sku" :value="__('SKU')"/>
                <x-input-error class="inline-block" :messages="$errors->get('form.sku')"/>
                <x-text-input class="w-full" id="sku" wire:model="form.sku" type="text"/>
            </div>
        </div>
        <div class="flex gap-5 mt-4 items-center">
            <div class="mt-2">
                <x-input-checkbox id="status" value='1' wire:model="form.status"/>
                <x-input-label for="status" class="text-primaryBlack inline-block" :value="__('Available')"/>
                <x-input-error class="inline-block" :messages="$errors->get('form.status')"/>

            </div>
            <div class="mt-2">
                <x-input-checkbox value='1' for="on_sale" wire:model="form.on_sale"/>
                <x-input-label for="on_sale" class="text-primaryBlack inline-block" :value="__('On Sale')"/>
                <x-input-error class="inline-block" :messages="$errors->get('form.on_sale')"/>

            </div>
        </div>
    </div>

{{--  DETAILS  --}}
    <div class="mt-5" x-show="open==='details'">
        <div>

            <div class="">
                <x-input-label class="mb-1" for="long_description" :value="__('Long Description')"/>
                <x-input-error class="inline-block" :messages="$errors->get('form.long_description')"/>
                <x-input-textarea wire:model="form.long_description" id="long_description"/>
            </div>

            <div class="mt-4">

                <x-input-label class="mb-1" for="short_description" :value="__('Short Description')"/>
                <x-input-error class="inline-block" :messages="$errors->get('form.short_description')"/>
                <x-input-textarea wire:model="form.short_description" id="short_description"/>

            </div>
            <div class="mt-4">

                <x-input-label class="mb-1" for="material_finish" :value="__('Material and Finish')"/>
                <x-input-error class="inline-block" :messages="$errors->get('form.material_finish')"/>
                <x-input-textarea wire:model="form.material_finish" id="material_finish" placeholder="Material and finish..."/>

            </div>
        </div>
    </div>

{{--  META  --}}
    <div class="mt-5" x-show="open==='meta'">
        <div class="flex gap-5">
            <div class="flex-1">

                <x-input-label class="mb-1" for="meta_title" :value="__('Meta Title')"/>
                <x-input-error class="inline-block" :messages="$errors->get('form.meta_title')"/>
                <x-text-input class="w-full" wire:model="form.meta_title" id="meta_title"/>

            </div>
            <div class="flex-1">

                <x-input-label class="mb-1" for="meta_keyword" :value="__('Meta Keywords')"/>
                <x-input-error class="inline-block" :messages="$errors->get('form.meta_keyword')"/>
                <x-text-input class="w-full" wire:model="form.meta_keyword" id="meta_keyword"/>

            </div>
        </div>
        <div class="mt-2">

            <x-input-label class="mb-1" for="meta_description" :value="__('Meta Description')"/>
            <x-input-error class="inline-block" :messages="$errors->get('form.meta_description')"/>
            <x-input-textarea wire:model="form.meta_description" id="meta_description"/>

        </div>

{{--   IMAGES  --}}
    </div>

{{--  IMAGES  --}}
    <div>
        <div class="mt-5" x-show="open==='images'">
            @error('photos.*') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="photos">Upload Images</label>
            <input wire:model="photos" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="photos" type="file" multiple>
        </div>
        @if($photos)
            <div class="flex gap-5 mt-5">
                @foreach($photos as $photo)
                    <img
                        src="{{ $photo->temporaryUrl() }}"
                        alt="Preview Image"
                        width="200"
                        class="rounded-lg shadow-lg">
                @endforeach
            </div>
            <div class="mt-5 w-1/2">
                <x-input-label class="text-primaryBlack" for="alt_text" :value="__('Alt Text')"/>
                <x-text-input id="alt_text" wire:model="alt_text" type="text" class="w-full"/>
            </div>
        @endif

    </div>

    <x-buttons.primary-button class="mt-10">Submit</x-buttons.primary-button>
</form>
