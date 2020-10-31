@extends('layouts.app')
@section('content')
<table class='table'>
    <thead>
        <th>
            Room Number
        </th>
        <th>
            Type
        </th>
    </thead>
    <tbody>
        @foreach($rooms as $room)
            <tr>
                <td>{{ $room->number }}</td>
                <td>{{ $room->roomType->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection