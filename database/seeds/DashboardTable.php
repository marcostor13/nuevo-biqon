<?php

use Biqon\Dashboard;
use Illuminate\Database\Seeder;

class DashboardTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Dashboard();
        $role->url = 'https://datastudio.google.com/embed/reporting/1b8gGanabEUHakWo_ZDmG4QCQ-xgQubgA/page/5sTv';
        $role->user_id = '1';
        $role->save(); 
        
        $role = new Dashboard();
        $role->url = 'https://datastudio.google.com/embed/reporting/1b8gGanabEUHakWo_ZDmG4QCQ-xgQubgA/page/5sTv';
        $role->user_id = '2';
        $role->save();

        $role = new Dashboard();
        $role->url = 'https://datastudio.google.com/embed/reporting/15Sp-HjBoz3JyFMRY-UVy0z0WvONBYlP2/page/5sTv';
        $role->user_id = '3';
        $role->save();
        
        $role = new Dashboard();
        $role->url = 'https://datastudio.google.com/embed/reporting/1SKwhD2-LK9Y8i_MojE7dRm_21pfLfhfh/page/5sTv';
        $role->user_id = '4';
        $role->save();
        
        $role = new Dashboard();
        $role->url = 'https://datastudio.google.com/embed/reporting/1ind6hPSKXaLVOhzFn6S5WRf9EkA4nDZS/page/5sTv';
        $role->user_id = '5';
        $role->save();

        $role = new Dashboard();
        $role->url = 'https://datastudio.google.com/embed/reporting/1f6vbPY1SBAuTafMFahNX2EJOePnmQVvQ/page/5sTv';
        $role->user_id = '6';
        $role->save();

        $role = new Dashboard();
        $role->url = 'https://datastudio.google.com/embed/reporting/1sxlKXF2MwJxWMYDprvXpPEljDSo6IDuh/page/5sTv';
        $role->user_id = '7';
        $role->save();

        $role = new Dashboard();
        $role->url = 'https://datastudio.google.com/embed/reporting/1Arjpgtd1iOI0lL19eLyGO4vB3luxbFOW/page/5sTv';
        $role->user_id = '8';
        $role->save();
        
        
    }
}
