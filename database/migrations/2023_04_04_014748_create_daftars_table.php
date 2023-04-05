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
        Schema::create('daftars', function (Blueprint $table) {

            $table->text('nama_lengkap');

            $table->string('jk');

            $table->string('ttl');

            $table->text('agama');

            $table->text('cita_cita');

            $table->text('hobi');

            $table->string('anak_ke');

            $table->string('jumlah_saudara');

            $table->string('tinggi_badan');

            $table->string('berat_badan');

            $table->string('golongan_darah');

            $table->timestamp('');

        });

    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftars');
    }
};
