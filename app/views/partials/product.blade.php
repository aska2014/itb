<div id="block11">
    @if($image = $product->getImage('main'))
    <a href="{{ URL::product($product) }}">{{ $image->html(0, 103) }}</a>
    @endif
    <span class="salarynamber">{{ $product->getActualPrice()->format() }}</span>
    <span class="infotext">{{ $product->title }}</span>
    <a href="#" class="linkbtncart"><span>Add To Cart</span></a>
</div>