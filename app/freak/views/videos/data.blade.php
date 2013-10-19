@extends('freak::elements.filterable')

@section('table')
<thead>
<tr>
    <th>Id</th>
    <th>Title</th>
    <th>Youtube</th>
    <th>Tools</th>
</tr>
</thead>
<tbody>
@foreach($videos as $video)
<tr>
    <td>{{ $video->id }}</td>
    <td>{{ $video->title }}</td>
    <td><a href="{{ $video->youtube }}">Video</a></td>

    @include('freak::elements.tools', array('id' => $video->id))
</tr>
@endforeach
</tbody>
<tfoot>
<tr>
    <th>Id</th>
    <th>Title</th>
    <th>Youtube</th>
    <th>Tools</th>
</tr>
</tfoot>
@stop
