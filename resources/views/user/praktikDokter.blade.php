{{-- Nanti taro codingan home user di sini --}}
@extends('templates/appUser')
@section('title', 'Praktik Dokter | Apotek Firdan Farma')
@section('subtitle', 'Praktik Dokter')
@section('content')
<!-- Content Row -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Dokter</th>
            <th scope="col">Hari</th>
            <th scope="col">Jam Praktik</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Dokter 1</td>
            <td>Senin - Rabu </td>
            <td>07.00 - 10.00 WIB</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Dokter 2</td>
            <td>Kamis - Jum'at</td>
            <td>07.00 - 10.00 WIB</td>
          </tr>
        </tbody>
      </table>
</body>
</html>
@stop