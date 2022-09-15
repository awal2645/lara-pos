<?php

namespace Modules\Setting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Setting\Entities\Setting;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'company_name' => 'TEXLAB POS',
            'company_email' => '@hr@texlabit.com',
            'company_phone' => '+880 1763-215136',
            'notification_email' => 'notification@test.com',
            'default_currency_id' => 1,
            'default_currency_position' => 'prefix',
            'footer_text' => 'Texlab Pos © 2021 || Developed by <strong><a target="_blank" href="https://www.texlabit.com/">Fahim Anzam</a></strong>',
            'company_address' => 'Rajshahi, Bangladesh'
        ]);
    }
}
