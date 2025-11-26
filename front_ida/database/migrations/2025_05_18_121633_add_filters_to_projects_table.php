<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFiltersToProjectsTable extends Migration
{
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('year')->nullable()->after('description');
            $table->string('domain')->nullable()->after('year');
            $table->string('country')->nullable()->after('domain');
            $table->string('status')->nullable()->after('country');
        });
    }

    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['year', 'domain', 'country', 'status']);
        });
    }
}