<?php

use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->text('meta_keywords')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('pages')) {
            // Remove the column from pages table
            Schema::table('pages', function (Blueprint $table) {
                if (Schema::hasColumn('pages', 'meta_keywords')) {
                    $table->dropColumn('meta_keywords');
                }
            });

            // Remove the data type entry
            $pageDataType = DataType::where('slug', 'pages')->first();
            if (!empty($pageDataType)) {
                DataRow::where([
                    'data_type_id' => $pageDataType->id,
                    'field'        => 'meta_keywords',
                ])->delete();
            }
        }
    }
}
;