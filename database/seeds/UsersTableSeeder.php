<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    protected static $table = 'users';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::$table)->insert([
            [
                'name' => 'admin',
                'email' => 'admin@ecomm.loc',
                'password' => '$2y$10$2r1LTvH1BnOMpj7Apj1uNOAFAXViGcplsM6qTTjYi5Al23fwW7rmm',
                'remember_token' => 'UwpybRuF2jtzGqWQnxGd4tTsZBizXAk2TKRjhqZPgAPsqwDbCSqPndsea3fC',
                'role_id' => 1,
                'brand_id' => 1,
            ],
            [
                'name' => 'owner_adidas',
                'email' => 'owner_adidas@test.loc',
                'password' => '$2y$10$/s1NPUbYAbEvwiSfHnFIJO8vf3Hq1/xwDKFmiKYxhBzSd7R1RZx7m',
                'remember_token' => '0tnpAVRVIfeil5bZBk4voLSAoX9UAirCE9ntKVNgnA2LXqDX4Z8W1T46KqRi',
                'role_id' => 2,
                'brand_id' => 2,
            ],
            [
                'name' => 'manager_adidas',
                'email' => 'manager_adidas@test.loc',
                'password' => '$2y$10$PdYL0ijdeK4moxUHu0gQCOjJoVS5iT5Ue.VF.rZkcwWUln28/W.2K',
                'remember_token' => 'A5P8ziCRIfgvbW1hb0UHSJqvnmEegaO5fTAKYLxolvlbnIasKEQWOGW2Zmmc',
                'role_id' => 3,
                'brand_id' => 2,
            ],
            [
                'name' => 'owner_collins',
                'email' => 'owner_collins@test.loc',
                'password' => '$2y$10$/s1NPUbYAbEvwiSfHnFIJO8vf3Hq1/xwDKFmiKYxhBzSd7R1RZx7m',
                'remember_token' => '0tnpAVRVIfeil5bZBk4voLSAoX9UAirCE9ntKVNgnA2LXqDX4Z8W1T46KqRi',
                'role_id' => 2,
                'brand_id' => 3,
            ],
            [
                'name' => 'manager_collins',
                'email' => 'manager_collins@test.loc',
                'password' => '$2y$10$PdYL0ijdeK4moxUHu0gQCOjJoVS5iT5Ue.VF.rZkcwWUln28/W.2K',
                'remember_token' => 'A5P8ziCRIfgvbW1hb0UHSJqvnmEegaO5fTAKYLxolvlbnIasKEQWOGW2Zmmc',
                'role_id' => 3,
                'brand_id' => 3,
            ],
            [
                'name' => 'owner_zhytomyrskye_nosky',
                'email' => 'owner_zhytomyrskye_nosky@test.loc',
                'password' => '$2y$10$/s1NPUbYAbEvwiSfHnFIJO8vf3Hq1/xwDKFmiKYxhBzSd7R1RZx7m',
                'remember_token' => '0tnpAVRVIfeil5bZBk4voLSAoX9UAirCE9ntKVNgnA2LXqDX4Z8W1T46KqRi',
                'role_id' => 2,
                'brand_id' => 4,
            ],
            [
                'name' => 'manager_zhytomyrskye_nosky',
                'email' => 'manager_zhytomyrskye_nosky@test.loc',
                'password' => '$2y$10$PdYL0ijdeK4moxUHu0gQCOjJoVS5iT5Ue.VF.rZkcwWUln28/W.2K',
                'remember_token' => 'A5P8ziCRIfgvbW1hb0UHSJqvnmEegaO5fTAKYLxolvlbnIasKEQWOGW2Zmmc',
                'role_id' => 3,
                'brand_id' => 4,
            ],
        ]);
    }

}
