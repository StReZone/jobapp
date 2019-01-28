<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_applicant = Role::where('name','applicant')->first();
        $role_admin = Role::where('name','admin')->first();

        $applicant = new User();
        $applicant->name = 'Rubenson';
        $applicant->email = 'benz.nettogame@gmail.com';
        $applicant->dob = ''
        $applicant->password = bcrypt('secret');
        $applicant->save();
        $applicant->roles()->attach($role_applicant);

        $admin = new User();
        $admin->name = 'Rubenson';
        $admin->email = 'rubenson.cristian@gmail.com';
        $admin->password = bcrypt('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
