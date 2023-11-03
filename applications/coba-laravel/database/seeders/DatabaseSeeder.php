<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    
            // User::create([
            //     'name' => 'Wildan Fauzan',
            //     'email' => 'wildan@unpas.ac.id',
            //     'password' => bcrypt('12345')
            // ]);

            // User::create([
            //     'name' => 'Aufaa Husniati',
            //     'email' => 'aufaa@unpas.ac.id',
            //     'password' => bcrypt('54321')
            // ]);

            User::factory(3)->create();    

            Category::create([
                'name' => 'Web Programming',
                'slug' => 'web-programming'
            ]);

            Category::create([
                'name' => 'Personal',
                'slug' => 'personal'
            ]);

            Post::factory(20)->create();

            // Post::create([
            //     'title' => 'Judul Pertama',
            //     'slug' => 'judul-pertama',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, perspiciatis?',
            //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit quos iusto neque hic doloremque libero exercitationem quam facilis eveniet nam doloribus, provident assumenda, a consectetur accusantium maiores corporis aliquam eligendi aut quis beatae! Temporibus voluptas ipsa iure ex quae pariatur modi rem reiciendis eveniet sed quasi quos fugiat, repellat cupiditate optio vero tenetur nemo incidunt tempora asperiores assumenda. Laboriosam, dolores! Dolorum magnam velit commodi nesciunt dolorem dignissimos! Incidunt laboriosam at nulla eligendi laudantium aperiam iure.</p><p>Dolor dolorem modi veritatis doloribus deserunt id voluptas quaerat aspernatur, ducimus laborum corrupti delectus eius quidem. Minima quam asperiores iusto voluptatibus quia explicabo non reiciendis laboriosam ipsum cumque repellat ad distinctio voluptate aliquid, dolore ducimus? Placeat veniam aut alias repellendus accusantium quaerat architecto molestiae numquam!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias perferendis veniam cumque placeat nisi nesciunt sed labore earum! Nesciunt ab quam dolores laboriosam! Eius recusandae autem eos et, commodi voluptatem?</p>',
            //     'category_id' => 1,
            //     'user_id' => 1
            // ]);

            // Post::create([
            //     'title' => 'Judul Ke Dua',
            //     'slug' => 'judul-ke-dua',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, perspiciatis?',
            //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit quos iusto neque hic doloremque libero exercitationem quam facilis eveniet nam doloribus, provident assumenda, a consectetur accusantium maiores corporis aliquam eligendi aut quis beatae! Temporibus voluptas ipsa iure ex quae pariatur modi rem reiciendis eveniet sed quasi quos fugiat, repellat cupiditate optio vero tenetur nemo incidunt tempora asperiores assumenda. Laboriosam, dolores! Dolorum magnam velit commodi nesciunt dolorem dignissimos! Incidunt laboriosam at nulla eligendi laudantium aperiam iure.</p><p>Dolor dolorem modi veritatis doloribus deserunt id voluptas quaerat aspernatur, ducimus laborum corrupti delectus eius quidem. Minima quam asperiores iusto voluptatibus quia explicabo non reiciendis laboriosam ipsum cumque repellat ad distinctio voluptate aliquid, dolore ducimus? Placeat veniam aut alias repellendus accusantium quaerat architecto molestiae numquam!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias perferendis veniam cumque placeat nisi nesciunt sed labore earum! Nesciunt ab quam dolores laboriosam! Eius recusandae autem eos et, commodi voluptatem?</p>',
            //     'category_id' => 1,
            //     'user_id' => 1
            // ]);

            // Post::create([
            //     'title' => 'Judul Ke Tiga',
            //     'slug' => 'judul-ke-tiga',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, perspiciatis?',
            //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit quos iusto neque hic doloremque libero exercitationem quam facilis eveniet nam doloribus, provident assumenda, a consectetur accusantium maiores corporis aliquam eligendi aut quis beatae! Temporibus voluptas ipsa iure ex quae pariatur modi rem reiciendis eveniet sed quasi quos fugiat, repellat cupiditate optio vero tenetur nemo incidunt tempora asperiores assumenda. Laboriosam, dolores! Dolorum magnam velit commodi nesciunt dolorem dignissimos! Incidunt laboriosam at nulla eligendi laudantium aperiam iure.</p><p>Dolor dolorem modi veritatis doloribus deserunt id voluptas quaerat aspernatur, ducimus laborum corrupti delectus eius quidem. Minima quam asperiores iusto voluptatibus quia explicabo non reiciendis laboriosam ipsum cumque repellat ad distinctio voluptate aliquid, dolore ducimus? Placeat veniam aut alias repellendus accusantium quaerat architecto molestiae numquam!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias perferendis veniam cumque placeat nisi nesciunt sed labore earum! Nesciunt ab quam dolores laboriosam! Eius recusandae autem eos et, commodi voluptatem?</p>',
            //     'category_id' => 2,
            //     'user_id' => 1
            // ]);

            // Post::create([
            //     'title' => 'Judul Ke Empat',
            //     'slug' => 'judul-ke-empat',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, perspiciatis?',
            //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit quos iusto neque hic doloremque libero exercitationem quam facilis eveniet nam doloribus, provident assumenda, a consectetur accusantium maiores corporis aliquam eligendi aut quis beatae! Temporibus voluptas ipsa iure ex quae pariatur modi rem reiciendis eveniet sed quasi quos fugiat, repellat cupiditate optio vero tenetur nemo incidunt tempora asperiores assumenda. Laboriosam, dolores! Dolorum magnam velit commodi nesciunt dolorem dignissimos! Incidunt laboriosam at nulla eligendi laudantium aperiam iure.</p><p>Dolor dolorem modi veritatis doloribus deserunt id voluptas quaerat aspernatur, ducimus laborum corrupti delectus eius quidem. Minima quam asperiores iusto voluptatibus quia explicabo non reiciendis laboriosam ipsum cumque repellat ad distinctio voluptate aliquid, dolore ducimus? Placeat veniam aut alias repellendus accusantium quaerat architecto molestiae numquam!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias perferendis veniam cumque placeat nisi nesciunt sed labore earum! Nesciunt ab quam dolores laboriosam! Eius recusandae autem eos et, commodi voluptatem?</p>',
            //     'category_id' => 2,
            //     'user_id' => 2
            // ]);
    }
}
