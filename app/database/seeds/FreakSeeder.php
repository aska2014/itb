<?php

use Kareem3d\Freak\DBRepositories\ControlPanel;

class FreakSeeder extends \Illuminate\Database\Seeder {

    public function run()
    {
        ControlPanel::query()->delete();
        User::query()->delete();

        $controlPanel = ControlPanel::create(array(
            'name' => 'ITB',
            'password' => 'itb123'
        ));

        $user = \Kareem3d\Freak\DBRepositories\User::create(array(
            'email' => 'kareem3d.a@gmail.com',
            'password' => 'kareem123',
            'access' => 3
        ));

        $controlPanel->attachUser($user, true);
    }

}