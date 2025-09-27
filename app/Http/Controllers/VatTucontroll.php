<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThemmoiRequest;
use App\Models\Vattu;
use Illuminate\Http\Request;

class VatTucontroll extends Controller
{
    public function getdata()
    {
        $data = Vattu::all();
        return response()->json([
            'data' => $data
        ]);
    }
    public function create(ThemmoiRequest $request)
    {
        $vatTu=Vattu::create([
            'ma_vat_tu'        => $request->ma_vat_tu,
            'ten_vat_tu'        => $request->ten_vat_tu,
            'hinh_anh'           => $request->hinh_anh,
            'loai_vat_tu'        => $request->loai_vat_tu,
            'don_vi_tinh'         => $request->don_vi_tinh,
            'trong_luong'        => $request->trong_luong ,
            'so_luong_ton_kho'    => $request->so_luong_ton_kho,
            'gia_ban'             => $request->gia_ban,
            'tinh_trang'          => $request->tinh_trang,
        ]);
        return response()->json([
            'status' => true,
            'message' => 'thêm mới thành công'
        ]);

    }
    public function update(ThemmoiRequest $request)
    {
        Vattu::where('ma_vat_tu' , $request->ma_vat_tu)->update([
            'ma_vat_tu'        => $request->ma_vat_tu,
            'ten_vat_tu'        => $request->ten_vat_tu,
            'hinh_anh'           => $request->hinh_anh,
            'loai_vat_tu'        => $request->loai_vat_tu,
            'don_vi_tinh'         => $request->don_vi_tinh,
            'trong_luong'        => $request->trong_luong ,
            'so_luong_ton_kho'    => $request->so_luong_ton_kho,
            'gia_ban'             => $request->gia_ban,
            'tinh_trang'          => $request->tinh_trang,
        ]);
        return response()->json([
            'status' => true,
            'message' => 'cập nhật thành công'
        ]);

    }
    public function delete(Request $request)
    {
        Vattu::where('ma_vat_tu' , $request->ma_vat_tu)->delete();
        return response()->json([
            'status' => true,
            'message' => 'xóa thành công'
        ]);

    }
}
