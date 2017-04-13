<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/* Create Sample Admin */
        $user = new User();
        $user->name = 'ADMIN';
        $user->email = 'admin@executive.com';
        $user->password = bcrypt('admin');
        $user->role = 'admin';
        $user->save();

        /* Create Sample Sub Adum */
        $user = new User();
        $user->name = 'SUB-ADUM';
        $user->email = 'sub-adum@executive.com';
        $user->password = bcrypt('sub-adum');
        $user->role = 'sub-adum';
        $user->save();

        /* Create Sample Sub Evlap */
        $user = new User();
        $user->name = 'SUB-EVLAP';
        $user->email = 'sub-evlap@executive.com';
        $user->password = bcrypt('sub-evlap');
        $user->role = 'sub-evlap';
        $user->save();

        /* Create Sample Inspektur */
        $user = new User();
        $user->name = 'INSPEKTUR';
        $user->email = 'inspektur@executive.com';
        $user->password = bcrypt('inspektur');
        $user->role = 'inspektur';
        $user->save();
    }
}
