<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        truncate();

        $this->call([
            RolesTableSeeder::class,
            BrandsTableSeeder::class,
            UsersTableSeeder::class,
            ProductsTableSeeder::class,
            VariationsTableSeeder::class,
            AtributesTableSeeder::class,
            AtributeValuesTableSeeder::class,
            SpecificationsTableSeeder::class,
            TaxonomiesTableSeeder::class,
            VariationTaxonomyTableSeeder::class,
            MediaTableSeeder::class,
            AttachmentsTableSeeder::class,
        ]);
    }
}