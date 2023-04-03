<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Position;
use App\Models\PositionClass;
use App\Models\WorkUnit;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Dompdf\Dompdf;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $workunit = WorkUnit::all();
        $employees = Employee::query();
        if ($request->filled('unit_kerja')) {
            $employees->where('id_work_unit', $request->unit_kerja);
        }
        $employees = $employees->get();
        return view('pages.home', compact('workunit', 'employees'));
    }

    public function detail($id)
    {
        $employees = Employee::with('position', 'position_class', 'work_unit')->where('id', $id)->first();
        return view('pages.detail', compact('employees'));
    }

    public function createPDF(Request $request)
    {
        $employees = Employee::all();
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('pages.pdf', compact('employees')));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        return $dompdf->stream('laporan.pdf');
        // return ('pages.pdf', compact('employees'));
    }

    public function create()
    {
        $employees = Employee::with('position', 'position_class', 'work_unit')->get();
        $positions = Position::all();
        $position_classes = PositionClass::all();
        $work_units = WorkUnit::all();
        return view('pages.create', compact('employees', 'positions', 'position_classes', 'work_units'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:3|max:255',
            'nip' => 'required|max:18',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alamat' => 'required|min:3|max:255',
            'no_telp' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'npwp' => 'required',
            'eselon' => 'required',
            'id_position' => 'required|exists:positions,id',
            'id_position_class' => 'required|exists:position_classes,id',
            'id_work_unit' => 'required|exists:work_units,id',
        ]);

        $image = $request->file('image');
        $nameImage = $image->hashName();
        $image->move(public_path('asset/img'), $nameImage);


        Employee::create([
            'nama' => $request->nama,
            'image' => $nameImage,
            'nip' => $request->nip,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'eselon' => $request->eselon,
            'npwp' => $request->npwp,
            'id_position' => $request->id_position,
            'id_position_class' => $request->id_position_class,
            'id_work_unit' => $request->id_work_unit,
        ]);

        return redirect()->route('home')->with(['success' => 'Data berhasil ditambahkan']);
    }

    public function edit($id)
    {
        $employees = Employee::findOrFail($id);
        $positions = Position::all();
        $position_classes = PositionClass::all();
        $work_units = WorkUnit::all();
        return view('pages.edit', compact('employees', 'positions', 'position_classes', 'work_units'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|min:3|max:255',
            'nip' => 'required|max:18',
            'alamat' => 'required|min:3|max:255',
            'no_telp' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'eselon' => 'required',
            'npwp' => 'required',
            'id_position' => 'required|exists:positions,id',
            'id_position_class' => 'required|exists:position_classes,id',
            'id_work_unit' => 'required|exists:work_units,id',
        ]);

        $employees = Employee::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $nameImage = $image->hashName();
            $image->move(public_path('asset/img'), $nameImage);

            $employees->update([
                'nama' => $request->nama,
                'image' => $nameImage,
                'nip' => $request->nip,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'agama' => $request->agama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'eselon' => $request->eselon,
                'npwp' => $request->npwp,
                'id_position' => $request->id_position,
                'id_position_class' => $request->id_position_class,
                'id_work_unit' => $request->id_work_unit,
            ]);
        } else {
            $employees->update([
                'nama' => $request->nama,
                'nip' => $request->nip,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'agama' => $request->agama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'eselon' => $request->eselon,
                'npwp' => $request->npwp,
                'id_position' => $request->id_position,
                'id_position_class' => $request->id_position_class,
                'id_work_unit' => $request->id_work_unit,
            ]);
        }

        return redirect()->route('home')->with(['success' => 'Data berhasil diubah']);
    }

    public function destroy($id)
    {
        $employees = Employee::findOrFail($id);
        Storage::delete('public/asset/img', $employees->image);
        $employees->delete();
        return redirect()->route('home')->with(['success' => 'Data berhasil dihapus']);
    }
}
