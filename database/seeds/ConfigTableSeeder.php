<?php
use App\Config;
use Illuminate\Database\Seeder;

class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config = new Config();
        $config->key = 'site_title';
        $config->value = 'ImmaconAngelesCityPH CHURCH';
        $config->save();
    }
}
