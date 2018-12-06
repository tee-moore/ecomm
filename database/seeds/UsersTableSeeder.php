<?php

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
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@ecomm.loc',
                'password' => '$2y$10$2r1LTvH1BnOMpj7Apj1uNOAFAXViGcplsM6qTTjYi5Al23fwW7rmm',
                'role_id' => 1,
                'remember_token' => 'UwpybRuF2jtzGqWQnxGd4tTsZBizXAk2TKRjhqZPgAPsqwDbCSqPndsea3fC',
            ],
            [
                'name' => 'owner_adidas',
                'email' => 'owner_adidas@test.loc',
                'password' => '$2y$10$/s1NPUbYAbEvwiSfHnFIJO8vf3Hq1/xwDKFmiKYxhBzSd7R1RZx7m',
                'role_id' => 2,
                'remember_token' => '0tnpAVRVIfeil5bZBk4voLSAoX9UAirCE9ntKVNgnA2LXqDX4Z8W1T46KqRi',
            ],
            [
                'name' => 'manager_adidas',
                'email' => 'manager_adidas@test.loc',
                'password' => '$2y$10$PdYL0ijdeK4moxUHu0gQCOjJoVS5iT5Ue.VF.rZkcwWUln28/W.2K',
                'role_id' => 3,
                'remember_token' => 'A5P8ziCRIfgvbW1hb0UHSJqvnmEegaO5fTAKYLxolvlbnIasKEQWOGW2Zmmc',
            ],
            [
                'name' => 'owner_collins',
                'email' => 'owner_collins@test.loc',
                'password' => '$2y$10$/s1NPUbYAbEvwiSfHnFIJO8vf3Hq1/xwDKFmiKYxhBzSd7R1RZx7m',
                'role_id' => 2,
                'remember_token' => '0tnpAVRVIfeil5bZBk4voLSAoX9UAirCE9ntKVNgnA2LXqDX4Z8W1T46KqRi',
            ],
            [
                'name' => 'manager_collins',
                'email' => 'manager_collins@test.loc',
                'password' => '$2y$10$PdYL0ijdeK4moxUHu0gQCOjJoVS5iT5Ue.VF.rZkcwWUln28/W.2K',
                'role_id' => 3,
                'remember_token' => 'A5P8ziCRIfgvbW1hb0UHSJqvnmEegaO5fTAKYLxolvlbnIasKEQWOGW2Zmmc',
            ],
            [
                'name' => 'owner_zhytomyrskye_nosky',
                'email' => 'owner_zhytomyrskye_nosky@test.loc',
                'password' => '$2y$10$/s1NPUbYAbEvwiSfHnFIJO8vf3Hq1/xwDKFmiKYxhBzSd7R1RZx7m',
                'role_id' => 2,
                'remember_token' => '0tnpAVRVIfeil5bZBk4voLSAoX9UAirCE9ntKVNgnA2LXqDX4Z8W1T46KqRi',
            ],
            [
                'name' => 'manager_zhytomyrskye_nosky',
                'email' => 'manager_zhytomyrskye_nosky@test.loc',
                'password' => '$2y$10$PdYL0ijdeK4moxUHu0gQCOjJoVS5iT5Ue.VF.rZkcwWUln28/W.2K',
                'role_id' => 3,
                'remember_token' => 'A5P8ziCRIfgvbW1hb0UHSJqvnmEegaO5fTAKYLxolvlbnIasKEQWOGW2Zmmc',
            ],
        ]);
    }

}
