@extends('freak::elements.detail')

@section('tables')
<table class="table table-striped table-detail-view">
    <tbody>
    <tr>
        <th>English Title</th>
        <td>{{ $video->en('title') }}</td>
    </tr>
    <tr>
        <th>Arabic Title</th>
        <td>{{ $video->ar('title') }}</td>
    </tr>
    <tr>
        <th>Youtube</th>
        <td><a href="{{ $video->youtube }}">Video</a></td>
    </tr>
    </tbody>
</table>
@stop
