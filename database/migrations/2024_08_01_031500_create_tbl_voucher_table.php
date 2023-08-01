<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_vouchers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('voucher_type_id');
            $table->unsignedBigInteger('voucher_owner_id');
            $table->unsignedBigInteger('attachment_id');
            $table->timestamp('date_received')->nullable();
            $table->timestamp('date_sent')->nullable();
            $table->integer('status')->default(0);

            $table->foreign('attachment_id')->references('id')->on('tbl_attachments')->onDelete('cascade');
            $table->foreign('voucher_owner_id')->references('id')->on('tbl_voucher_owner')->onDelete('cascade');
            $table->foreign('voucher_type_id')->references('id')->on('voucher_type')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_voucher');
    }
};
