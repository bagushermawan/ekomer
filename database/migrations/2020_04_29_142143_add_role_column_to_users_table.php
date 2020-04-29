<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleColumnToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //TAMBAHKAN KOLOM ROLE DENGAN TIPE ENUM DAN MEMILIKI BEBERAPA PILIHAN ROLE
            $table->enum('role',  ['user', 'admin'])->default('user')->after('password');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
}
