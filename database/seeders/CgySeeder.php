<?php

namespace Database\Seeders;

use App\Models\Cgy;
use Illuminate\Database\Seeder;
use Faker;

class CgySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cgy::truncate();
        $faker = Faker\Factory::create('zh_TW');

        Cgy::create([
            'title'=>'J‘ADORE',
            'viedo'=>('storage/index/dior1.mp4'),
            'topproductname' =>'J‘ADORE',
            'topproducttag' =>' J‘adore is a magnificently balanced and multifaceted vision – an ode to fearless women.',
            'topproductpic' => ('storage/index/topproduct1.jpg'),
            'topproducturl'=> $faker->url,
            'peoplename'=>'莎莉賽隆 Charlize Theron',
            'peopledesc'=> '性感而無畏，優雅且勇敢。這位同時擁有奧斯卡和金球獎雙料影后頭銜的當代女神，代言Dior J’adore香水多年來，不僅成為耀眼動人的J’adore 女郎典範讓女孩們知道自己可以很美麗優雅，也可以活出生命的意義，感受熱情；有無限可能。',
            'peoplepic'=>('storage/index/people1.jpg'),
            'Demachydesc'=> '「J’adore是一款與眾不同的香氛，不僅流露出難以抵擋的醉人魅力，同時展現獨一無二的個性。 香氣性感嫵媚，但又輕盈流暢。J’adore完美融合互相對立的元素，將經典花香調幻化為前所未見的迷人作品，散發神秘謎樣氣息。J’adore創造出一朵在自然界不存在的理想花朵。」',
            'bannerpic' => ('storage/index/banner1.jpg'),
            'productpic'=>('storage/index/product01.jpg'),
            // 'productname' =>$faker->realText(20),
            // 'producturl'=> $faker->url,
            // 'richness'=>$faker->numberBetween(1, 5),
            // 'price'=>$faker->numberBetween(1000, 3000),
            // 'desc' => '滾珠瓶 20 ML',
            'enabled' => 1,
            'sort' => 1
        ]);
        Cgy::create([
            'title'=>'MISS DIOR',
            'viedo'=>('storage/index/dior2.mp4'),
            'topproductname' =>'MISS DIOR',
            'topproducttag' =>'Miss Dior is a hymn to love, emblematic of Dior’s femininity and Couture spirit.',
            'topproductpic' => ('storage/index/topproduct2.jpg'),
            'topproducturl'=> $faker->url,
            'peoplename'=>'娜塔莉波曼 Natalie Portman',
            'peopledesc'=> '展現一如往常的美麗及優雅，穿著以一千種柔潤花色手工繡縫的禮服，象徵Miss Dior香水搜羅了鈴蘭、風信子、牡丹、玫瑰、紫羅蘭、紫丁香、鐵線蓮、藍鐘花…等多種經典花香，以細緻的白麝香為基調、配以清新的柑橘前調和牡丹中掉，成了一款溫柔花香的香氛，散發著女人味卻年輕不失甜美。 ',
            'peoplepic'=>('storage/index/people2.jpg'),
            'Demachydesc'=> '「在創作Miss Dior 漫舞玫瑰淡香水時，我並非想創造出一朵嬌豔的玫瑰，而是希望它能化身為盛放的花海。我想以一種自然、並充滿生命力的感覺來打造這支香水，就像我小時候第一次看到五月時盛開的花田一般。對我來說，玫瑰正是這種美景的代表，因此我希望這支香水可以盡可能地貼近花的本質。」',
            'bannerpic' => ('storage/index/banner2.jpg'),
            'productpic'=>('storage/index/product01.jpg'),
            // 'productname' =>$faker->realText(20),
            // 'producturl'=> $faker->url,
            // 'richness'=>$faker->numberBetween(1, 5),
            // 'price'=>$faker->numberBetween(1000, 3000),
            // 'desc' => $faker->realText(50),
            'enabled' => 1,
            'sort' => 2,
        ]);
        Cgy::create([
            'title'=>'JOY BY DIOR',
            'viedo'=>('storage/index/dior3.mp4'),
            'topproductname' =>'JOY BY DIOR',
            'topproducttag' =>'JOY by Dior is an ode to pleasure and to life told through the Eau de Parfum',
            'topproductpic' => ('storage/index/topproduct3.jpg'),
            'topproducturl'=> $faker->url,
            'peoplename'=>'珍妮佛勞倫斯 Jennifer Lawrence',
            'peopledesc'=> 'JOY！ 簡短卻能喚起豐富的情緒和感受，無拘無束且率性奔放的細緻明亮氣味，像光和水流般包覆全身，無人不被這股歡愉所渲染，她的年輕活力與美麗，以及個人特質中所表現的自信與堅強，正如香水一樣。 ',
            'peoplepic'=>('storage/index/people3.jpg'),
            'Demachydesc'=> '「這款全新JOY by Dior系列香氛的創作靈感來自於如同絢爛煙火般的奔放花朵。為了突顯這款香氛感性的一面，我揉合了木質香調，使其溫柔包覆核心香氣，綻放全新璀璨花香。」',
            'bannerpic' => ('storage/index/banner3.jpg'),
            'productpic'=>('storage/index/product01.jpg'),
            // 'productname' =>$faker->realText(20),
            // 'producturl'=> $faker->url,
            // 'richness'=>$faker->numberBetween(1, 5),
            // 'price'=>$faker->numberBetween(1000, 3000),
            // 'desc' => $faker->realText(50),
            'enabled' => 1,
            'sort' => 3,
        ]);

        Cgy::create([
            'title'=>'SAUVAGE',
            'viedo'=>('storage/index/dior4.mp4'),
            'topproductname' =>'SAUVAGE ',
            'topproducttag' =>'A composition signed with a raw freshness, between power and nobility.',
            'topproductpic' => ('storage/index/topproduct4.jpg'),
            'topproducturl'=> $faker->url,
            'peoplename'=>'強尼戴普 Johnny Depp',
            'peopledesc'=> 'DIOR推出男香曠野之心淡香水邀請好萊塢巨星強尼戴普擔任代言人!不同以往男香所強調的都會與時尚雅痞風潮，全新的曠野之心淡香水以一抹悅人的柑橘香調煥現其中，強烈而純淨的芳香組合，替男人描繪出一個強烈而狂野不羈的靈魂。 ',
            'peoplepic'=>('storage/index/people4.jpg'),
            'Demachydesc'=> '「曠野之心是一首無盡的樂曲。濃烈的香調，依然充滿細迷人的香氣細節，像是原野天際線獨一無二的光束。在我心中，這款曠野之心香精，是令人心盪神馳的清新、邂逅滑順深沈東方調的衝擊。依然有著曠野之心強大的靈魂，但瀰漫著夜行的氣息，動物般的吸引力，同時更加柔潤。」',
            'bannerpic' => ('storage/index/banner4.jpg'),
            'productpic'=>('storage/index/product01.jpg'),
            // 'productname' =>$faker->realText(20),
            // 'producturl'=> $faker->url,
            // 'richness'=>$faker->numberBetween(1, 5),
            // 'price'=>$faker->numberBetween(1000, 3000),
            // 'desc' => $faker->realText(50),
            'enabled' => 1,
            'sort' => 4,
        ]);
    }
}
