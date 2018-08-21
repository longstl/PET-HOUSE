<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
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
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'title' => 'Bichon Frise Puppies For Adoption',
                'description' => 'The Bichon Frise is a small, sturdy dog. When the dog is clipped in a show cut the body gives off a round appearance. The skull is slightly rounded.',
                'images' => 'https://kenh14cdn.com/2016/c16-1469688809484.jpg',
                'categoryId' => '1',
                'price' => 180,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Boo Puppies For Adoption',
                'description' => 'The Chow Chow is a true masterpiece of dignity and beauty. They possess the unique characteristic of having a blue-black tongue. They are keenly intelligent, have an independent spirit, and display a dignified demeanor.',
                'images' => 'https://kenh14cdn.com/2016/c11-1469688809458.jpg',
                'categoryId' => '1',
                'price' => 185,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'King Charles Spaniel Puppies For Adoption',
                'description' => 'King Charles Spaniel has a large muzzle, large eyes, and long, highly set ears.',
                'images' => 'https://kenh14cdn.com/2016/c6-1469688809426.jpg',
                'categoryId' => '1',
                'price' => 200,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Lhasa Apso Puppies For Adoption',
                'description' => 'They have long and silky fur with miniature size. Eyes and nose are distinctively black. They have punch face.',
                'images' => 'https://baomoi-photo-1-td.zadn.vn/w700_r1/18/01/10/139/24577236/6_153481.jpg',
                'categoryId' => '1',
                'price' => 177,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Maltese Puppies For Adoption',
                'description' => 'The Maltese exudes great joy and delight. They are highly intelligent, animated, and playful. They are very social.',
                'images' => 'https://baomoi-photo-1-td.zadn.vn/w700_r1/15/09/26/139/17593519/14.jpg',
                'categoryId' => '1',
                'price' => 220,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Minpin Puppies For Adoption',
                'description' => 'The Minpin is a small, compact, square dog. The head is in proportion to the body. The skull appears flat, tapering forward toward the muzzle.',
                'images' => 'http://www.dogbazar.org/wp-content/uploads/2015/07/minpin-puppy-300x168.jpg',
                'categoryId' => '1',
                'price' => 167,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Collie Puppies For Adoption',
                'description' => 'The Collie is a large, lean, strong dog. The top of the skull is flat and the eyebrows are arched.',
                'images' => 'http://www.dogbazar.org/wp-content/uploads/2015/07/Collie-Puppies-1-300x230.jpg',
                'categoryId' => '1',
                'price' => 267,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'French Bull Dog Puppies For Adoption',
                'description' => 'The Bulldog is moderate in size, heavy, and built low to the ground. They are strong, kind, amiable, and courageous. This breed is not vicious or aggressive and is quite dignified. They possess a passive demeanor and have a quirky sense of humor.',
                'images' => 'http://www.dogbazar.org/wp-content/uploads/2013/10/french-bulldog-2-300x200.jpg',
                'categoryId' => '1',
                'price' => 230,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Alaskan Malamute Puppies For Adoption',
                'description' => 'The Alaskan Malamute is the largest of the Arctic dogs. This thick, well-built dog is solid with a plumed tail that is held over the back.',
                'images' => 'http://www.dogbazar.org/wp-content/uploads/2015/07/alaskan-malamute-pup.jpg',
                'categoryId' => '1',
                'price' => 188,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Jack Russell Terrier Puppies For Adoption',
                'description' => 'The Jack Russell Terrier is sturdy, hardy, and robust in appearance. They are outgoing with a keen expression. They have an inquisitive nature. This compact breed is very vocal but is never “yappy”.',
                'images' => 'http://www.dogbazar.org/wp-content/uploads/2013/10/Jack-Russell-Terrier-Puppies.jpg',
                'categoryId' => '1',
                'price' => 258,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Seal Point Persian kitten 3 weeks old',
                'description' => 'New! Elite Persian kitten from Europe. In excellent breed type. male, 2.5 month old. Litter box trained. Can deliver to other states and worldwide . For video and parents pictures please call 347-387-1796 or Email Email Me Here. We provide 180 days warranty on all our kittens and puppies!!! Please check our web site: www.catsdogs.us for complete listing.',
                'images' => 'http://www.elifehow.com/uploads/images/2017/10/1508309541722TW4.jpg',
                'categoryId' => '2',
                'price' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Red Shaded Male Scottish Straight',
                'description' => 'This beautiful kitten is available for reservation. The best time for a kitten to go to a new loving home is around 3 months old after the kitten gets its second shot and deworming so his immune system is strong enough to adjust to a new environment. Our kittens are born in New York and been raised in a loving home atmosphere ensuring they get enough of attention and care. Kittens are litter trained. They are very affectionate and playful!!! Love people and kids! We commit to healthy and quality reproduction as well as outstanding customer service and experience. We offer 1 year warranty for genetic health problems. Parents are TICA registered. Registration for a kitten is additional $300. To reserve a kitten we accept $400 nonrefundable deposit via PayPal or Venmo. You are welcome to visit our cattery or FaceTime to see the kitten. Shipping to another state is available. We ship our kittens with a nanny in the cabin so its less stress for kitten and its additional $400. We don not recommend to ship kittens by Cargo, its only $100 difference. Enjoy your kitten!',
                'images' => 'https://static.tildacdn.com/tild3064-3335-4563-a233-343761393664/Photo_Apr_11_8_13_28.jpg',
                'categoryId' => '2',
                'price' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'New! Elite Persian kitten from Europe',
                'description' => 'New! Elite Persian kitten from Europe. In excellent breed type. male, 2 month old. Litter box trained. Can deliver to other states and worldwide . For video and parents pictures please call 347-387-1796 or Email Email Me Here.',
                'images' => 'https://kenh14cdn.com/2018/5/21/photo-13-1526915711548979409596.jpg',
                'categoryId' => '2',
                'price' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Female White Persian kitten',
                'description' => 'Born July 18th. Take home day after September 18th, with shots, deworming and health certificate. Parents are CFA registered FIV/ FELV- negative no PKD illness in their generation. Breeding rights are extra.',
                'images' => 'https://tinnhanh.dkn.tv/wp-content/uploads/2018/04/la-meo-thi-phai-bat-chuot-anh-0.jpg',
                'categoryId' => '2',
                'price' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Male White Persian Kitten',
                'description' => 'Born on July 18th and will be ready to take home the day after September 18th with shots, deworming and health certificates. Parents are CFA registered.',
                'images' => 'https://baomoi-photo-1-td.zadn.vn/w700_r1/18/04/14/139/25661852/8_106289.jpg',
                'categoryId' => '2',
                'price' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'blue cream female persian kitten reserved',
                'description' => 'Born July 18th and will be ready to take home the day after September 18th with shots, deworming and health certificate. Parents are CFA registered, FIV / FELV -negative no PKD illness in their generation. Breeding rights are extra.',
                'images' => 'https://baomoi-photo-1-td.zadn.vn/w700_r1/18/04/14/139/25661852/5_123355.jpg',
                'categoryId' => '2',
                'price' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Cat',
                'description' => 'Ugly fluffy dogs',
                'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVTttxDHEya3gQuiHCz1avTmyDc_mChorNQCD2iYwbQGsdxU4c',
                'categoryId' => '2',
                'price' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'A gorgeous blue cream
',
                'description' => 'molly is looking for her forever home...she is 11wks.. comes vet ck,wormed1st shot papers $500 Blue cream & white dilute tortoiseshell persian.',
                'images' => 'https://kenh14cdn.com/2017/taken-byhana-kitty-13-png-700-1491293405359.jpg',
                'categoryId' => '2',
                'price' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Gorgeous boy Persian red and white kitten',
                'description' => 'Wonderful, sweet personality, loves to play and purrs a lot!!!',
                'images' => 'https://cdn.pose.com.vn/legacy/images/baiviet/201609/scrape_14734787761731_m6-1473395779251.jpg',
                'categoryId' => '2',
                'price' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Cfa chocolate point male persian himalayan kitten',
                'description' => 'CFA Chocolate Point Male Persian Himalayan Kitten',
                'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQX_pMcjp4iEKdSdi_lTbWyHctczLj7KQtw9QJ6t-f2sladfZbLHA',
                'categoryId' => '2',
                'price' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Mad About Dog Bark Stop Collar',
                'description' => 'Mad about dog presents pet collar charm. It is made from plastic material and is suitable for dog’s . It is black with white in colour, has plain design and has a shape.',
                'images' => 'http://www.dogbazar.org/wp-content/uploads/2017/01/814RLwHXgYL._SL1500_.jpg',
                'categoryId' => '3',
                'price' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Doggy Dolly Doggydolly Shirt For Dogs',
                'description' => 'Doggy dolly presents pet apparels and accessories. It is suitable for dog’s. It is made from cotton material and is multi-coloured in colour. It has a . This item contains shirt',
                'images' => 'http://www.dogbazar.org/wp-content/uploads/2017/02/91W4qnSE0SL._SL1500_.jpg',
                'categoryId' => '3',
                'price' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'Mad About Dog Cotton Shoes ',
                'description' => 'This shoes for dogs from the house of Mad About Dog is made of cotton material. It comes in pink color. This shoes gives utmost comfort for your pets and it can be hand washed',
                'images' => 'http://www.dogbazar.org/wp-content/uploads/2017/01/71T8TWLqjL._SL1500_.jpg',
                'categoryId' => '3',
                'price' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'Mad About Dog Fancy Clip',
                'description' => 'Mad about dog presents pet collar charm. It is made from net material and is suitable for dog’s . It is black in colour, has plain design and has a round shape.',
                'images' => 'http://www.dogbazar.org/wp-content/uploads/2017/02/913MOgI1hKL._SL1500_.jpg',
                'categoryId' => '3',
                'price' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'Mad About Dog Fancy Butterfly Dress',
                'description' => 'Mad about dog presents pet apparels and accessories. It is suitable for dog’s. It is made from chiffon material and is pink in colour. It has a plain. This item contains one dress.',
                'images' => 'http://www.dogbazar.org/wp-content/uploads/2017/01/A10C0UUc6VL._SL1500_.jpg',
                'categoryId' => '3',
                'price' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'Mad About Dog Fancy Clip, 16 Cm X 16 Cm',
                'description' => 'Mad about dog presents pet collar charm. It is made from net material and is suitable for dog’s . It is black in colour, has plain design and has a round shape.',
                'images' => 'http://www.dogbazar.org/wp-content/uploads/2017/02/91FsX47tZUL._SL1500_-1.jpg',
                'categoryId' => '3',
                'price' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'Mad About Dog Fancy Collar 1',
                'description' => 'Mad about dog presents pet collar charm. It is made from polyester material and is suitable for dog’s . It is pink in colour, has embellished design and has a rectangle shape.',
                'images' => 'http://www.dogbazar.org/wp-content/uploads/2017/01/81YcufC1jUL._SL1500_.jpg',
                'categoryId' => '3',
                'price' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'Mad About Dog Fancy Collar 2',
                'description' => 'Mad about dog presents pet collar charm. It is made from stone material and is suitable for dog’s . It is transparent in colour, has embellished design and has a rectangle shape.',
                'images' => 'http://www.dogbazar.org/wp-content/uploads/2017/01/81qZaUg5jIL._SL1500_.jpg',
                'categoryId' => '3',
                'price' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'Mad About Dog Fancy Hats 1',
                'description' => 'Mad about dog presents pet apparels and accessories. It is suitable for dog’s. It is made from velvet material and is red in colour. It has a plain. This item contains one piece hat',
                'images' => 'http://www.dogbazar.org/wp-content/uploads/2017/01/91ebS3m3dwL._SL1500_.jpg',
                'categoryId' => '3',
                'price' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'Mad About Dog Fancy Hats 2',
                'description' => 'Mad about dog presents pet apparels and accessories. It is suitable for dog’s. It is made from net material and is navy blue in colour. It has a plain. This item contains one piece hat.',
                'images' => 'http://www.dogbazar.org/wp-content/uploads/2017/01/A13hrYeJanL._SL1500_.jpg',
                'categoryId' => '3',
                'price' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],


            [
                'title' => 'Cat for cat TT',
                'description' => 'HAPPY TOGETHER FOR LIVING ROOMS - RAISING TO COLLECTING ANIMALS',
                'images' => 'http://petstore.com.vn/379-814-large/chuot-bong-cho-meo-tt.jpg',
                'categoryId' => '3',
                'price' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Gauntlet cat with TT bulb',
                'description' => 'Colorful jute cat toy with cage balloons inside - with cylindrical roller design that makes the cats even more exciting.',
                'images' => 'http://petstore.com.vn/318-597-large/do-choi-meo-hinh-ong-kem-bong-tt.jpg',
                'categoryId' => '3',
                'price' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Cat scratches TT',
                'description' => 'Mini cat fish toy with colorful jute wrapped around to help the cat grind',
                'images' => 'http://petstore.com.vn/317-596-large/ca-meo-cao-tt.jpg',
                'categoryId' => '3',
                'price' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Cat\'n Mouse cat litter TT',
                'description' => 'Cat\'n Mouse toy is made of non-toxic plastic, on the face of the fabric is suitable for cat grinding. The product is specially designed with a rotary mouse motor inside to attract, stimulate cats, and training the mouse processing instincts in the cat family.',
                'images' => 'http://petstore.com.vn/313-586-large/bo-do-choi-meo-gan-chuot-quay-cat-mouse-tt.jpg',
                'categoryId' => '3',
                'price' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Dougez TT three-layer cat kit',
                'description' => 'Dougez\'s products are made from environmentally friendly high-grade PP, ensuring no toxicity. Three-tiered cat toy set with 3 plastic balls attached, can help the owner to set the number of balls in the floor. Anti-skid anti-slippering helps keep your cat safe from catastrophic raids - it\'s a must-have item to help your cat cope with stress, less loneliness at home alone.',
                'images' => 'http://petstore.com.vn/312-582-large/bo-do-choi-meo-3-tang-dougez-tt.jpg',
                'categoryId' => '3',
                'price' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Antique bells for dogs',
                'description' => 'Dog bells for dogs or cats for many models',
                'images' => 'http://petstore.com.vn/51-127-large/chuong-co-cho-cho-nhieu-mau.jpg',
                'categoryId' => '3',
                'price' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Mouse for cat TT',
                'description' => 'Mouse-shaped toys made of multicolored fabric, used as toys for cats',
                'images' => 'http://petstore.com.vn/216-357-large/chuot-dan-cho-meo-tt.jpg',
                'categoryId' => '3',
                'price' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'CAT CAT FISH CAT',
                'description' => 'Mouse-shaped toys made of multicolored fabric, used as toys for cats',
                'images' => 'http://petstore.com.vn/215-356-large/can-cau-meo-fat-cat-tt.jpg',
                'categoryId' => '3',
                'price' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'Cat scratches',
                'description' => 'Cats\' nail grippers - using natural jute material that surrounds the wood, are essential to avoid scratching the inside of your home such as couches, car seats, etc.',
                'images' => 'http://petstore.com.vn/212-408-large/ban-meo-cao.jpg',
                'categoryId' => '3',
                'price' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'Spring-loaded felt felt',
                'description' => 'A cat-and-mouse toy with a dummy mouse is attached to the sole by a hard rubber spring that covers the outside of the environment, swings back and forth repeatedly to attract attention and stimulate the mat. the power of cats.',
                'images' => 'http://petstore.com.vn/211-407-large/chuot-lo-xo-bc-ni.jpg',
                'categoryId' => '3',
                'price' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],


            [
                'title' => 'Foods',
                'description' => 'WholeHearted Grain Free Chicken Formula Dry Cat Food, 12 lbs.',
                'images' => 'https://petco.scene7.com/is/image/PETCO/2668821-center-1?$ProductDetail-large$',
                'categoryId' => '4',
                'price' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'title' => 'Grain-Free Natural Nutrition',
                'description' => 'Max Power cat food is the best brand',
                'images' => 'https://www.petmart.vn/wp-content/uploads/2018/05/thuc-an-cho-meo-grain-free-natural-nutrition-595x595.jpg',
                'categoryId' => '4',
                'price' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Food cat',
                'description' => 'Max Power cat food is the best brand 1',
                'images' => 'https://www.petmart.vn/wp-content/uploads/2017/09/thuc-an-cho-meo-anf-skin-care-350x350.jpg',
                'categoryId' => '4',
                'price' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'TetraFin Plus Goldfish Flakes, 7.06 oz.',
                'description' => 'High protein fish meal and easy to digest for reduced fish waste. Includes patented ProCare blend. Mix of nutritious ingredients with added vitamins, minerals, and trace elements to support the immune system. Enhances vibrant colors.',
                'images' => 'https://s7d1.scene7.com/is/image/PETCO/2210466-center-1?$ProductDetail-large$',
                'categoryId' => '4',
                'price' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'Omega One Goldfish Small Sinking Pellets, 4.2 oz.',
                'description' => 'Made with fresh seafood from sustainable Alaskan fisheries. Contains no meals and fewer starches. Rich in Omega 3 and 6 fatty acids.',
                'images' => 'https://s7d1.scene7.com/is/image/PETCO/1483862-center-1?$ProductDetail-large$',
                'categoryId' => '4',
                'price' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'Omega One Freeze Dried Brine Shrimp, .67 oz.',
                'description' => 'Brine Shrimp offers an excellent opportunity to "color up" your fish and has been a favorite treat for both fresh and marine fish for decades.',
                'images' => 'https://s7d1.scene7.com/is/image/PETCO/1483919-center-1?$ProductDetail-large$',
                'categoryId' => '4',
                'price' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'TetraColor Plus Tropical Flakes, 7.06 oz.',
                'description' => 'High protein fish meal and easy to digest for reduced fish waste. Includes patented ProCare blend. Mix of nutritious ingredients with added vitamins, minerals, and trace elements to support the immune system. Enhances vibrant colors.',
                'images' => 'https://s7d1.scene7.com/is/image/PETCO/2210431-center-1?$ProductDetail-large$',
                'categoryId' => '4',
                'price' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'Tetra EasyBalance Water Treatment',
                'description' => '3.38 oz., Treats up to 100 gal. For freshwater use only. Reduces frequent water changes and keeps your aquarium water biologically balanced for up to 6 months. Formulated to stabilize pH and alkalinity levels vital for fish and plants.',
                'images' => 'https://s7d1.scene7.com/is/image/PETCO/976938-center-1?$ProductDetail-large$',
                'categoryId' => '4',
                'price' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'API Stress Coat Aquarium Water Conditioner, 4 oz.',
                'description' => 'Replaces the natural protective slime coating fish need in times of stress, removes chlorine, neutralizes chloramines and removes heavy metals.',
                'images' => 'https://s7d1.scene7.com/is/image/PETCO/38407-center-1?$ProductDetail-large$',
                'categoryId' => '4',
                'price' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'Weruva Classics Mideast Feast with Grilled Tilapia',
                'description' => 'Weruva Classics natural cat food, made with the highest quality cuts of meat or lean fish loins provide high protein and low fat recipes. All meat is hand flaked right off the bone and hand packed for optimal quality. Weruva Classics feature limited ',
                'images' => 'https://petco.scene7.com/is/image/PETCO/2892436-center-1?$ProductDetail-large$',
                'categoryId' => '4',
                'price' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'Weruva Classics Mideast Feast with Grilled Tilapia in Gravy Wet Cat Food',
                'description' => 'Max Power cat food is the best brand 1',
                'images' => 'https://www.petmart.vn/wp-content/uploads/2017/09/thuc-an-cho-meo-anf-skin-care-350x350.jpg',
                'categoryId' => '4',
                'price' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'Bayer Tapeworm Dewormer Tablets for Cats, 3 pack',
                'description' => 'TAPEWORM DEWORMER (praziquantel) tablets will remove the common tapeworms, Dipylidium caninum and Taenia taeniaeformis, from cats and kittens.',
                'images' => 'https://s7d1.scene7.com/is/image/PETCO/2674501-center-1?$ProductDetail-large$',
                'categoryId' => '4',
                'price' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'Beef Feast Collection Wet Cat Food Variety Pack, 3 oz., Count of 30',
                'description' => 'Offer your discerning cat the gourmet tastes she loves with Purina Fancy Feast Gravy Lovers Poultry & Beef Feast Collection wet cat food. Chicken, turkey and beef give this collection the savory taste she craves, and the rich gravy in every serving of this canned cat food is sure to have her licking her dish clean to the last drop. Small, delicate bites slow-cooked to perfection deliver a tempting texture, and the assortment of flavors makes it easy to keep your cat\'s curiosity piqued at mealtime. With essential vitamins and nutrients to support her overall health and wellness, this gourmet wet cat food lets you feel good about the foods you put into her dish. Offer up a different delectable flavor at each feeding, and show your favorite feline friend just how important she is to you and your family with this collection of mouthwatering Fancy Feast Gravy Lovers cat food cans.',
                'images' => 'https://petco.scene7.com/is/image/PETCO/2468264-center-1?$ProductDetail-large$',
                'categoryId' => '4',
                'price' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'Purina Fancy Feast Classic Pate Collection Chicken Feast Wet Cat Food, 3 oz.',
                'description' => 'Get your cat excited about mealtime with Purina Fancy Feast Chicken Feast Collection wet cat food. Real, tender chicken delivers the poultry taste she craves, and each of the three protein-rich entrees features a different texture, making each variety a true feast for her senses. High-quality ingredients let you feel good about the foods you offer to your darling cat, and the exceptional level of taste lets her know she\'s the center of your world. With essential vitamins and minerals to support your adult cat\'s overall health and wellness, this collection of gourmet wet cat foods is as nutritious as it is delicious.',
                'images' => 'https://petco.scene7.com/is/image/PETCO/1199811-center-1?$ProductDetail-large$',
                'categoryId' => '4',
                'price' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'FRONTLINE Plus for Dogs - Purple, For Dogs 45 to 88 lbs.',
                'description' => 'FRONTLINE Plus for Dogs - Purple,Frontline flea and tick keeps killing fleas and ticks for at least four weeks,Longest-lasting, most complete spot-on flea and tick protection available,Flea treatment kills 100% of adult fleas on your dog within 24-48 hours',
                'images' => 'https://petco.scene7.com/is/image/PETCO/966541-center-1?$ProductDetail-large$',
                'categoryId' => '4',
                'price' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'title' => 'Cats in the Kitchen Chicken Frick \'A Zee Chicken Recipe Au Jus Wet Cat Food, 6 oz., Case of 24',
                'description' => 'Cats in the Kitchen natural cat food is made with premium cuts of meat or fish that are combined to form the perfect recipe for your kitchen carnivore! As part of the Weruva family, Cats in the Kitchen cat food is high in protein and low fat. Cats in the Kitchen recipes are perfect for the finicky feline that enjoys a variety of proteins in every can!',
                'images' => 'https://petco.scene7.com/is/image/PETCO/2892604-center-1?$ProductDetail-large$',
                'categoryId' => '4',
                'price' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'ANF SALMON & POTATO',
                'description' => 'Max Power cat food is the best brand 2',
                'images' => 'https://www.petmart.vn/wp-content/uploads/2017/09/thuc-an-cho-meo-vi-ca-hoi-khoai-tay-anf-salmon-potato-595x595.jpg',
                'categoryId' => '4',
                'price' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
