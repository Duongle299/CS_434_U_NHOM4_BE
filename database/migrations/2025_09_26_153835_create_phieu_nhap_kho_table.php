<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhieuNhapKhoTable extends Migration
{
    public function up()
    {
        Schema::create('phieu_nhap_kho', function (Blueprint $table) {
            $table->id();
            $table->string('ma_phieu')->unique();
            $table->string('nguon_xuat');
            $table->bigInteger('gia_tri');
            $table->timestamp('thoi_gian');
            $table->enum('tinh_trang', ['Chờ duyệt', 'Đã duyệt', 'Từ chối']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('phieu_nhap_kho');
    }
}
