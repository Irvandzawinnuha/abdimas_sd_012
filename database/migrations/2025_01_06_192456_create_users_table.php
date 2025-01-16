<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Jalankan migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 100); // Nama depan
            $table->string('last_name', 100);  // Nama belakang
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('gender', ['Laki-Laki', 'Perempuan']); // Jenis kelamin
            $table->boolean('is_active')->default(false); // Tambahkan kolom is_active
            $table->string('verification_token')->nullable(); // Tambahkan kolom verification_token
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Balikkan migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
