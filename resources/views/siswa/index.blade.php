<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <div>
    @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelamin</th>
                    <th>Kelas </th>
                </tr>
            </thead>
            @foreach($datasiswa as $siswa)
                <tbody>
                    <tr>
                        <td>{{$siswa->id}}</td>
                        <td>{{$siswa->foto}}</td>
                        <td>{{$siswa->nis}}</td>
                        <td>{{$siswa->nama}}</td>
                        <td>{{$siswa->kelamin}}</td>
                        <td>{{$siswa->program_keahlian}}</td>
                        <td><a href="{{route('siswa.ubah', ['datasiswa' => $siswa])}}">Ubah</a></td>
                        <td>
                            <form action="{{route('siswa.hapus', ['datasiswa' => $siswa])}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" name="" id="" value="Hapus">
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>