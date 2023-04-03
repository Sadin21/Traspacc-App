<?php

namespace App\Http\Controllers;

use App\Models\WorkUnit;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class WorkUnitController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = WorkUnit::select('*')->join('employees', 'employees.id_work_unit', '=', 'work_units.id');
            return Datatables::of($data)->addIndexColumn()->addColumn('status', function ($row) {
                if ($row->status) {
                    $status = '<span class="badge badge-success">Active</span>';
                } else {
                    $status = '<span class="badge badge-danger">Inactive</span>';
                }
            })
            ->filter(function ($instance) use ($request) {
                if ($request->get('status') == '0' || $request->get('status') == '1') {
                    $instance->where('status', $request->get('status'));
                }
            })
            ->make(true);
        }

        return view('pages.home');
    }
}
