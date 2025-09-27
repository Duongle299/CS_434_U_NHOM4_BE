<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PhieuNhapKho;


class PhieuNhapKhoController extends Controller
{
    // GET /api/phieu-nhap-kho
    public function index()
    {
        $data = PhieuNhapKho::all();
        return response()->json([
            "data"=> $data
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'ma_phieu' => 'required|unique:phieu_nhap_khos,ma_phieu',
            'nguon_xuat' => 'required|string',
            'gia_tri' => 'required|numeric',
            'thoi_gian' => 'required|date',
            'tinh_trang' => 'required|string',
        ]);

        $phieu = PhieuNhapKho::create($request->all());

        return response()->json($phieu, 201);
    }


    public function show($id)
    {
        $phieu = PhieuNhapKho::findOrFail($id);
        return response()->json($phieu);
    }


    public function update(Request $request, $id)
    {
        $phieu = PhieuNhapKho::findOrFail($id);
        $phieu->update($request->all());

        return response()->json($phieu);
    }


    public function destroy($id)
    {
        $phieu = PhieuNhapKho::findOrFail($id);
        $phieu->delete();

        return response()->json(['message' => 'Đã xoá thành công']);
    }
}
