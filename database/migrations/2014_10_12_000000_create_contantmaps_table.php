
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
        Schema::create('contantmaps', function (Blueprint $table) {
            $table->id();
            $table->string('mapUrl')->nullable();
            $table->string('adressTitle')->nullable();
            $table->string('adressSubtitle1')->nullable();
            $table->string('adressSubtitle2')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contantmaps');
    }
};

