<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PhieuNhapKho;

class PhieuNhapKhoSeeder extends Seeder
{
    public function run()
    {
        PhieuNhapKho::insert([
            [
                'ma_phieu' => 'PNK001',
                'nguon_xuat' => 'Nhà cung cấp A',
                'gia_tri' => 50000000,
                'thoi_gian' => '2025-09-01 15:30:00',
                'tinh_trang' => 'Chờ duyệt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_phieu' => 'PNK002',
                'nguon_xuat' => 'Nhà cung cấp B',
                'gia_tri' => 40000000,
                'thoi_gian' => '2025-09-03 09:30:00',
                'tinh_trang' => 'Đã duyệt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_phieu' => 'PNK003',
                'nguon_xuat' => 'Nhà cung cấp C',
                'gia_tri' => 50000000,
                'thoi_gian' => '2025-09-04 08:30:00',
                'tinh_trang' => 'Từ chối',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
