<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 128);
            $table->text('content');
            $table->string('image', 256);
            $table->enum('category', ['Kegiatan', 'Pelatihan Website', 'Pelatihan Mobile', 'Pelatihan IOT', 'Pelatihan Games', 'Info Teknologi', 'Berita', 'lainnya']);
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
        Schema::dropIfExists('articles');
    }
}
