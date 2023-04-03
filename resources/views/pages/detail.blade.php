@extends('dashboard')

@section('content')

<section>
    
<table class="table p-4 bg-white rounded-lg shadow">
    {{-- <div class="grid grid-cols-3">
        <div class="">
            <h1 class="font-bold text-xl">Foto Profil</h1>    
        </div>
        <div class="col-span-2">
            <img src="{{ url("asset/img/{$employees->image}") }}" class="rounded-lg w-2/3" alt="">
        </div>
    </div> --}}
    <div class="grid  grid-cols-3 mt-5">
        <div>
            <h1 class="font-bold text-xl my-2">Nama</h1>    
            <h1 class="font-bold text-xl my-2">NIP</h1>    
            <h1 class="font-bold text-xl my-2">Tempat Lahir</h1>    
            <h1 class="font-bold text-xl my-2">Alamat</h1>    
            <h1 class="font-bold text-xl my-2">Tanggal Lahir</h1>    
            <h1 class="font-bold text-xl my-2">L/P</h1>    
            <h1 class="font-bold text-xl my-2">Golongan</h1>    
            <h1 class="font-bold text-xl my-2">Eselon</h1>    
            <h1 class="font-bold text-xl my-2">Jabatan</h1>    
            <h1 class="font-bold text-xl my-2">Tempat Tugas</h1>    
            <h1 class="font-bold text-xl my-2">Agama</h1>    
            <h1 class="font-bold text-xl my-2">Unit Kerja</h1>    
            <h1 class="font-bold text-xl my-2">No. HP</h1>    
            <h1 class="font-bold text-xl my-2">NPWP</h1>    
        </div>
        <div>
            <h1 class="font-semibold text-xl my-2">{{ $employees->nama }}</h1>    
            <h1 class="font-semibold text-xl my-2">{{ $employees->nip }}</h1>    
            <h1 class="font-semibold text-xl my-2">{{ $employees->tempat_lahir }}</h1>    
            <h1 class="font-semibold text-xl my-2">{{ $employees->alamat }}</h1>    
            <h1 class="font-semibold text-xl my-2">{{ $employees->tanggal_lahir }}</h1>    
            <h1 class="font-semibold text-xl my-2">{{ $employees->jenis_kelamin }}</h1>    
            <h1 class="font-semibold text-xl my-2">{{ $employees->position_class->kode_golongan }}</h1>    
            <h1 class="font-semibold text-xl my-2">{{ $employees->eselon }}</h1>    
            <h1 class="font-semibold text-xl my-2">{{ $employees->position->nama_jabatan }}</h1>    
            <h1 class="font-semibold text-xl my-2">{{ $employees->work_unit->alamat }}</h1>    
            <h1 class="font-semibold text-xl my-2">{{ $employees->agama }}</h1>    
            <h1 class="font-semibold text-xl my-2">{{ $employees->work_unit->unit_kerja }}</h1>    
            <h1 class="font-semibold text-xl my-2">{{ $employees->no_telp }}</h1>    
            <h1 class="font-semibold text-xl my-2">{{ $employees->npwp }}</h1>    
        </div>
        <div>
            <img src="{{ url("asset/img/{$employees->image}") }}" class="rounded-lg w-2/3" alt="">
        </div>
    </div>
</table>
</section>

@endsection