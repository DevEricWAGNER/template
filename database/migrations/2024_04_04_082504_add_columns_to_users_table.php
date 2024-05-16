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
        Schema::table('users', function (Blueprint $table) {
            $table->string('login');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('civilite');
            $table->boolean('superadmin');
            $table->boolean('activ');
            $table->foreignId('role_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('login');
            $table->dropColumn('firstname');
            $table->dropColumn('lastname');
            $table->dropColumn('civilite');
            $table->dropColumn('superadmin');
            $table->dropColumn('activ');
            $table->dropForeign(['role_id']);
        });
    }
};
