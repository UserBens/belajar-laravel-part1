<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'beni ozora',
            'username' => 'beniozora',
            'email' => 'benedictusradyan@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'fredyan blok goblok',
        //     'email' => 'ferdyahah@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        User::factory(3)->create();


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);

        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eos at illo, perspiciatis temporibus in!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti, quia, assumenda eveniet distinctio eius molestias 
        //     suscipit fugiat amet hic quidem consectetur quisquam maiores atque, necessitatibus dignissimos deserunt doloribus tenetur culpa nobis. Repellendus quos 
        //     dolorem maiores sed eaque tempora dolorum aut modi nam inventore ratione autem, officiis beatae, et magni facilis?',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'judul ke dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eos at illo, perspiciatis temporibus in!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti, quia, assumenda eveniet distinctio eius molestias 
        //     suscipit fugiat amet hic quidem consectetur quisquam maiores atque, necessitatibus dignissimos deserunt doloribus tenetur culpa nobis. Repellendus quos 
        //     dolorem maiores sed eaque tempora dolorum aut modi nam inventore ratione autem, officiis beatae, et magni facilis?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul ke tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eos at illo, perspiciatis temporibus in!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti, quia, assumenda eveniet distinctio eius molestias 
        //     suscipit fugiat amet hic quidem consectetur quisquam maiores atque, necessitatibus dignissimos deserunt doloribus tenetur culpa nobis. Repellendus quos 
        //     dolorem maiores sed eaque tempora dolorum aut modi nam inventore ratione autem, officiis beatae, et magni facilis?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul ke empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eos at illo, perspiciatis temporibus in!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti, quia, assumenda eveniet distinctio eius molestias 
        //     suscipit fugiat amet hic quidem consectetur quisquam maiores atque, necessitatibus dignissimos deserunt doloribus tenetur culpa nobis. Repellendus quos 
        //     dolorem maiores sed eaque tempora dolorum aut modi nam inventore ratione autem, officiis beatae, et magni facilis?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
       
    }
}

