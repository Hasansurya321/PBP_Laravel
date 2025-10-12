<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $t) {
            if (!Schema::hasColumn('orders','user_id')) {
                // versi dengan FK (disarankan). Jika DB-mu error FK, lihat "Alternatif" di bawah.
                $t->foreignId('user_id')->after('id')->constrained()->cascadeOnDelete();
            }
        });
    }

    public function down(): void
    {
        Schema::table('orders', function (Blueprint $t) {
            if (Schema::hasColumn('orders','user_id')) {
                try { $t->dropForeign(['user_id']); } catch (\Throwable $e) {}
                $t->dropColumn('user_id');
            }
        });
    }
};
