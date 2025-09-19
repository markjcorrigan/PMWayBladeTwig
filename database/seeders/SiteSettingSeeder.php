<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteSettings;

class SiteSettingSeeder extends Seeder
{
    public function run()
    {
        SiteSettings::updateOrInsert(['id' => 1], [
            'phone' => '0828032304',
            'email' => 'markjc@mweb.co.za',
            'address' => '29 Majuba Avenue Quellerina',
            'logo' => '',
            'footer_note' => 'PMWay',
        ]);
    }
}
