<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vattus', function (Blueprint $table) {
            $table->id();
            $table->string('ma_vat_tu')->unique();
            $table->string('ten_vat_tu')->nullable();
            $table->string('hinh_anh')->nullable();
            $table->string('loai_vat_tu')->nullable();
            $table->string('don_vi_tinh')->nullable();
            $table->string('trong_luong')->nullable();
            $table->string('so_luong_ton_kho')->nullable();
            $table->string('gia_ban')->nullable();
            $table->integer('tinh_trang')->nullable();
            $table->integer('action_at')->nullable();
            $table->string('id_danh_muc')->nullable();
            $table->string('id_nhacc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vattus');
    }
};
