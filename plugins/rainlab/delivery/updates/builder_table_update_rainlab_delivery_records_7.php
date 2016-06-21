<?php namespace Rainlab\Delivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRainlabDeliveryRecords7 extends Migration
{
    public function up()
    {
        Schema::table('rainlab_delivery_records', function($table)
        {
            $table->dateTime('delivery_date');
        });
    }
    
    public function down()
    {
        Schema::table('rainlab_delivery_records', function($table)
        {
            $table->dropColumn('delivery_date');
        });
    }
}
