@extends('templates.main')

@section('root')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Pemain</th>
                <th scope="col">Nomor Punggung</th>
                <th scope="col">Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemain as $pemain)
                <tr>
                    <th scope="row">{{ $nomor }}</th>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->no_punggung }}</td>
                    <td>{{ $pemain->posisi }}</td>
                </tr>
                @php
                    $nomor++
                @endphp
            @endforeach
        </tbody>
    </table>
@endsection