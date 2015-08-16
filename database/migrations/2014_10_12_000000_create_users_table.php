<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->longText('data');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('f_govt');
            $table->integer('f_ngo');
            $table->integer('f_hill');
            $table->integer('f_campaign');

            $table->integer('e_policy');
            $table->integer('e_tech');
            $table->integer('e_comms');
            $table->integer('e_research');
            $table->integer('e_design');

            $table->integer('l_spanish');
            $table->integer('l_french');
            $table->integer('l_mandarin');
            $table->integer('l_cantonese');
            $table->integer('l_arabic');
            $table->integer('l_japanese');
            $table->integer('l_other');

            $table->integer('p_javascript');
            $table->integer('p_msoffice');
            $table->integer('p_salesforce');
            $table->integer('p_ngpvan');
            $table->integer('p_lexisnexis');
            $table->integer('p_python');
            $table->integer('p_stata');
            $table->integer('p_r');
            $table->integer('p_sas');
            $table->integer('p_sql');
            $table->integer('p_spss');
            $table->integer('p_gis');
            $table->integer('p_hadoop');
            $table->integer('p_ruby');
            $table->integer('p_perl');
            $table->integer('p_html');
            $table->integer('p_java');
            $table->integer('p_php');
            $table->integer('p_legistorm');
            $table->integer('p_bloomberg');
            $table->integer('p_cq');
            $table->integer('p_iq');
            $table->integer('p_westlaw');
            $table->integer('p_intertrack');
            $table->integer('p_quorum');

            $table->integer('s_americanindian');
            $table->integer('s_asian');
            $table->integer('s_black');
            $table->integer('s_latino');
            $table->integer('s_pacificislander');
            $table->integer('s_white');
            $table->integer('s_lgbtq');
            $table->integer('s_vietnam');
            $table->integer('s_afsm');
            $table->integer('s_disvet');
            $table->integer('s_specdisvet');
            $table->integer('s_protectedvet');
            $table->integer('s_recsepvet');

            $table->integer('s_gender');

            $table->integer('e_education');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
