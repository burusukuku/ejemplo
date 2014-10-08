<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Eloquent::unguard();
        //insertamos los usuarios
        $this->call('UserTableSeeder');
        //mostramos el mensaje de que los usuarios se han insertado correctamente
        $this->command->info('User table seeded!');
    }

}

//clase para insertar usuarios
class UserTableSeeder extends Seeder {

    public function run()
    {

        DB::table('users')->insert(array(
            'user' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin'),
            'active' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ));

        DB::table('users')->insert(array(
            'user' => 'juan',
            'email' => 'juan@mail.com',
            'password' => Hash::make('juan'),
            'active' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ));
    }
}

