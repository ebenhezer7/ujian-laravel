@extends('layout')

@section('title', 'Data kelas page')

@section('content')
        <table cellpadding=10 cellspacing=0 border=1>
                <tr>
                        <th>id</th>
                        <th>namakelas</th>
                        <th>jurusan</th>
                        <th>walikelas</th>
                        <th>jumlahsiswa</th>
                </tr>   
        @foreach($data as $person)
        <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $person->namakelas }}</td>  
                <td>{{ $person->jurusan }}</td>
                <td>{{ $person->walikelas }}</td>
                <td>{{ $person->jumlahsiswa }}</td>
        </tr>   
@endforeach
</table>
@endsection
