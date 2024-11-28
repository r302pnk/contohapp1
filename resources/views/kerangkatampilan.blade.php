<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Aplikasi Mahasiswa</title>
    </head>
    <body>
        <table width="100%"  >
            <tr>
                <td style="width:200px">
                    Menu  {{ session("admin")->nik }} {{ session("admin")->nama }}
                    <ul>
                        <li><a href="{{ url('/mahasiswa')}}">Mahasiswa</a></li>
                        <li><a href="{{ url('/matakuliah') }}">Matakuliah</a></li>
                        <li><a href="{{ url('/nilai') }}">Nilai Matakuliah</a></li>
                        <li><a href="{{ url('/logout') }}">Keluar</a></li>


                    </ul>
                </td>
                <td>
                    @yield('konten')
                </td>
            </tr>
        </table>
    </body>
</html>


