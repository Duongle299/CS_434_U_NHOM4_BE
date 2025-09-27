<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vattu extends Model
{
    protected $table = 'vattus';
    protected $fillable = [
        'ma_vat_tu',
        'ten_vat_tu',
        'hinh_anh',
        'loai_vat_tu',
        'don_vi_tinh',
        'trong_luong',
        'so_luong_ton_kho',
        'gia_ban',
        'tinh_trang',
        'action_at',
        'id_danh_muc',
        'id_nhacc',
    ];
}
