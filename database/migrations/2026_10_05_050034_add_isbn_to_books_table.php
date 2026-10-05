<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::table('books', function (Blueprint $table) {
        $table->string('isbn')->nullable();
    });

    DB::table('books')->whereNull('isbn')->update([
        'isbn' => '9780000000001'
    ]);

    DB::table('books')->where('id', 2)->update([
        'isbn' => '9780000000002'
    ]);

    Schema::table('books', function (Blueprint $table) {
        $table->string('isbn')->nullable(false)->change();
        $table->unique('isbn');
    });
}
};
