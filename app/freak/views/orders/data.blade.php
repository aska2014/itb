@extends('freak::elements.filterable')

@section('table')
<thead>
<tr>
    <th>Id</th>
    <th>Product</th>
    <th>Message</th>
    <th>User email</th>
    <th>User mobile</th>
    <th>Tools</th>
</tr>
</thead>
<tbody>
@foreach($orders as $order)
@endforeach
</tbody>
<tfoot>
<tr>
    <th>Id</th>
    <th>Product</th>
    <th>Message</th>
    <th>User email</th>
    <th>User mobile</th>
    <th>Tools</th>
</tr>
</tfoot>
@stop
