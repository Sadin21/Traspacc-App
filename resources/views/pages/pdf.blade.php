<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body style="padding: 20px">

<h2>Data Table</h2>

<table>
  <tr>
    <th>NIP</th>
    <th>Nama</th>
    <th>Tempat Lahir</th>
    <th>Alamat</th>
    <th>Tgl Lahir</th>
    <th>L/P</th>
    <th>Gol</th>
    <th>Eselon</th>
    <th>Jabatan</th>
    <th>Tempat Tugas</th>
    <th>Agama</th>
    <th>Unit Kerja</th>
    <th>No. HP</th>
    <th>NPWP</th>
  </tr>
  @foreach ($employees as $e)
  <tr>
        <td>{{ $e->nip }}</td>
        <td>{{ $e->nama }}</td>
        <td>{{ $e->tempat_lahir }}</td>      
        <td>{{ $e->alamat }}</td>
        <td>{{ $e->tanggal_lahir }}</td>      
        <td>{{ $e->jenis_kelamin }}</td>      
        @foreach ($e->position_class()->get() as $ps)
            <td>{{ $ps->kode_golongan }}</td>
        @endforeach
        <td>{{ $e->eselon }}</td>
        @foreach ($e->position()->get() as $p)
            <td>{{ $p->nama_jabatan }}</td>
        @endforeach
        @foreach ($e->work_unit()->get() as $w)
            <td>{{ $w->alamat }}</td>
        @endforeach
        <td>{{ $e->agama }}</td>
        @foreach ($e->work_unit()->get() as $w)
            <td>{{ $w->unit_kerja }}</td>
        @endforeach      
        <td>{{ $e->no_telp }}</td>
        <td>{{ $e->npwp }}</td>
    </tr>
    @endforeach
</table>

</body>
</html>