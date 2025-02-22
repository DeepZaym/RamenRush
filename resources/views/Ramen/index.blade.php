@extends('layouts.app') 

@section('content') 

<div class="container"> 
    <h3>Daftar Ramen</h3>
    <h3><a href="{{ url('ramen/create') }}">Tambah Data</a></h3> 
    <table> 
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>DESKRIPSI</td>
            <td>HARGA</td>
        </tr>

        @foreach($rows as $row) 
        <tr>
            <td>{{ $row->ramen_id }}</td> 
            <td>{{ $row->ramen_nama }}</td> 
            <td>{{ $row->ramen_deskripsi }}</td> 
            <td>{{ $row->ramen_harga }}</td>
            <td><a href="{{ url('mahasiswa/' . $row->mhsw_id . '/edit') }}">Edit</a></td>
        </tr>
        @endforeach
    </table>
</div>

@endsection
