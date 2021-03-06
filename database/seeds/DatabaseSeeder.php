<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * @var array
     */
    private $tables = [
        'users',
        'companies',
        'hotel_types',
        'hotels',
        'company_employee',
        'room_room_amenity',
        'room_amenities',
        'room_types',
        'bed_types',
        'rooms',
        'beds',
        'products',
        'stays',
        'room_stay',
        'user_stay',
        'purchases',
        'purchase_products',
        'facilities',
        'facility_hotel'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->cleanDatabase();

        $this->call(UsersTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(HotelTypesTableSeeder::class);
        $this->call(HotelsTableSeeder::class);
        $this->call(CompanyEmployeeTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(RoomTypesTableSeeder::class);
        $this->call(BedTypesTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(BedsTableSeeder::class);
        $this->call(RoomAmenitiesTableSeeder::class);
        $this->call(RoomsRoomAmenityTableSeeder::class);
        $this->call(StaysTableSeeder::class);
        $this->call(RoomStayTableSeeder::class);
        $this->call(UserStayTableSeeder::class);
        $this->call(PurchasesTableSeeder::class);
        $this->call(PurchaseProductsTableSeeder::class);
        $this->call(FacilitiesTableSeeder::class);
        $this->call(FacilityHotelTableSeeder::class);
    }

    /**
     * Cleans the database by iterating and truncating all db tables
     */
    private function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        foreach ($this->tables as $tableName)
        {
            DB::table($tableName)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
