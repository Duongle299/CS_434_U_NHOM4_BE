<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class phieunhapkho extends Model
{
    protected $table = 'phieu_nhap_kho';  //

    protected $fillable = [
        'ma_phieu',
        'nguon_xuat',
        'gia_tri',
        'thoi_gian',
        'tinh_trang',
    ];
}
