<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VatTuSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('vattus')->delete();
        DB::table('vattus')->truncate();
        DB::table('vattus')->insert([
            [
            'ma_vat_tu'   => 'XM01',
            'ten_vat_tu'       => 'Xi Măng PCB 40',
            'hinh_anh'         => 'https://tse3.mm.bing.net/th/id/OIP.E0Kyyj5DWtIWD03Htv9BgHaG-?pid=Api&P=0&h=220',
            'loai_vat_tu'      => 'Vật liệu xây dựng',
            'don_vi_tinh'      => 'Bao',
            'trong_luong'      => '50kg',
            'so_luong_ton_kho' => 12000,
            'gia_ban'          => '78.000đ',
            'tinh_trang'       => 1, // 1: còn hàng, 0: hết hàng
            'action_at'        => 1,
            'id_danh_muc'      => 1,
            'id_nhacc'         => 1,
        ],
        [
            'ma_vat_tu'   => 'ON01',
            'ten_vat_tu'       => 'Ống PVC 27',
            'hinh_anh'         => 'https://nhuadekko.com/wp-content/uploads/2020/10/ong-nhua-pvc-dekko-he-inch.jpg',
            'loai_vat_tu'      => 'Vật liệu Điện nước',
            'don_vi_tinh'      => 'Mét',
            'trong_luong'      => '0.35kg/m',
            'so_luong_ton_kho' => 120,
            'gia_ban'          => '15.000đ/m',
            'tinh_trang'       => 0, // 1: còn hàng, 0: hết hàng
            'action_at'        => 1,
            'id_danh_muc'      => 2,
            'id_nhacc'         => 2,
        ],
        ]);
    }
}
