<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandingPageSeeder extends Seeder
{
    public function run()
    {
        DB::table('videos')->insert([
            ["id"=>1,"video"=>"https://vimeo.com/304330004","description"=>'{"en":"Best Place To Your Clothes"}',"image"=>'template/images/event-6.jpg']
        ]);
        DB::table('counters')->insert([
            ["id"=>1,"Counter1Name"=>'{"en":"Counter1Name"}',"Counter1"=>1,"Counter2Name"=>'{"en":"Counter2Name"}',"Counter2"=>2,"Counter3Name"=>'{"en":"Counter3Name"}',"Counter3"=>3,"Counter4Name"=>'{"en":"Counter4Name"}',"Counter4"=>4,]
        ]);
        DB::table('heroes')->insert([
            ["id"=>1,"description"=>'{"en":"Welcome To Al-Areen Wear"}',"image"=>'template/images/bg_3.jpg']
        ]);
        DB::table('abouts')->insert([
            ["id"=>1,"title"=>'{"en":"Welcome To Al-Areen Wear"}',"description"=>'{"en":"<p><strong>Vision:<\/strong> To become a supplier of excellence to every customer and to supply the best quality products.<\/p>\r\n\r\n<p><strong>Mission:<\/strong> To offer the most professional products and quality response and service to our clients, while maintaining a highly trained group of skilled workers to assist in better product creation.<\/p>\r\n\r\n<p><strong>Values:<\/strong><\/p>\r\n\r\n<ol>\r\n\t<li>Innovation in development<\/li>\r\n\t<li>Ethical relationships between management and employees<\/li>\r\n\t<li>Customer-focused approach<\/li>\r\n\t<li>Quality products and professional service<\/li>\r\n<\/ol>\r\n\r\n<p><strong>About Us:<\/strong> Al-Areen Wear Ltd. was established in 2005 and has been operating at its current location since 2009. With 14 years of experience and technical expertise in global garment manufacturing, our factory is located in the Deir Aby Said, Kora restrict, Irbid provinces of Jordan, close to the Haifa Port for exports. We are aware of the competitive market and strive for quick and flexible turnaround times while meeting customer quality requirements. We believe in fostering good relationships between management and employees for a shared vision and goal.<\/p>"}',"image"=>'template/images/bg_3.jpg']
        ]);
    }
}
