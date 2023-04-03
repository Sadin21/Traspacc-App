@extends('dashboard')

@section('content')


<div class="container w-full px-4 mx-auto sm:px-8">
    <div class="py-8">
        <a href="{{ route('create') }}" type="button" class="py-2 mb-6 px-20 flex justify-center items-center w-2 bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-red-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg gap-3">
            Create
        </a>
        <div class="flex w-full justify-end">
            <div class="flex gap-4">
                <a href="{{ route('pdf') }}" class="bg-blue-600 py-2 px-4 text-white font-semibold rounded-lg">Download as PDF</a>
                <form action="{{ route('home') }}" method="GET">
                    <select class="rounded-lg border-1 flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" name="unit_kerja" id="unit_kerja" onchange="this.form.submit()">
                        <option value="">Pilih Unit Kerja</option>
                        @foreach ($workunit as $w)
                            <option value="{{ $w->id }}">{{ $w->unit_kerja }}</option>
                        @endforeach
                      </select>
                </form>
                <div class=" relative ">
                    <input type="text" id="search-bar" name="keyword" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="Search Nama Pegawai"/>
                </div>
            </div>
        </div>
        <div class="px-4 py-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
            <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                <table class="min-w-full leading-normal" id="tabel-data">
                    <thead class="my-10">
                        <tr>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Pegawai
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Jabatan
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Golongan
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Unit Kerja
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($employees as $e)
                            <tr>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <div class="flex items-center">
                                        <div class="ml-3 flex gap-3 items-center">
                                            <div class="ml-3">
                                                <div class="w-10 h-10 flex justify-center items-center text-white text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg ">
                                                    <img src="{{ url("asset/img/{$e->image}") }}" class="rounded-lg" alt="">
                                                    
                                                </div>
                                            </div>
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $e->nama }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    @foreach ($e->position()->get() as $p)
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $p->nama_jabatan }}
                                        </p>
                                    @endforeach
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    @foreach ($e->position_class()->get() as $ps)
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $ps->kode_golongan }}
                                        </p>
                                    @endforeach
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    @foreach ($e->work_unit()->get() as $w)
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $w->unit_kerja }}
                                    </p>
                                    @endforeach
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <form onsubmit="return confirm('Apakah anda yakin?')" action="{{ route('destroy', $e->id) }}" class="flex gap-3" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('edit', $e->id) }}" class="w-10 h-10 bg-blue-600 flex justify-center items-center text-white text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg ">
                                            <svg fill="none" width="20" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"></path>
                                              </svg>
                                        </a>
                                        <button class="w-10 h-10 flex bg-red-500 justify-center items-center text-white text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg ">
                                            <svg fill="none" width="20" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                              </svg>
                                        </button>
                                        <a href="{{ route('detail', $e->id) }}" class="w-10 h-10 flex bg-orange-500 justify-center items-center text-white text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg ">
                                            <svg fill="none" width="20" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                              </svg>
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-10 bg-grey-700">
                                    Data Kosong
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



@endsection