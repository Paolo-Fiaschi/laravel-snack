<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table -> foreign('post_id', 'comment_post_fk')
                    -> references('id')
                    -> on('posts')
                    -> onDelete('cascade');
        });
        Schema::table('post_tag', function (Blueprint $table) {
            $table -> foreign('post_id', 'post_tag_post_fk')
                    -> references('id')
                    -> on('posts')
                    -> onDelete('cascade');

            $table -> foreign('post_id', 'post_tag_tag_fk')
                    -> references('id')
                    -> on('tags')
                    -> onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table -> dropForeign('comment_post_fk');

        });
        Schema::table('post_tag', function (Blueprint $table) {
            $table -> dropForeign('post_tag_post_fk');

            $table -> dropForeign('post_tag_tag_fk');

        });


    }
}
