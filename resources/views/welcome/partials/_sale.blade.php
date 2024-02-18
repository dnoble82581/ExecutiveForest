<section id="sale_items" class="mt-20">
    <header>
        <h2 class="text-5xl font-thin text-center"><span class="text-primaryGreen">Sale</span> Items</h2>
        <p class="max-w-3xl mx-auto mt-2 text-sm text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet asperiores at debitis eaque eos in ipsam iste, iusto laboriosam magni odio possimus, recusandae sunt ullam? In maxime sit veniam.</p>
    </header>
    <div class="grid grid-cols-4 gap-5 px-8 mt-8">
        @foreach($sale as $product)
            <x-cards.product_card :product="$product"/>
        @endforeach

    </div>
</section>
