<?php

use Biqon\User;
use Biqon\Role_User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new User();
        $role->name = 'Marcos';
        $role->company = 'Empresa';
        $role->phone = '987654321';
        $role->sms = '5';
        $role->provider_id = '1';
        $role->email = 'marcostor13@gmail.com';
        $role->password = bcrypt('libido16');
        $role->save();   

        $role_user = new Role_User();
        $role_user->role_id = '2';
        $role_user->user_id = '1';
        $role_user->save();  
        
        $role = new User();
        $role->name = 'Guillermo Bahamondes';
        $role->company = 'Binteraction';
        $role->phone = '+56985266912';
        $role->sms = '5';
        $role->provider_id = '1';
        $role->email = 'binteraction.chile@gmail.com';
        $role->password = bcrypt('12345678');
        $role->save();

        $role_user = new Role_User();
        $role_user->role_id = '2';
        $role_user->user_id = '2';
        $role_user->save();  

        $role = new User();
        $role->name = 'Amicar';
        $role->company = 'Amicar';
        $role->phone = '987654321';
        $role->sms = '5';
        $role->provider_id = '1';
        $role->email = 'carla.torres@amicar.cl';
        $role->password = bcrypt('amicar');
        $role->save();

        $role_user = new Role_User();
        $role_user->role_id = '2';
        $role_user->user_id = '3';
        $role_user->save();  

        $role = new User();
        $role->name = 'Chas';
        $role->company = 'Chas';
        $role->phone = '987654321';
        $role->sms = '5';
        $role->provider_id = '1';
        $role->email = 'inttegrados@gmail.com';
        $role->password = bcrypt('chas');
        $role->save();

        $role_user = new Role_User();
        $role_user->role_id = '2';
        $role_user->user_id = '4';
        $role_user->save();

        $role = new User();
        $role->name = 'Clinica Davila';
        $role->company = 'Clinica Davila';
        $role->phone = '987654321';
        $role->sms = '5';
        $role->provider_id = '1';
        $role->email = 'rodrigo.calderon@davila.cl';
        $role->password = bcrypt('cdavila0506');
        $role->save();

        $role_user = new Role_User();
        $role_user->role_id = '2';
        $role_user->user_id = '5';
        $role_user->save();

        $role = new User();
        $role->name = 'Hites';
        $role->company = 'Hites';
        $role->phone = '987654321';
        $role->sms = '5';
        $role->provider_id = '1';
        $role->email = 'tania.morales@hites.cl';
        $role->password = bcrypt('hites0626');
        $role->save();

        $role_user = new Role_User();
        $role_user->role_id = '2';
        $role_user->user_id = '6';
        $role_user->save();


        $role = new User();
        $role->name = 'Procollect';
        $role->company = 'Procollect';
        $role->phone = '987654321';
        $role->sms = '5';
        $role->provider_id = '1';
        $role->email = 'josesm@pocollect.cl';
        $role->password = bcrypt('procollect2808');
        $role->save();

        $role_user = new Role_User();
        $role_user->role_id = '2';
        $role_user->user_id = '7';
        $role_user->save();


        $role = new User();
        $role->name = 'U. SAN SEBASTIAN MARKETING';
        $role->company = 'U. SAN SEBASTIAN MARKETING';
        $role->phone = '987654321';
        $role->sms = '5';
        $role->provider_id = '1';
        $role->email = 'carlos.tocornal@uss.cl';
        $role->password = bcrypt('ussuser0705');
        $role->save();

        $role_user = new Role_User();
        $role_user->role_id = '2';
        $role_user->user_id = '8';
        $role_user->save();

    }
}

