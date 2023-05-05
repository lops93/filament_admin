<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stores_json = file_get_contents(__DIR__.'/includes/stores.json');

        $stores = json_decode($stores_json);

        foreach ($stores as $store) {
            $storeLogo= Storage::putFile('public/images/stores', public_path($store->store_logo));

            // Remove the 'public' prefix from the path
            $storeLogo = str_replace('public/', '', $storeLogo);
            Store::create([
                'name' => $store->name,
                'description' => $store->description,
                'store_logo' => $storeLogo,
                'status' => $store->status,
            ]);
        }   
    }
}
