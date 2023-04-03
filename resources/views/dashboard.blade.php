<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />  
  <title>Dashboard TraspacApp</title>
</head>
<body>
    <div class="bg-[#F5F5F5] h-screen">
            <div class="flex">
                @include('components.sidebar')
                <div class="grow w-full py-10 ml-[340px] pr-16">
                    <div class="fixed">
                        <h1 class="font-semibold text-xl text-[#1F2D36]">Dashboard Pegawai</h1>
                        <hr class="my-6 shadow-md">
                    </div>
                    <div class="overflow-auto mt-20">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        // $(document).ready(function() {
        //     var $table = $('#table').DataTable({
        //         processing: true,
        //         serverSide: true,
        //         ajax: {
        //             url: "{{ route('home') }}",
        //             data: function(d) {
        //                 d.work = $('#workUnit').val(),
        //                 d.search = $('input[type="search"]').val()
        //             }
        //         },
        //         columns: [
        //             {data: 'nama', name: 'nama'},
        //             {data: 'nama_jabatan', name: 'nama_jabatan'},
        //             {data: 'kode_golongan', name: 'kode_golongan'},
        //             {data: 'unit_kerja', name: 'unit_kerja'},
        //             {
        //                 data: 'actions', 
        //                 name: 'actions', 
        //                 orderable: true, 
        //                 searchable: true
        //             }
        //         ]
        //      });

        //      $('#workUnit').change(function () {
        //         table.draw();
        //     });
        // });
    
        const searchBar = document.getElementById('search-bar');
        searchBar.addEventListener('input', function(event) {
            const filter = event.target.value.toUpperCase();
            const table = document.getElementById('tabel-data');
            const rows = table.getElementsByTagName('tr');
            for (let i = 0; i < rows.length; i++) {
            if (i === 0) {
                continue;
            }
            const cells = rows[i].getElementsByTagName('td');
            let found = false;
            for (let j = 0; j < cells.length && !found; j++) {
                const cellText = cells[j].textContent.toUpperCase();
                if (cellText.indexOf(filter) > -1) {
                found = true;
                }
            }
            if (found) {
                rows[i].style.display = '';
            } else {
                rows[i].style.display = 'none';
             }
            }
        });
    </script>
</body>
</html>