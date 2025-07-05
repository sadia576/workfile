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
             Schema::create('carts', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->string('package_name');
        $table->decimal('price', 8, 2);
        $table->integer('quantity')->default(1);
        $table->string('country');
        $table->timestamps();
    });
    }

    public function down()
    {
        
    }

    }

};
