<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrasiTable extends Migration
{
    public function up()
    {
        Schema::create('registrasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('religion_id');
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('email');
            $table->string('handphone');
            $table->date('tanggal_lahir'); // Menggunakan tipe data 'date'
            $table->string('password');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->text('biografi')->nullable();
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('religion_id')->references('id')->on('religions')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('registrasi');
    }
}
