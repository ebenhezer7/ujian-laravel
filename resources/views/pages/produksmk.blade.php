@extends('layout')

@section('title', 'Data Prestasi page')

@section('content')
        <table cellpadding=10 cellspacing=0 border=1>
                <tr>
                        <th>id</th>
                        <th>namaproduk</th>
                        <th>jurusan</th>
                </tr>   
        @foreach($data as $person)
        <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $person->namaproduk }}</td>
                <td>{{ $person->jurusan }}</td>
        </tr>   
@endforeach
</table>
@endsection
