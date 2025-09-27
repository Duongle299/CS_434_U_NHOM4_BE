<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemmoiRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'ma_vat_tu'       => 'required|string|max:50|unique:vattus,ma_vat_tu',
            'ten_vat_tu'      => 'required|string|max:255',
            'hinh_anh'        => 'required|string|max:255',
            'loai_vat_tu'     => 'required|string|max:100',
            'don_vi_tinh'     => 'required|string|max:50',
            'trong_luong'     => 'required|string|max:50',
            'so_luong_ton_kho'=> 'required|numeric',
            'gia_ban'         => 'required|numeric',
            'tinh_trang'      => 'required|integer|in:0,1',
            'action_at'       => 'nullable|integer',
            'id_danh_muc'     => 'nullable|string|max:50',
            'id_nhacc'        => 'nullable|string|max:50',
        ];
    }
    public function messages(): array
{
    return [
        'ma_vat_tu.required' => 'Mã vật tư là bắt buộc.',
        'ma_vat_tu.unique'   => 'Mã vật tư đã tồn tại.',
        'ma_vat_tu.string'   => 'Mã vật tư phải là chuỗi.',
        'ma_vat_tu.max'      => 'Mã vật tư không được vượt quá 50 ký tự.',

        'ten_vat_tu.required' => 'Tên vật tư là bắt buộc.',
        'ten_vat_tu.string'   => 'Tên vật tư phải là chuỗi.',
        'ten_vat_tu.max'      => 'Tên vật tư không được vượt quá 255 ký tự.',

        'hinh_anh.required' => 'Hình ảnh là bắt buộc.',
        'hinh_anh.string'   => 'Hình ảnh phải là chuỗi.',
        'hinh_anh.max'      => 'Đường dẫn hình ảnh không được vượt quá 255 ký tự.',

        'loai_vat_tu.required' => 'Loại vật tư là bắt buộc.',
        'loai_vat_tu.string'   => 'Loại vật tư phải là chuỗi.',
        'loai_vat_tu.max'      => 'Loại vật tư không được vượt quá 100 ký tự.',

        'don_vi_tinh.required' => 'Đơn vị tính là bắt buộc.',
        'don_vi_tinh.string'   => 'Đơn vị tính phải là chuỗi.',
        'don_vi_tinh.max'      => 'Đơn vị tính không được vượt quá 50 ký tự.',

        'trong_luong.required' => 'Trọng lượng là bắt buộc.',
        'trong_luong.string'   => 'Trọng lượng phải là chuỗi.',
        'trong_luong.max'      => 'Trọng lượng không được vượt quá 50 ký tự.',

        'so_luong_ton_kho.required' => 'Số lượng tồn kho là bắt buộc.',
        'so_luong_ton_kho.numeric'  => 'Số lượng tồn kho phải là số.',
        'so_luong_ton_kho.min'      => 'Số lượng tồn kho không được nhỏ hơn 0.',

        'gia_ban.required' => 'Giá bán là bắt buộc.',
        'gia_ban.numeric'  => 'Giá bán phải là số.',
        'gia_ban.min'      => 'Giá bán không được nhỏ hơn 0.',

        'tinh_trang.required' => 'Tình trạng là bắt buộc.',
        'tinh_trang.integer'  => 'Tình trạng phải là số nguyên.',
        'tinh_trang.in'       => 'Tình trạng chỉ nhận giá trị 0 hoặc 1.',

        'action_at.integer' => 'Action_at phải là số nguyên.',

        'id_danh_muc.string' => 'ID danh mục phải là chuỗi.',
        'id_danh_muc.max'    => 'ID danh mục không được vượt quá 50 ký tự.',

        'id_nhacc.string' => 'ID nhà cung cấp phải là chuỗi.',
        'id_nhacc.max'    => 'ID nhà cung cấp không được vượt quá 50 ký tự.',
    ];
}
}
