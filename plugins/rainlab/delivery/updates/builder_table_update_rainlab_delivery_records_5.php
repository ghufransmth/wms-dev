<?php namespace Rainlab\Delivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRainlabDeliveryRecords5 extends Migration
{
    public function up()
    {
        Schema::table('rainlab_delivery_records', function($table)
        {
            $table->string('from_postal');
        });
    }
    
    public function down()
    {
        Schema::table('rainlab_delivery_records', function($table)
        {
            $table->dropColumn('from_postal');
        });
    }
}
