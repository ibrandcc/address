<?php

/*
 * This file is part of ibrand/address.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateElAddressesTestTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('el_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('accept_name');
            $table->string('mobile');
            $table->integer('province');
            $table->integer('city');
            $table->integer('area');
            $table->string('address_name');
            $table->string('address');
            $table->tinyInteger('is_default')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('el_addresses');
    }
}
