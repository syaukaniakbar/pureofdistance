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
        Schema::table('payments', function (Blueprint $table) {
            $table->string('qr_token')->nullable()->unique()->after('expired_at');
            $table->timestamp('pending_email_sent_at')->nullable()->after('qr_token');
            $table->timestamp('success_email_sent_at')->nullable()->after('pending_email_sent_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn(['qr_token', 'pending_email_sent_at', 'success_email_sent_at']);
        });
    }
};
