<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
          [
            'name' => 'Jane Doe',
            'email' => 'jane.doe@example.com',
            'type' => 'One Bedroom Apt',
            'orginal' => 'Dayton, OH',
            'destination' => 'New York, NY',
            'moving_date' => '4/4/16',
            'flexibility' => true
          ],
          [
            'name' => 'Bod Doe',
            'email' => 'bob.doe@test.com',
            'type' => 'Two Bedroom Apt',
            'orginal' => 'Columbus, OH',
            'destination' => 'Boston, MA',
            'moving_date' => '1/4/16',
            'flexibility' => false
          ],
          [
            'name' => 'Drew Koverman',
            'email' => 'drew.koverman@email.franklin.edu',
            'type' => 'Condo',
            'orginal' => 'Miamisburg, OH',
            'destination' => 'Centerville, OH',
            'moving_date' => '11/12/15',
            'flexibility' => true
          ],
          [
            'name' => 'Walter White',
            'email' => 'walter.white@imtheonewhoknocks.com',
            'type' => 'One Bedroom Apt',
            'orginal' => 'Albuquerque, NM',
            'destination' => 'Albany, NY',
            'moving_date' => '8/23/16',
            'flexibility' => true
          ],
          [
            'name' => 'Greg Roman',
            'email' => 'greg.roman@something.com',
            'type' => 'Home',
            'orginal' => 'Sidney, OH',
            'destination' => 'Columbus, OH',
            'moving_date' => '5/12/16',
            'flexibility' => false
          ],
          [
            'name' => 'Tracy Giron',
            'email' => 'tracy.giron@test.com',
            'type' => 'Condo',
            'orginal' => 'Virginia Beach, VA',
            'destination' => 'Chicago, IL',
            'moving_date' => '11/20/16',
            'flexibility' => false
          ],
          [
            'name' => 'Rick Grimes',
            'email' => 'stuff@stuff.com',
            'type' => 'Studio',
            'orginal' => 'Virginia Beach, VA',
            'destination' => 'Chicago, IL',
            'moving_date' => '11/20/16',
            'flexibility' => false
          ],
          [
            'name' => 'Jane Ross',
            'email' => 'stuff@stuff.com',
            'type' => 'Studio',
            'orginal' => 'Virginia Beach, VA',
            'destination' => 'Chicago, IL',
            'moving_date' => '11/20/16',
            'flexibility' => false
          ],
          [
            'name' => 'Greg Miller',
            'email' => 'stuff@stuff.com',
            'type' => 'Condo',
            'orginal' => 'Virginia Beach, VA',
            'destination' => 'Chicago, IL',
            'moving_date' => '11/20/16',
            'flexibility' => true
          ]
        ]);
    }
}
