<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('articles')->truncate();
        DB::table('articles')->insert([
            [
                'title' => 'American English Coonhound',
                'content' => 'A descendent of the English Foxhound, this hunting dog breed is known for his speed, endurance, and loud voice in the field. The American English Coonhound will bark and bay at home, too, making him a poor choice if you’ve got nearby neighbors. He needs lots of exercise',
                'images' => 'https://i.pinimg.com/736x/ca/5f/e5/ca5fe5965efa52c924e23719f78aa8e7--pomeranian-dogs-white-pomeranian.jpg',
                'userId' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Affenpinscher',
                'content' => 'The Affenpinscher, also known as the "Monkey Dog" is small but feisty, full of spunk and energy.',
                'images' => 'http://www.dogbazar.org/wp-content/themes/twentytwelve/images/breed-encyclopedia/a/affenpischer094_thumb_2.jpg',
                'userId' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Barbet',
                'content' => 'This woolly sporting dog breed is fun-loving and smart. He was bred for retrieving waterfowl for hunters — and has the webbed feet to prove it — but he’s also a talented agility competitor in his native France.',
                'images' => 'http://www.dogbazar.org/wp-content/themes/twentytwelve/images/breed-encyclopedia/b/Barbet_thumb.jpg',
                'userId' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Beagle',
                'content' => 'Small, compact, and hardy, Beagles are active companions for kids and adults alike. Canines in this dog breed are merry and fun loving, but being hounds, they can also be stubborn and require patient, creative training techniques.',
                'images' => 'http://www.dogbazar.org/wp-content/themes/twentytwelve/images/breed-encyclopedia/b/beagleThumb.jpg',
                'userId' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Bearded Collie',
                'content' => 'The Bearded Collie dog breed was developed in Scotland to herd sheep and cattle in any weather or terrain.',
                'images' => 'http://www.dogbazar.org/wp-content/themes/twentytwelve/images/breed-encyclopedia/b/beardieThumb.jpg',
                'userId' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Belgian Sheepdog',
                'content' => 'This medium-size herding dog breed originated in Belgium where he was used to herd sheep. He later graduated to police work, and today his versatility makes him suitable for many types of work and dog sports. He’s alert, devoted, and protective.',
                'images' => 'http://www.dogbazar.org/wp-content/themes/twentytwelve/images/breed-encyclopedia/b/belgsheepdogThumb.jpg',
                'userId' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Bichon Frise',
                'content' => 'The Bichon Frise (pronounced BEE-shawn FREE-say; the plural is Bichons Frises) is a cheerful, small dog breed with a love of mischief and a lot of love to give',
                'images' => 'http://www.dogbazar.org/wp-content/themes/twentytwelve/images/breed-encyclopedia/b/BichonFriseThumb.jpg',
                'userId' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'title' => 'Border Collie',
                'content' => 'The Border Collie dog breed was developed to gather and control sheep in the hilly border country between Scotland and England. He is known for his intense stare, or “eye,” with which he controls his flock.',
                'images' => 'http://www.dogbazar.org/wp-content/themes/twentytwelve/images/breed-encyclopedia/b/bordercollieThumb.jpg',
                'userId' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Brussels Griffon',
                'content' => 'The energetic Brittany is a versatile family companion and hunting dog who works more closely to the hunter than other pointing breed',
                'images' => 'http://www.dogbazar.org/wp-content/themes/twentytwelve/images/breed-encyclopedia/b/brusselsGriffonThumb.jpg',
                'userId' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Finnish Lapphund',
                'content' => 'Believe it or not, this hard-working dog breed earned his keep herding reindeer in his native Lapland, in the far north of Finland. Friendly and gentle, the Finnish Lapphund retains a strong herding instinct. ',
                'images' => 'http://www.dogbazar.org/wp-content/themes/twentytwelve/images/breed-encyclopedia/f/Finnish-Lapphund.jpg',
                'userId' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'American Curl',
                'content' => 'The American Curl cat is small, graceful and lean with extraordinary curled ears and an exceptional, affectionate and people-loving personality.',
                'images' => 'https://www.cat-breeds-encyclopedia.com/images/American-curl-cat.jpg',
                'userId' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'American Shorthair',
                'content' => 'Portrait of an American Shorthair Cat The American Shorthair cat is a robust, classically built cat with a beautiful, expressive face, full cheeks, broad ears, a muscular body and full, round paws. ',
                'images' => 'https://www.cat-breeds-encyclopedia.com/images/American-shorthair-cat1.jpg',
                'userId' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Birman',
                'content' => 'The Birman cat is a large, impressive, blue-eyed cat with a single-length plush and silky coat. The fur is of medium length with no undercoat and has less tendency to matt than double coats like those of Persians and Himalayans.',
                'images' => 'https://www.cat-breeds-encyclopedia.com/images/Birman-cat.jpg',
                'userId' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'British Longhair',
                'content' => 'The British Longhair cat is built like a linebacker but is covered in gorgeous, plush fur. Available in almost any color, but often found in unusual solid tones of grey, cream and rust, this is simply an awesome looking cat that absolutely commands attention.',
                'images' => 'https://www.cat-breeds-encyclopedia.com/images/British-longhair-tab.jpg',
                'userId' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Scottish Fold',
                'content' => 'Portrait of a Scottish Fold Cat The Scottish Fold cat is a mutation developed from a single individual found in a barn in Scotland in 1966. This little cat, a white female stray, was taken in and named Susie.',
                'images' => 'https://www.cat-breeds-encyclopedia.com/images/Scottish-Fold-cat.jpg',
                'userId' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Tiger Cat',
                'content' => 'Tiger cats come in two main styles, either a brown or beige body color, with black or brown stripes, or a red or orange body color with stripes that are a darker shade of red or orange.',
                'images' => 'http://www.dogbazar.org/wp-content/themes/twentytwelve/images/breed-encyclopedia/c/chihuahuaSmoothThumb.jpg',
                'userId' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Turkish Angora',
                'content' => 'The Turkish Angora cat is an ancient, naturally occurring breed, originally from the Angora or Ankara region of Turkey. They are classic, elegant and wonderful companions.',
                'images' => 'http://www.dogbazar.org/wp-content/themes/twentytwelve/images/breed-encyclopedia/c/chineseCrestedThumb.jpg',
                'userId' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Snowshoe',
                'content' => 'Portrait of a Snowshoe Cat The Snowshoe cat is a large, sturdy cat with stunning coloring and a stellar personality. This is an excellent family pet that is exceptionally loving.',
                'images' => 'http://www.dogbazar.org/wp-content/themes/twentytwelve/images/breed-encyclopedia/c/chowChowThumb.jpg',
                'userId' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Somali',
                'content' => 'The Somali cat is an elegant, striking and slightly wild-looking cat with a full, beautiful coat and tail.  ',
                'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmm8R7XuySNud69w3Bn0SU6LzKlTONyOPxqT_sRlVk6hQdq3TZ',
                'userId' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
