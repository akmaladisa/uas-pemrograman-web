<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengembalianBukuTable extends Migration
{
    public function up()
    {
        Schema::create('pengembalian_buku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('peminjaman_id')->constrained('peminjaman_buku')->onDelete('cascade');
            $table->date('tanggal_kembali');
            $table->decimal('denda', 8, 2)->nullable(); // Denda bisa bernilai null
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengembalian_buku');
    }
}
