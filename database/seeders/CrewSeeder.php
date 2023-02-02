<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Currency;
use App\Models\Document;
use App\Models\Job;
use App\Models\Klien;
use App\Models\National;
use App\Models\Port;
use App\Models\Shipname;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CrewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //crew jobs

        $currency = [
            ['symbol' => 'Rp', 'name' => 'Rp (Indonesian Rupiah)'],
            ['symbol' => 'RM', 'name' => 'RM (Malaysian Ringgit)'],
            ['symbol' => '₱', 'name' => '₱ (Phillipphine Peso)'],
            ['symbol' => '฿', 'name' => '฿ (Thai Baht)'],
            ['symbol' => '៛', 'name' => '៛ (Cambodian Riel)'],
            ['symbol' => '₫', 'name' => '₫ (Vietnamese Dong)'],
            ['symbol' => '₭', 'name' => '₭ (Lao Kip)'],
            ['symbol' => 'Ks', 'name' => 'Ks (Myanmar Kyat)'],
            ['symbol' => '৳', 'name' => '৳ (Bangladeshi Taka)'],
            ['symbol' => '₹', 'name' => '₹ (Indian Rupee)'],
            ['symbol' => 'Rs', 'name' => 'Rs (Pakistani & Sri Lankan Rupee)'],
            ['symbol' => 'SAR', 'name' => 'SAR (Saudi Riyal)'],
            ['symbol' => 'AED', 'name' => 'AED (UAE Dirham)'],
            ['symbol' => 'BD', 'name' => 'BD (Bahrain Dinar)'],
            ['symbol' => 'QR', 'name' => 'QR (Qatari Riyal)'],
            ['symbol' => '¥', 'name' => '¥ (Japanese Yen & Chinese Yuan)'],
            ['symbol' => '₩', 'name' => '₩ (Korean Won)'],
            ['symbol' => '₽', 'name' => '₽ (Russian Ruble)'],
            ['symbol' => '₴', 'name' => '₴ (Ukrainian Hrynia)'],
            ['symbol' => 'US$', 'name' => 'US$ (US Dollar)'],
            ['symbol' => 'CA$', 'name' => 'CA$ (Canadian Dollar)'],
            ['symbol' => 'AU$', 'name' => 'AU$ (Australian Dollar)'],
            ['symbol' => 'NZ$', 'name' => 'NZ$ (New Zealand Dollar)'],
            ['symbol' => 'SG$', 'name' => 'SG$ (Singapore Dollar)'],
            ['symbol' => 'HK$', 'name' => 'HK$ (Hong Kong Dollar)'],
            ['symbol' => '€', 'name' => '€ (Euro)'],
            ['symbol' => 'Fr', 'name' => 'Fr (Swiss Franc)'],
            ['symbol' => '£', 'name' => '£ (British Pound Sterling)'],

        ];

        Currency::insert($currency);

        $jobs = [
            ['name' => 'Master/Captain', 'code' => 'M'],
            ['name' => 'Fishing Master', 'code' => 'F/M'],
            ['name' => 'Chief Officer', 'code' => 'C/O'],
            ['name' => 'Chief Engineer', 'code' => 'C/E'],
            ['name' => 'Observer', 'code' => 'OBS'],
            ['name' => '1st Officer', 'code' => '1/O'],
            ['name' => '2nd Officer', 'code' => '2/O'],
            ['name' => '3rd Officer', 'code' => '3/O'],
            ['name' => 'Apprentice Deck Officer', 'code' => 'A/O'],
            ['name' => 'Deck Cadet', 'code' => 'D/Cadet'],
            ['name' => '1st Engineer', 'code' => '1/E'],
            ['name' => '2st Engineer', 'code' => '2/E'],
            ['name' => '3rd Engineer', 'code' => '3/E'],
            ['name' => 'Apprentice Engineer', 'code' => 'A/E'],
            ['name' => 'Engine Cadet', 'code' => 'E/Cadet'],
            ['name' => 'Bosun', 'code' => 'BS'],
            ['name' => 'Deck', 'code' => 'D'],
            ['name' => 'Engine', 'code' => 'E'],
            ['name' => 'Ice Master', 'code' => 'IM'],
            ['name' => 'Assistant Ice Master', 'code' => 'AI/AIM'],
            ['name' => 'Quarter Master', 'code' => 'QM'],
            ['name' => 'Chief Cook', 'code' => 'CC'],
            ['name' => 'Assistant Cook', 'code' => 'AC'],

        ];

        Job::insert($jobs);


        $company = [

            ['user_id' => 1, 'nama' => 'PT. Angkasa Akbar Taruna', 'code' => 'AAT'],
            ['user_id' => 1, 'nama' => 'PT. Japan Tuna Indonesia', 'code' => 'JTI'],
            ['user_id' => 1, 'nama' => 'PT. Akagami Kaiza Indonesia', 'code' => 'AKAGAMI']

        ];

        Company::insert($company);



        $client = [
            ['user_id' => 1, 'nama' => 'Japan Fisheries (JF) Cooperatives', 'code' => 'ZENGYOREN'],
            ['user_id' => 1, 'nama' => 'National Ocean Tuna Fishery Association', 'code' => 'ENKATSUKYO'],
            ['user_id' => 1, 'nama' => 'National Offshore Tuna Fisheries Association', 'code' => 'KINKATSUKYO'],
            ['user_id' => 1, 'nama' => 'Japan Tuna Fisheries Co-operative Association', 'code' => 'NIKKATSUREN'],
            ['user_id' => 2, 'nama' => 'Japan Tuna Fisheries Corporation', 'code' => 'JTFC'],
            ['user_id' => 1, 'nama' => 'The Overseas Fishery Cooperation Foundation of Japan', 'code' => 'OFCF'],
            ['user_id' => 1, 'nama' => 'Japan Far Seas Purse Seine Fishing Association', 'code' => 'KAIMAKI'],
            ['user_id' => 1, 'nama' => 'Japan Marine Service Co. Ltd.', 'code' => 'JMS'],
            ['user_id' => 1, 'nama' => 'Universal Trading Co. Ltd.', 'code' => 'UNIVERSAL'],
            ['user_id' => 1, 'nama' => 'Fuji Bussan Co. Ltd.', 'code' => 'FUJI'],
            ['user_id' => 1, 'nama' => 'Koyo Corporation', 'code' => 'KOYO'],
            ['user_id' => 1, 'nama' => 'Sanko Suisan Co. Ltd.', 'code' => 'SANKO'],
            ['user_id' => 1, 'nama' => 'JIF 21 Inc.', 'code' => 'JIF'],
            ['user_id' => 1, 'nama' => 'Yamada Suisan Co. Ltd.', 'code' => 'YAMADA'],
            ['user_id' => 1, 'nama' => 'Seafarers Maritime Services Pte. Ltd.', 'code' => 'SMS'],
            ['user_id' => 1, 'nama' => 'Taiseimaru Kaiun Kaisha Ltd.', 'code' => 'TAISEI'],
            ['user_id' => 1, 'nama' => 'Usufuku Honten Co. Ltd.', 'code' => 'USUFUKU'],

        ];

        Klien::insert($client);

        $ports = [
            ['name' => 'Brisbane (Australia)'],
            ['name' => 'Fremantle (Australia)'],
            ['name' => 'Hobart (Australia)'],
            ['name' => 'Sydney (Australia)'],
            ['name' => 'Halifax (Canada)'],
            ['name' => 'St. John"s (Canada)'],
            ['name' => 'Guayaquil (Ecuador)'],
            ['name' => 'Suva (Fiji)'],
            ['name' => 'Reykjavik (Iceland)'],
            ['name' => 'Benoa (Bali) (Indonesia)'],
            ['name' => 'Cigading (Banten) (Indonesia)'],
            ['name' => 'Cork (Ireland)'],
            ['name' => 'Abashiri (Japan)'],
            ['name' => 'Akita (Japan)'],
            ['name' => 'Choshi (Japan)'],
            ['name' => 'Ehime (Japan)'],
            ['name' => 'Fukuoka (Japan)'],
            ['name' => 'Hachinohe (Japan)'],
            ['name' => 'Hiroshima (Japan)'],
            ['name' => 'Ishinomaki (Japan)'],
            ['name' => 'Kagawa (Japan)'],
            ['name' => 'Kagoshima (Japan)'],
            ['name' => 'Kanagawa (Japan)'],
            ['name' => 'Kesennuma (Japan)'],
            ['name' => 'Kochi (Japan)'],
            ['name' => 'Kushiro (Japan)'],
            ['name' => 'Miyazaki (Japan)'],
            ['name' => 'Nagasaki (Japan)'],
            ['name' => 'Otaru (Japan)'],
            ['name' => 'Shimizu (Japan)'],
            ['name' => 'Yaizu (Japan)'],
            ['name' => 'Majuro (Marshall Islands)'],
            ['name' => 'Maputo (Mozambique)'],
            ['name' => 'Noumea (New Caledonia)'],
            ['name' => 'Auckland (New Zealand)'],
            ['name' => 'Wellington (New Zealand)'],
            ['name' => 'Balboa (Panama)'],
            ['name' => 'Callao (Peru)'],
            ['name' => 'Singapore (Singapore)'],
            ['name' => 'Cape Town (South Africa)'],
            ['name' => 'Las Palmas (Spain)'],
            ['name' => 'Guam (USA)'],
            ['name' => 'Honolulu (Hawaii) (USA)'],
            ['name' => 'Los Angeles (USA)'],
            ['name' => 'Saipan (USA)'],
        ];

        Port::insert($ports);

        $nationals = [
            ['name' => 'Indonesia'],
            ['name' => 'Malaysia'],
            ['name' => 'Brunei Darussalam'],
            ['name' => 'Singapore'],
            ['name' => 'Philippines'],
            ['name' => 'Thailand'],
            ['name' => 'Cambodia'],
            ['name' => 'Vietnam'],
            ['name' => 'Laos'],
            ['name' => 'Myanmar'],
            ['name' => 'Bangladesh'],
            ['name' => 'India'],
            ['name' => 'Pakistan'],
            ['name' => 'Sri Lanka'],
            ['name' => 'China'],
            ['name' => 'Japan'],
            ['name' => 'North Korea'],
            ['name' => 'South Korea'],
            ['name' => 'Rusia'],
            ['name' => 'Ukraine'],

        ];

        National::insert($nationals);

        $shipname = [

            ['name' => 'Aichi'],
            ['name' => 'Akebono'],
            ['name' => 'Aoi'],
            ['name' => 'Aomori'],
            ['name' => 'Asahi'],
            ['name' => 'Atago'],
            ['name' => 'Aya'],
            ['name' => 'Benten'],
            ['name' => 'Chishio'],
            ['name' => 'Chiyo'],
            ['name' => 'Choei'],
            ['name' => 'Chofuku'],
            ['name' => 'Chohkyu'],
            ['name' => 'Chokyu'],
            ['name' => 'Choufuku'],
            ['name' => 'Dai'],
            ['name' => 'Daiei'],
            ['name' => 'Daiki'],
            ['name' => 'Daikichi'],
            ['name' => 'Daikoku'],
            ['name' => 'Daishi'],
            ['name' => 'Daito'],
            ['name' => 'Daiyu'],
            ['name' => 'Den'],
            ['name' => 'Dhizon'],
            ['name' => 'Ebisu'],
            ['name' => 'Ehime'],
            ['name' => 'Eikichi'],
            ['name' => 'Eiko'],
            ['name' => 'Eikyu'],
            ['name' => 'Eisei'],
            ['name' => 'Eishou'],
            ['name' => 'Eiyu'],
            ['name' => 'Fudou'],
            ['name' => 'Fuji'],
            ['name' => 'Fujitafuji'],
            ['name' => 'Fukuei'],
            ['name' => 'Fukuichi'],
            ['name' => 'Fukujin'],
            ['name' => 'Fukujukai'],
            ['name' => 'Fukuryu'],
            ['name' => 'Fukuseki'],
            ['name' => 'Fukushima'],
            ['name' => 'Fukusho'],
            ['name' => 'Fukutoku'],
            ['name' => 'Fukuyo'],
            ['name' => 'Fukuyoshi'],
            ['name' => 'Gen'],
            ['name' => 'Genkichi'],
            ['name' => 'Genpuku'],
            ['name' => 'Goei'],
            ['name' => 'Gonei'],
            ['name' => 'Gouei'],
            ['name' => 'Gouta'],
            ['name' => 'Goutoku'],
            ['name' => 'Hakeya'],
            ['name' => 'Hakko'],
            ['name' => 'Hakuyo'],
            ['name' => 'Hamahei'],
            ['name' => 'Hanei'],
            ['name' => 'Hashimurateru'],

            ['name' => 'Hien'],
            ['name' => 'Hinode'],
            ['name' => 'Hiro'],
            ['name' => 'Hirona'],
            ['name' => 'Hisatoshi'],
            ['name' => 'Hisyo'],
            ['name' => 'Hiyoshi'],

            ['name' => 'Hoei'],
            ['name' => 'Hokushin'],
            ['name' => 'Hokusho'],
            ['name' => 'Horyu'],
            ['name' => 'Hoshin'],
            ['name' => 'Hotoku'],
            ['name' => 'Houryou'],
            ['name' => 'Housei'],
            ['name' => 'Ichi'],
            ['name' => 'Ichiei'],
            ['name' => 'ichifuku'],
            ['name' => 'Ichimaruhachi kaio'],
            ['name' => 'Ikushin'],
            ['name' => 'Inari'],
            ['name' => 'Iroha'],
            ['name' => 'Isomae'],
            ['name' => 'Jinichi'],
            ['name' => 'Jinshou'],
            ['name' => 'Jintoku'],
            ['name' => 'Jyunyo'],
            ['name' => 'Kagoshima'],
            ['name' => 'Kaien'],
            ['name' => 'Kaigata'],
            ['name' => 'Kaigo'],
            ['name' => 'Kaiho'],
            ['name' => 'Kaihou'],
            ['name' => 'Kaiko'],
            ['name' => 'Kaio'],
            ['name' => 'Kaisei'],
            ['name' => 'Kaisei'],
            ['name' => 'Kaishin'],
            ['name' => 'Kaishin'],
            ['name' => 'Kaitoku'],
            ['name' => 'Kaiun'],
            ['name' => 'Kaiyo'],
            ['name' => 'Kaiyu'],
            ['name' => 'Kaiyuu'],
            ['name' => 'Kanae'],
            ['name' => 'Kashima'],
            ['name' => 'Kasuga'],
            ['name' => 'Katsu'],
            ['name' => 'Katsuei'],
            ['name' => 'Katsura'],
            ['name' => 'Katu'],
            ['name' => 'Katutoku'],
            ['name' => 'Kazutoku'],
            ['name' => 'Kazuyou'],
            ['name' => 'Keiho'],
            ['name' => 'Kenta'],
            ['name' => 'Kenyou'],
            ['name' => 'Kichiebisu'],
            ['name' => 'Kiei'],
            ['name' => 'Kifuku'],
            ['name' => 'Kiku'],
            ['name' => 'Kinei'],
            ['name' => 'Kinryo'],
            ['name' => 'Kinsai'],
            ['name' => 'Kinsei'],
            ['name' => 'Kintora'],
            ['name' => 'Kiyo'],
            ['name' => 'Koei'],
            ['name' => 'Kohyoh'],
            ['name' => 'Kokei'],
            ['name' => 'Kokushin'],
            ['name' => 'Konpira'],
            ['name' => 'Koryo'],
            ['name' => 'Koryu'],
            ['name' => 'Koshin'],
            ['name' => 'Kotobuki'],
            ['name' => 'Kotoshiro'],

            ['name' => 'Kouei'],
            ['name' => 'Kouhou'],
            ['name' => 'Kouryou'],
            ['name' => 'Kousho'],
            ['name' => 'Koutoku'],
            ['name' => 'Kowa'],
            ['name' => 'Koyo'],
            ['name' => 'Koyuu'],
            ['name' => 'Kuni'],
            ['name' => 'Kyoryo'],
            ['name' => 'Kyoshin'],
            ['name' => 'Kyouhime'],
            ['name' => 'Kyoyo'],
            ['name' => 'Manei'],
            ['name' => 'Manryou'],
            ['name' => 'Masa'],
            ['name' => 'Masafuku'],
            ['name' => 'Masami'],
            ['name' => 'Masu'],
            ['name' => 'Matsu'],
            ['name' => 'Matsuei'],
            ['name' => 'Matsufuku'],
            ['name' => 'Matsuichi'],
            ['name' => 'Meiho'],
            ['name' => 'Mia'],
            ['name' => 'Mie'],
            ['name' => 'Mihoko'],
            ['name' => 'Mina'],
            ['name' => 'Mitsu'],
            ['name' => 'Mituei'],
            ['name' => 'Miya'],
            ['name' => 'Miyagi'],
            ['name' => 'Miyazaki'],
            ['name' => 'Miyo'],
            ['name' => 'Myojin'],
            ['name' => 'Nakamuraryouyu'],
            ['name' => 'Nanae'],

            ['name' => 'Nankai'],
            ['name' => 'Nao'],
            ['name' => 'Naoki'],
            ['name' => 'Naoki'],
            ['name' => 'Nikko'],
            ['name' => 'Nissho'],
            ['name' => 'Nitto'],
            ['name' => 'Nomura'],
            ['name' => 'Nozomi'],
            ['name' => 'Nozomin'],
            ['name' => 'Oogurokoei'],
            ['name' => 'Ootori'],
            ['name' => 'Oshoro'],
            ['name' => 'Oto'],
            ['name' => 'Otori'],
            ['name' => 'Riasu'],
            ['name' => 'Rina'],
            ['name' => 'Ryoan'],
            ['name' => 'Ryoei'],
            ['name' => 'Ryofuku'],

            ['name' => 'Ryouan'],
            ['name' => 'Ryouei'],
            ['name' => 'Ryoumei'],
            ['name' => 'Ryousyou'],
            ['name' => 'Ryouyuu'],
            ['name' => 'Ryoyoshi'],

            ['name' => 'Ryoyu'],
            ['name' => 'Ryuho'],
            ['name' => 'Ryuki'],

            ['name' => 'Ryusei'],
            ['name' => 'Ryushou'],
            ['name' => 'Ryuusei'],
            ['name' => 'Sagakatsu'],
            ['name' => 'Sagamyojin'],
            ['name' => 'Sanei'],
            ['name' => 'Sanko'],
            ['name' => 'Sato'],
            ['name' => 'Satsuma'],
            ['name' => 'Sawajiri'],
            ['name' => 'Seiei'],
            ['name' => 'Seifuku'],

            ['name' => 'Seiho'],
            ['name' => 'Seihou'],
            ['name' => 'Seijyu'],
            ['name' => 'Seikichi'],
            ['name' => 'Seiko'],
            ['name' => 'Seiryo'],
            ['name' => 'Seiryou'],
            ['name' => 'Seiryu'],
            ['name' => 'Seishou'],
            ['name' => 'Seiyo'],
            ['name' => 'Seiyoshi'],
            ['name' => 'Seiyou'],
            ['name' => 'Sensho'],
            ['name' => 'Senshu'],
            ['name' => 'Shichifukuzin'],
            ['name' => 'Shihou'],
            ['name' => 'Shinei'],
            ['name' => 'Shinkai'],
            ['name' => 'Shinko'],
            ['name' => 'Shinpai'],
            ['name' => 'Shinryou'],
            ['name' => 'Shinsei'],
            ['name' => 'Shintoku'],
            ['name' => 'Shinyo'],
            ['name' => 'Shirochidori'],
            ['name' => 'Shoei'],
            ['name' => 'Shofuku'],
            ['name' => 'Shoki'],
            ['name' => 'Shonan'],
            ['name' => 'Shoshin'],
            ['name' => 'Shotoku'],
            ['name' => 'Shouei'],
            ['name' => 'Shoun'],
            ['name' => 'Shouyou'],
            ['name' => 'Shoyo'],
            ['name' => 'Shoyu'],
            ['name' => 'Shuho'],
            ['name' => 'Shunyo'],
            ['name' => 'Shunyou'],
            ['name' => 'Sinpuku'],
            ['name' => 'Siryu'],

            ['name' => 'Soho'],

            ['name' => 'Sue'],
            ['name' => 'Suehiro'],
            ['name' => 'Sumita'],
            ['name' => 'Sumiyoshi'],
            ['name' => 'Suwa'],
            ['name' => 'Syoryo'],
            ['name' => 'Syuho'],
            ['name' => 'Syunko'],
            ['name' => 'Taikei'],
            ['name' => 'Taiki'],
            ['name' => 'Taiko'],
            ['name' => 'Taikoh'],
            ['name' => 'Tairyo'],
            ['name' => 'Taisei'],
            ['name' => 'Taiwa'],
            ['name' => 'Taiyo'],
            ['name' => 'Taiyou'],
            ['name' => 'Taiyu'],
            ['name' => 'Taka'],
            ['name' => 'Takaei'],
            ['name' => 'Takashiro'],
            ['name' => 'Takatoyo'],
            ['name' => 'Take'],
            ['name' => 'Tanshu'],
            ['name' => 'Tao'],
            ['name' => 'Tatsu'],
            ['name' => 'Tatsumi'],
            ['name' => 'Tatsuyoshi'],
            ['name' => 'Tenku'],
            ['name' => 'Tenoh'],
            ['name' => 'Tenyo'],
            ['name' => 'Teru'],
            ['name' => 'Tetsu'],
            ['name' => 'Tetu'],
            ['name' => 'Tobeshima'],
            ['name' => 'Toei'],
            ['name' => 'Tokiwa'],
            ['name' => 'Tokuei'],
            ['name' => 'Tokuha'],
            ['name' => 'Tokuho'],
            ['name' => 'Tokusho'],
            ['name' => 'Tomi'],
            ['name' => 'Tomiyama'],
            ['name' => 'Tomo'],
            ['name' => 'Tosakaien'],
            ['name' => 'Toshi'],
            ['name' => 'Toshima'],
            ['name' => 'Toyokuni'],
            ['name' => 'Tsukasa'],
            ['name' => 'Uetake'],
            ['name' => 'Umitaka'],
            ['name' => 'Urayasu'],
            ['name' => 'Wajima'],
            ['name' => 'Waka'],
            ['name' => 'Wakaba'],
            ['name' => 'Wakamiya'],
            ['name' => 'Wakashio'],
            ['name' => 'Wakatake'],
            ['name' => 'Yachiyo'],
            ['name' => 'Yachou'],
            ['name' => 'Yahata'],
            ['name' => 'Yaizu'],
            ['name' => 'Yamasakitatsuei'],
            ['name' => 'Yasuei'],
            ['name' => 'Yasuichi'],
            ['name' => 'Yoko'],
            ['name' => 'Yoko'],
            ['name' => 'Yokuryu'],
            ['name' => 'Yoshi'],
            ['name' => 'Yoshiei'],
            ['name' => 'Youki'],
            ['name' => 'Yuei'],
            ['name' => 'Yuho'],
            ['name' => 'Yujin'],

            ['name' => 'Yuki'],

            ['name' => 'Yusei'],
            ['name' => 'Yusei'],
            ['name' => 'Zenriki'],

        ];

        Shipname::insert($shipname);

        //create user

        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('crews')->insert([
                'subid' => $faker->bothify('ID##??'),
                'name' => $faker->firstNameMale,
                'place' => $faker->city,
                'birth' => $faker->date('Y/m/d', 'now'),
                'nationaly' => 'Indonesia',
                'status' => $faker->randomElement(['On board', 'Stand-by', 'Unstand-by']),
                'religion' => 'Islam',
                'height' => $faker->numberBetween(167, 178),
                'weight' => $faker->numberBetween(80, 100),
                'marital' => $faker->randomElement(['Married', 'Single']),
                'child' => $faker->numberBetween(0, 3),
                'specialmark' => $faker->sentence(),
                'photo' => 'https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg',

                'signoff' => $faker->date(),
                'job_id' => $faker->randomElement([1, 2, 3, 4]),
                'currencysalary' => 'Rp',
                'salary' => $faker->numberBetween(2000, 3000),
                'shoes' => $faker->randomElement(['EU40/JP25.5', 'EU44/JP28.5']),
                'glove' => $faker->randomElement(['S', 'M', 'L', 'XL', 'XXL', 'XXXL']),
                'kappa' => $faker->randomElement(['S', 'M', 'L', 'XL', 'XXL', 'XXXL']),
                'remark' => $faker->sentence(),
                'license' => $faker->sentence(),
                'visa_id' => 1,
                'passport_id' => 1,
                'orangebook_id' => 1,
                'seamanbook_id' => 1,


            ]);
        }

        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('documents')->insert([
                'crew_id' => $i,
                'no' => $faker->numberBetween(161212317, 163212317),
                'type' => 'Entry Visa',
                'path' => '/file/1672044060-visa-12345678pdf',
                'place' => $faker->city,
                'issued' => $faker->date('Y/m/d'),
                'valid' => $faker->date('Y/m/d'),
                'country' => 'Indonesia',
            ]);
        }

        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('documents')->insert([
                'crew_id' => $i,
                'no' => $faker->numberBetween(161212317, 163212317),
                'type' => 'Passport',
                'path' => '/file/1672044060-visa-12345678pdf',
                'place' => $faker->city,
                'issued' => $faker->date('Y/m/d'),
                'valid' => $faker->date('Y/m/d'),

            ]);
        }

        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('documents')->insert([
                'crew_id' => $i,
                'no' => $faker->numberBetween(161212317, 163212317),
                'type' => 'Seaman Book',
                'path' => '/file/1672044060-visa-12345678pdf',
                'place' => $faker->city,
                'issued' => $faker->date('Y/m/d'),
                'valid' => $faker->date('Y/m/d'),

            ]);
        }

        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('documents')->insert([
                'crew_id' => $i,
                'no' => $faker->numberBetween(161212317, 163212317),
                'type' => 'Orange Book',
                'path' => '/file/1672044060-visa-12345678pdf',
                'place' => $faker->city,
                'issued' => $faker->date('Y/m/d'),
                'valid' => $faker->date('Y/m/d'),

            ]);
        }
        //Education Competence Proficiency
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('certificates')->insert([
                'crew_id' => $i,
                'category' => 'Education',
                'no' => $faker->numberBetween(161212317, 163212317),
                'type' => $faker->randomElement(['SD/MI', 'D-3']),
                'path' => '/file/1672044060-visa-12345678pdf',
                'place' => $faker->city,
                'issued' => $faker->date('Y/m/d'),
                'valid' => $faker->date('Y/m/d'),

            ]);
        }

        //Education Competence Proficiency
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('certificates')->insert([
                'crew_id' => $i,
                'category' => 'Competence',
                'no' => $faker->numberBetween(161212317, 163212317),
                'type' => $faker->randomElement(['ANT-II', 'ATT-IV']),
                'path' => '/file/1672044060-visa-12345678pdf',
                'place' => $faker->city,
                'issued' => $faker->date('Y/m/d'),
                'valid' => $faker->date('Y/m/d'),

            ]);
        }

        //Education Competence Proficiency
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('certificates')->insert([
                'crew_id' => $i,
                'category' => 'Proficiency',
                'no' => $faker->numberBetween(161212317, 163212317),
                'type' => $faker->randomElement(['SCRB', 'SDSD']),
                'path' => '/file/1672044060-visa-12345678pdf',
                'place' => $faker->city,
                'issued' => $faker->date('Y/m/d'),
                'valid' => $faker->date('Y/m/d'),

            ]);
        }

        //Medical
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('medicals')->insert([
                'crew_id' => $i,
                'type' => $faker->randomElement(['MCU', 'Vaccine']),
                'path' => '/file/1672044060-visa-12345678pdf',
                'date' => $faker->date('Y/m/d', 'now'),
                'description' => $faker->sentence(),

            ]);
        }

        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('contracts')->insert([
                'crew_id' => $i,
                'no' => $faker->numberBetween(161212317, 163212317),
                'type' => $faker->randomElement(['SCRB', 'SDSD']),
                'pdf' => '/file/1672044060-visa-12345678pdf',
                'embarkation' => $faker->date('Y/m/d', 'now'),
                'vessel_name' => $faker->randomElement(['Dai Maru 2', 'Takashi 4']),

            ]);
        }

        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 51; $i++) {
            DB::table('contracts')->insert([
                'crew_id' => $i,
                'no' => $faker->numberBetween(161212317, 163212317),
                'type' => $faker->randomElement(['PKL', 'Memorandum']),
                'pdf' => '/file/1672044060-visa-12345678pdf',
                'embarkation' => $faker->date('Y/m/d', 'now'),
                'vessel_name' => $faker->randomElement(['Dai Maru 2', 'Takashi 4']),

            ]);
        }
    }
}
