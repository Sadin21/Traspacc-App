@extends('dashboard')

@section('content')
    <section class="bg-gray-100/50">
        <form method="POST" action="{{ route('store') }}" class="container w-full mx-auto shadow-md" enctype="multipart/form-data">
            @csrf
            <div class="px-4 rounded-lg">
                <div class="max-w-sm mx-auto md:w-full md:mx-0">
                    <div class="inline-flex items-center space-x-4">
                        <h1 class="text-gray-600">
                            Create Data
                        </h1>
                    </div>
                </div>
                <div class="grid grid-cols-2 py-8">
                    <div class="w-11/12">
                        <h1 class="py-3">Profil Pegawai</h1>
                        <input name="image" id="image" type="file" class="rounded-lg border-1 flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Jane">
                        @error('image')
                        <div class="bg-red-200 border-red-600 text-red-600 border-l-4 p-4" role="alert">
                            <p>
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    <div class="w-11/12">
                        <h1 class="py-3">Pegawai</h1>
                        <input name="nama" id="nama" type="text" class="rounded-lg border-1 flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Jane">
                        @error('nama')
                        <div class="bg-red-200 border-red-600 text-red-600 border-l-4 p-4" role="alert">
                            <p>
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    <div class="w-11/12">
                        <h1 class="py-3">NIP</h1>
                        <input name="nip" id="nip" type="number" class="rounded-lg border-1 flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Jane">
                        @error('nip')
                        <div class="bg-red-200 border-red-600 text-red-600 border-l-4 p-4" role="alert">
                            <p>
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    <div class="w-11/12">
                        <h1 class="py-3">Nomor Telepon</h1>
                        <input type="number" name="no_telp" id="nama" class="rounded-lg border-1 flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Nomor Telepon"/>
                        @error('no_telp')
                        <div class="bg-red-200 border-red-600 text-red-600 border-l-4 p-4" role="alert">
                            <p>
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    <div class="w-11/12">
                        <h1 class="py-3">Tempat Lahir</h1>
                        <input type="text" name="tempat_lahir" id="nama" class="rounded-lg border-1 flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Tempat Lahir"/>
                        @error('tempat_lahir')
                        <div class="bg-red-200 border-red-600 text-red-600 border-l-4 p-4" role="alert">
                            <p>
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    <div class="w-11/12">
                        <h1 class="py-3">Tanggal Lahir</h1>
                        <input type="date" name="tanggal_lahir" id="nama" class="rounded-lg border-1 flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="tanggal Lahir"/>
                        @error('tanggal_lahir')
                        <div class="bg-red-200 border-red-600 text-red-600 border-l-4 p-4" role="alert">
                            <p>
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    <div class="w-11/12">
                        <h1 class="py-3">Agama</h1>
                        <input type="text" name="agama" id="nama" class="rounded-lg border-1 flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Agama"/>
                        @error('agama')
                        <div class="bg-red-200 border-red-600 text-red-600 border-l-4 p-4" role="alert">
                            <p>
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    <div class="w-11/12">
                        <h1 class="py-3">Jenis Kelamin</h1>
                        <div class="flex mt-3">
                            <div class="flex items-center mr-4">
                                <input id="inline-radio" type="radio" value="L" name="jenis_kelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-radio" class="ml-2 text-sm font-medium text-gray-700">Laki Laki</label>
                            </div>
                            <div class="flex items-center mr-4">
                                <input id="inline-2-radio" type="radio" value="P" name="jenis_kelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-2-radio" class="ml-2 text-sm font-medium text-gray-700">Perempuan</label>
                            </div>
                        </div>

                        @error('jenis_kelamin')
                        <div class="bg-red-200 border-red-600 text-red-600 border-l-4 p-4" role="alert">
                            <p>
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    <div class="w-11/12">
                        <h1 class="py-3">NPWP</h1>
                        <input type="number" name="npwp" id="nama" class="rounded-lg border-1 flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="NPWP"/>
                        @error('npwp')
                        <div class="bg-red-200 border-red-600 text-red-600 border-l-4 p-4" role="alert">
                            <p>
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    <div class="w-11/12">
                        <h1 class="py-3">Eselon</h1>
                        <input type="text" name="eselon" id="eselon" class="rounded-lg border-1 flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="eselon"/>
                        @error('eselon')
                        <div class="bg-red-200 border-red-600 text-red-600 border-l-4 p-4" role="alert">
                            <p>
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                    <div class="w-11/12">
                        <h1 class="py-3">Jabatan</h1>
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <div class="relative">
                              <select class="rounded-lg border-1 flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" name="id_position" id="id_position">
                                <option value="">Pilih Jabatan</option>
                                @foreach ($positions as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama_jabatan }}</option>
                                @endforeach
                              </select>
                              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                              </div>
                            </div>
                            @error('id_position')
                            <div class="bg-red-200 border-red-600 text-red-600 border-l-4 p-4" role="alert">
                                <p>
                                    {{ $message }}
                                </p>
                            </div>
                            @enderror   
                          </div>
                    </div>
                    <div class="w-11/12">
                        <h1 class="py-3">Golongan</h1>
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <div class="relative">
                              <select class="rounded-lg border-1 flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" name="id_position_class" id="id_position_class">
                                @foreach ($position_classes as $ps)
                                    <option value="{{ $ps->id }}">{{ $ps->kode_golongan }}</option>
                                @endforeach
                              </select>
                              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                              </div>
                            </div>
                            @error('id_position_class')
                            <div class="bg-red-200 border-red-600 text-red-600 border-l-4 p-4" role="alert">
                                <p>
                                    {{ $message }}
                                </p>
                            </div>
                            @enderror
                          </div>
                    </div>
                    <div class="w-11/12">
                        <h1 class="py-3">Unit Kerja</h1>
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <div class="relative">
                              <select class="rounded-lg border-1 flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" name="id_work_unit" id="id_work_unit">
                                <@foreach ($work_units as $w)
                                    <option value="{{ $w->id }}">{{ $w->unit_kerja }}</option>
                                    {{-- <option value="{{ $w->id }}" {{ old('id') == $w->id ? 'selected' : '' }}>{{ $w->unit_kerja }}</option> --}}
                                @endforeach
                              </select>
                              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                              </div>
                            </div>
                            @error('id_work_unit')
                            <div class="bg-red-200 border-red-600 text-red-600 border-l-4 p-4" role="alert">
                                <p>
                                    {{ $message }}
                                </p>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="w-11/12">
                        <h1 class="py-3">Alamat</h1>
                        <input type="text" name="alamat" id="nama" class="rounded-lg border-1 flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Alamat"/>
                        @error('alamat')
                        <div class="bg-red-200 border-red-600 text-red-600 border-l-4 p-4" role="alert">
                            <p>
                                {{ $message }}
                            </p>
                        </div>
                        @enderror
                    </div>
                </div>
                <button href="{{ route('store') }}" type="submit" class="py-2 px-2 flex justify-center items-center w-24 bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-red-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg gap-3">
                    Submit
                </button>
            </div>
        </form>
    </section>
@endsection