<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameIdColumnInCateggTable extends Migration
{
    public function up()
    {
        Schema::table('categg', function (Blueprint $table) {
        });
    }

    public function down()
    {
    }
}
