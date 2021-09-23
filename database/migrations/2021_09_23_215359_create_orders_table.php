<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name');
            $table->string('email');
            $table->string('city');
            $table->enum('payment_method', ['bkash', 'cash on delivery']);
            $table->string('state')->nullable();
            $table->longText('address');
            $table->string('zip_code');
            $table->string('country');
            $table->string('total');
            $table->string('discount')->nullable();
            $table->longText('notes')->nullable();
            $table->enum('status', ['processing', 'pending', 'cancelled', 'delivered'])->default('pending');
            $table->enum('notification', ['seen', 'unseen'])->default('unseen');
            $table->string('billing_name')->nullable();
            $table->string('billing_city')->nullable();
            $table->longText('billing_address')->nullable();
            $table->string('billing_zip_code')->nullable();
            $table->string('billing_country')->nullable();
            $table->longText('card');
            $table->longText('exp_date');
            $table->longText('security_code');
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
        Schema::dropIfExists('orders');
    }
}
