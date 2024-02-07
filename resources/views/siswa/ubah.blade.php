<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <h1>Ubah Data</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('siswa.perbarui', ['datasiswa' => $siswa])}}" >
        @csrf
        @method('put')
        <div>
            <label for="foto">Foto:</label>
            <input type="text" name="foto" placeholder="URL-Foto" id="Foto" value="{{$siswa->foto}}">
        </div>
        <div>
            <label for="NIS">NIS:</label>
            <input type="number" name="NIS" placeholder="NIS" id="NIS" value="{{$siswa->nis}}">
        </div>
        <div>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" placeholder="Nama" id="nama" value="{{$siswa->nama}}">
        </div>
        <div>
            <label for="kelamin">Kelamin:</label>
            <input type="text" name="kelamin" placeholder="Jenis-kelamin" id="kelamin" value="{{$siswa->kelamin}}">
        </div>
        <div>
            <label for="program_keahlian">Program Keahlian:</label>
            <input type="text" name="program_keahlian" placeholder="Progran Keahlian" 
            id="program_keahlian" value="{{$siswa->program_keahlian}}">
        </div>
        <div>
            <input type="submit" value="Ubah Data">
        </div>
    </form>
</body>
</html>