<div id="mnuleft">
    <ul id="menu">
        @foreach($categories as $category)
        <li id="menu1"><a href="{{ URL::category($category) }}">{{ $category->title }}</a></li>
        @endforeach
    </ul>
</div>