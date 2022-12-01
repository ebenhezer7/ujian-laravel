@extends('layout')

@section('title', 'Data Eskul page')

@section('content')
<table cellpadding=10 cellspacing=0 border=1>
                <tr>
                        <th>id</th>
                        <th>nip</th>
                        <th>namaguru</th>
                        <th>jk</th>
                        <th>mapel</th>
                        <th>walikelas</th>
                </tr>   
        @foreach($data as $person)
        <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $person->nip }}</td>  
                <td>{{ $person->namaguru }}</td>
                <td>{{ $person->jk }}</td>
                <td>{{ $person->mapel }}</td>
                <td>{{ $person->walikelas }}</td>
        </tr>   
@endforeach
</table>
@endsection