<div id="borderright">

    @if($products = Columnizer::make($products, $rows))
    <div id="right11">
        @foreach($products->get(0) as $product)
        @include('partials.product', compact('product'))
        @endforeach
    </div>

    <div id="right22">
        @foreach($products->get(1) as $product)
        @include('partials.product', compact('product'))
        @endforeach
    </div>

    <div id="right33">
        @foreach($products->get(2) as $product)
        @include('partials.product', compact('product'))
        @endforeach
    </div>
    @endif
</div>