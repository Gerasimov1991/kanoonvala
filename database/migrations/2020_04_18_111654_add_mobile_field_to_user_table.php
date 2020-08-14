<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMobileFieldToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('mobile','50');
            $table->string('city','50');
            $table->string('state','50');
            $table->string('postal_code','50');
            $table->string('license_image','255');
            $table->string('profile_image','255');
            $table->text('address');
            $table->text('specialization');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('mobile');
            $table->dropColumn('city');
            $table->dropColumn('state');
            $table->dropColumn('postal_code');
            $table->dropColumn('address');
            $table->dropColumn('specialization');
            $table->dropColumn('license_image');
            $table->dropColumn('profile_image');
        });
    }
}
