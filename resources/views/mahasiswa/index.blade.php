@extends('layouts.app')

@section('tittle','Halaman Mahasiswa')
@section('bread1','mahasiswa')
@section('bread2','daftar')

@section('content')
<h2>Master Data mahasiswa </h2>
    <table class="table table-striped" id="mhs-table">
        <thread>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Lengkap</th>
            <tr>
        </thead>
        <tbody></tbody>
    </table>

    <script>
          $(function () {

            var table = $('#mhs-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('mhs_list') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'nim', name: 'nim'},
                    {data: 'nama_lengkap', name: 'Nama_lengkap'},

                ]
            });

        });
    </script>
@endsection