<?php

use Illuminate\Database\Seeder;

class AddOauthClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('oauth_clients')->insert([
            'secret' => env('OUATH_TEST_CLIENT'),
            'redirect' => 'http://localhost:3000/auth/callback',
            'name' => 'Nuxt.js Test OAUTH2 client',
            'personal_access_client' => 0,
            'revoked' => 0,
            'password_client' => 0,
        ]);

        \DB::table('oauth_personal_access_clients')->insert([
            'client_id' => 1,
        ]);
    }
}
