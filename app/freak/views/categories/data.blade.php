@extends('freak::elements.filterable')

@section('table')
<thead>
<tr>
    <th>Id</th>
    <th>English Title</th>
    <th>Arabic Title</th>
    <th>Tools</th>
</tr>
</thead>
<tbody>
@foreach($categories as $category)
<tr>
    <td>{{ $category->id }}</td>
    <td>{{ $category->en('title') }}</td>
    <td>{{ $category->ar('title') }}</td>

    @include('freak::elements.tools', array('id' => $category->id))
</tr>
@endforeach
</tbody>
<tfoot>
<tr>
    <th>Id</th>
    <th>English Title</th>
    <th>Arabic Title</th>
    <th>Tools</th>
</tr>
</tfoot>
@stop
