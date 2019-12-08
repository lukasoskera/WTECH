<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Navy T-shirt',
            'slug' => 'navy-tshirt',
            'color' => 'Navy',
            'size' => 'L',
            'price' => '1700',
            'category' => '0',
            'subcategory' => '0',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
             ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
             dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
             deserunt mollit anim id est laborum.',
        ]);

        Product::create([
            'name' => 'Red T-shirt',
            'slug' => 'red-tshirt',
            'color' => 'Red',
            'size' => 'M',
            'price' => '1700',
            'category' => '0',
            'subcategory' => '0',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
             ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
             dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
             deserunt mollit anim id est laborum.',
        ]);
        Product::create([
            'name' => 'Dinosaur Shorts',
            'slug' => 'dino-shorts',
            'color' => 'Magenta & Black',
            'size' => 'L',
            'price' => '900',
            'category' => '0',
            'subcategory' => '1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
             ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
             dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
             deserunt mollit anim id est laborum.',
        ]);
        Product::create([
            'name' => 'Mustard Vegemite Hat',
            'slug' => 'vegemite-hat',
            'color' => 'Mustard',
            'size' => 'M',
            'price' => '700',
            'category' => '3',
            'subcategory' => '2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
             ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
             dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
             deserunt mollit anim id est laborum.',
        ]);
        Product::create([
            'name' => 'Trasher Jacket',
            'slug' => 'blue-jacket',
            'color' => 'Blue & Black',
            'size' => 'XL',
            'price' => '2000',
            'category' => '0',
            'subcategory' => '3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
             ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
             dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
             deserunt mollit anim id est laborum.',
        ]);
        Product::create([
            'name' => 'Warm Winter Coat',
            'slug' => 'warm-coat',
            'color' => 'Black & Brown',
            'size' => 'XL',
            'price' => '2000',
            'category' => '1',
            'subcategory' => '4',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
             ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
             dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
             deserunt mollit anim id est laborum.',
        ]);

        Product::create([
            'name' => 'Pink Cocktail Dress',
            'slug' => 'pink-dress',
            'color' => 'Pink',
            'size' => 'M',
            'price' => '1600',
            'category' => '1',
            'subcategory' => '5',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
             ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
             dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
             deserunt mollit anim id est laborum.',
        ]);
        Product::create([
            'name' => 'Flower dress',
            'slug' => 'flower-dress',
            'color' => 'Pink',
            'size' => 'M',
            'price' => '800',
            'category' => '2',
            'subcategory' => '5',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
             ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
             dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
             deserunt mollit anim id est laborum.',
        ]);
        Product::create([
            'name' => 'Red Cocktail Dress',
            'slug' => 'red-dress',
            'color' => 'Red',
            'size' => 'L',
            'price' => '1600',
            'category' => '1',
            'subcategory' => '5',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
             ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
             dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
             deserunt mollit anim id est laborum.',
        ]);
        Product::create([
            'name' => 'Black Winter Gloves',
            'slug' => 'black-gloves',
            'color' => 'Black',
            'size' => 'L',
            'price' => '1300',
            'category' => '3',
            'subcategory' => '6',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
             ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
             dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
             deserunt mollit anim id est laborum.',
        ]);
        Product::create([
            'name' => 'Pink Shirt',
            'slug' => 'pink-shirt',
            'color' => 'Pink',
            'size' => 'S',
            'price' => '1000',
            'category' => '1',
            'subcategory' => '7',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
             ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
             dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
             deserunt mollit anim id est laborum.',
        ]);
        Product::create([
            'name' => 'Storage Hanger',
            'slug' => 'storage-hanger',
            'color' => 'Steel',
            'size' => 'Big',
            'price' => '1800',
            'category' => '3',
            'subcategory' => '8',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
             ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
             dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
             deserunt mollit anim id est laborum.',
        ]);
        Product::create([
            'name' => 'Yellow dress',
            'slug' => 'yellow-dress',
            'color' => 'Yellow',
            'size' => 'XS',
            'price' => '900',
            'category' => '2',
            'subcategory' => '5',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
             ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
             dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
             deserunt mollit anim id est laborum.',
        ]);
        Product::create([
            'name' => 'Storage Cross Hanger',
            'slug' => 'cross-hanger',
            'color' => 'Gray',
            'size' => 'Big',
            'price' => '2000',
            'category' => '3',
            'subcategory' => '8',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
             ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
             dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
             deserunt mollit anim id est laborum.',
        ]);
        Product::create([
            'name' => 'Whale Jacket',
            'slug' => 'whale-jacket',
            'color' => 'Blue',
            'size' => 'S',
            'price' => '1100',
            'category' => '2',
            'subcategory' => '3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
             ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
             dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
             deserunt mollit anim id est laborum.',
        ]);
        Product::create([
            'name' => 'Red Coat',
            'slug' => 'red-coat',
            'color' => 'Red',
            'size' => 'L',
            'price' => '1200',
            'category' => '2',
            'subcategory' => '4',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
             ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
             dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
             deserunt mollit anim id est laborum.',
        ]);
    }
}
