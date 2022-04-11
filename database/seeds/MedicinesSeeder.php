<?php

use Illuminate\Database\Seeder;

class MedicinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            'generic_name' => 'fentanil',
            'form' => 'inj 0,05 mg/mL (i.m./i.v.)',
            'restriction_formula' => '5 amp/kasus',
            'Description' => 'Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi, Untuk nyeri kronik pada pasien kanker yang tidak terkendali,Tidak untuk nyeri akut.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 1
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'morfin ',
            'form' => 'inj 10 mg/mL (i.m./s.k./i.v.) ',
            'restriction_formula' => '60 tab/bulan',
            'Description' => 'Hanya untuk pemakaian pada tindakan anestesi atau perawatan di Rumah Sakit, Untuk mengatasi nyeri kanker yang tidak respons terhadap analgesik non narkotik, Untuk nyeri pada serangan jantung.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 1
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'oksikodon',
            'form' => 'tab lepas lambat 10 mg',
            'restriction_formula' => '60 kaps/bulan',
            'Description' => 'a) Untuk nyeri berat yang memerlukan terapi opioid jangka panjang, around-the-clock, Tidak untuk terapi as neede(prn), Pasien tidak memiliki gangguan respirasi., Harus dimulai dengan dosispaling rendah pada pasien yang belum pernah mendapat opioid sebelumnya',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 1
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'asam mefenamat ',
            'form' => 'tab 500 mg',
            'restriction_formula' => '30 kaps/bulan',
            'Description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 2
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'ketoprofen',
            'form' => 'inj 50 mg/mL',
            'restriction_formula' => '2 sup/hari, maks 3 hari.',
            'Description' => 'Untuk nyeri sedang sampai berat pada pasien yang tidak, dapat menggunakan analgesik secara oral.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 2
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'ketorolak ',
            'form' => 'inj 30 mg/mL',
            'restriction_formula' => '2-3 amp/hari, maks 2 hari.',
            'Description' => 'Untuk nyeri sedang sampai berat pada pasien yang tidak dapat menggunakan analgesik secara oral.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 2
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'alopurinol ',
            'form' => 'tab 100 mg',
            'restriction_formula' => '30 tab/bulan',
            'Description' => 'Tidak diberikan pada saat nyeri akut',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 3
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'kolkisin ',
            'form' => 'tab 500 mcg',
            'restriction_formula' => '30 tab/bulan',
            'Description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 3
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'probenesid',
            'form' => 'tab 500 mg',
            'restriction_formula' => '30 tab/bulan',
            'Description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 3
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'amitriptilin ',
            'form' => 'tab 25 mg',
            'restriction_formula' => '30 tab/bulan',
            'Description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 4
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'gabapentin ',
            'form' => 'kaps 100 mg',
            'restriction_formula' => '60 kaps/bulan',
            'Description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 4
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'karbamazepin',
            'form' => 'tab 100 mg',
            'restriction_formula' => '60 tab/bulan',
            'Description' => 'Hanya untuk neuralgia trigeminal',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 4
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'bupivakain ',
            'form' => 'inj 0,5%',
            'restriction_formula' => '',
            'Description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 5
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'bupivakain heavy ',
            'form' => 'inj 0,5% + glukosa 8%',
            'restriction_formula' => '30 tab/bulan',
            'Description' => 'Khusus untuk analgesia spinal',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 5
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'etil klorida',
            'form' => 'spray 100 mL',
            'restriction_formula' => '',
            'Description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 5
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'deksmedetomidin',
            'form' => 'inj 100 mcg/mL',
            'restriction_formula' => '',
            'Description' => 'Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 6
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'desfluran',
            'form' => 'ih',
            'restriction_formula' => '',
            'Description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 6
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'tiopental',
            'form' => 'inj 500 mg (i.v.) ',
            'restriction_formula' => '',
            'Description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 6
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'atropin',
            'form' => 'inj 0,25 mg/mL (i.v./s.k.)',
            'restriction_formula' => '',
            'Description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 7
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'diazepam',
            'form' => 'inj 5 mg/mL',
            'restriction_formula' => '',
            'Description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 7
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'midazolam',
            'form' => 'inj 1 mg/mL (i.v.)',
            'restriction_formula' => 'Dosis rumatan: 1 mg/jam (24 mg/hari)',
            'Description' => 'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 7
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'deksametason',
            'form' => 'inj 5 mg/mL',
            'restriction_formula' => '20 mg/hari',
            'Description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 8
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'difenhidramin',
            'form' => 'inj 10 mg/mL (i.v./i.m.)',
            'restriction_formula' => '30 mg/hari',
            'Description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 8
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'hidrokortison',
            'form' => 'inj 100 mg',
            'restriction_formula' => '',
            'Description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 8
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'atropin',
            'form' => 'inj 0,25 mg/mL (i.v.)',
            'restriction_formula' => '',
            'Description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 9
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'efedrin',
            'form' => 'inj 50 mg/mL',
            'restriction_formula' => '',
            'Description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 9
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'nalokson',
            'form' => 'inj 0,4 mg/mL',
            'restriction_formula' => 'Hanya untuk mengatasi depresi pernapasan akibat morfin atau opioid',
            'Description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 9
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'diazepam',
            'form' => 'inj 5 mg/mL',
            'restriction_formula' => '10 amp/kasus, kecuali untuk kasus di ICU',
            'Description' => 'Tidak untuk i.m',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 10
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'fenitoin',
            'form' => 'inj 50 mg/mL',
            'restriction_formula' => '120 kaps/bulan',
            'Description' => 'Dapat digunakan untuk status konvulsivus',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 10
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'klonazepam',
            'form' => 'tab 2 mg',
            'restriction_formula' => '30 tab/bulan.',
            'Description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 10
        ]);
    }
}
