<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'CHURCHILL & COMPANY Mens Black European Leather Modern Derby Formal Shoe',
                "price" => "3600",
                "description" => "The brand is inspired by Indian Gentlemen who walk a different beat and are looking for deconstructed styles with softer finishes." ,
                "category" => "Formal Shoes" ,
                "gallery" => "https://m.media-amazon.com/images/I/61fvoGlv+WL._UL1500_.jpg"
            
            ] ,
            [
                'name' => 'Nike Unisex-Adult Lebron XVIII Basketball Shoe',
                "price" => "6500",
                "description" => "The history of this iconic colourway traces back to a LeBron 2 PE that became one of LeBron's most all-time coveted releases. LeBron's iconic logo shows upon the heel—the high-flying symbol of his unstoppable power and speed." ,
                "category" => "Sports Shoes" ,
                "gallery" => "https://m.media-amazon.com/images/I/61M5nsBPp4S._UL1140_.jpg"
            
            ] ,
            [
                'name' => 'VD Outdoor Rainy Shoes for Women',
                "price" => "650",
                "description" => "Perfectly designed to match up with your stylish attitude. Very Comfortable To Wear As Well." ,
                "category" => "Rainy Shoes" ,
                "gallery" => "https://m.media-amazon.com/images/I/61Gc7NPZiCS._UL1280_.jpg"
            
            ] ,
            [
                'name' => 'XTEP Womens Synthetic Leather Top Grain Napped Leather Broad Sole Skateboarding Shoes',
                "price" => "4950",
                "description" => "Flat Broad Sole : These white shoes for women inbuilt with flat sole offers better placement on skateboards. It provides high traction and better grip on surface." ,
                "category" => "Skateboarding Shoes" ,
                "gallery" => "https://m.media-amazon.com/images/I/71g+JlyVAKL._UL1500_.jpg"
            
            ] ,
            [
                'name' => 'Coolz Kids Chu-Chu Sound Musical First Walking Shoes Star-7 for Baby Boys and Baby Girls for 9-24 Months',
                "price" => "299",
                "description" => "This stylish pair of shoes is a perfect choice for your babies first steps." ,
                "category" => "Kids Shoes" ,
                "gallery" => "https://m.media-amazon.com/images/I/719L0b0vCDL._UL1500_.jpg"
            
            ] ,
            [
                'name' => 'Bacca Bucci Mens HUNTER 6 inches Hiking/Snow boots for men for outdoor Trekking - non slip, Water Proof, Anti-Fatigue, Comfortable & Light weight',
                "price" => "2800",
                "description" => "Made in high quality artificial fluff, Elastic wearable upper, waterproof exterior, breathable material which can keep feet all-day dry meanwhile provide with great comfort." ,
                "category" => "Trekking Shoes" ,
                "gallery" => "https://m.media-amazon.com/images/I/81PeWKM1lgS._UL1500_.jpg"
            
            ]
        ]);
    }
}
