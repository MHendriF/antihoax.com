<?php

use Illuminate\Database\Seeder;

class WebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('websites')->delete();
        //insert some dummy records
        DB::table('websites')->insert(array(
			array('alamat'=>'.go.', 'category'=>'Valid'),
			array('alamat'=>'.sch.', 'category'=>'Valid'),
			array('alamat'=>'.ac.', 'category'=>'Valid'),
			array('alamat'=>'.edu.', 'category'=>'Valid'),
			array('alamat'=>'.mil.', 'category'=>'Valid'),
			array('alamat'=>'.org.', 'category'=>'Valid'),
			array('alamat'=>'.biz.', 'category'=>'Valid'),
            array('alamat'=>'wikipedia.org', 'category'=>'Valid'),

            array('alamat'=>'detik.com', 'category'=>'Valid'),
            array('alamat'=>'kompas.com', 'category'=>'Valid'),
            array('alamat'=>'tribunnews.com', 'category'=>'Valid'),
            array('alamat'=>'merdeka.com', 'category'=>'Valid'),
            array('alamat'=>'viva.co.id', 'category'=>'Valid'),
            array('alamat'=>'okezone.com', 'category'=>'Valid'),
            array('alamat'=>'tempo.co', 'category'=>'Valid'),
            array('alamat'=>'liputan6.com', 'category'=>'Valid'),
            array('alamat'=>'republika.co.id', 'category'=>'Valid'),
            array('alamat'=>'cnnindonesia.com', 'category'=>'Valid'),
            array('alamat'=>'antaranews.com', 'category'=>'Valid'),
            array('alamat'=>'kaskus.co.id', 'category'=>'Valid'),
            array('alamat'=>'kapanlagi.com', 'category'=>'Valid'),
            array('alamat'=>'uzone.id', 'category'=>'Valid'),
            array('alamat'=>'sindonews.com', 'category'=>'Valid'),
            array('alamat'=>'suara.com', 'category'=>'Valid'),
            array('alamat'=>'tempo.co', 'category'=>'Valid'),
            array('alamat'=>'dream.co.id', 'category'=>'Valid'),
            array('alamat'=>'idntimes.com', 'category'=>'Valid'),
            array('alamat'=>'bola.com', 'category'=>'Valid'),
            array('alamat'=>'indonesianews.net', 'category'=>'Valid'),
            array('alamat'=>'antaranews.com', 'category'=>'Valid'),
            array('alamat'=>'berita.suaramerdeka.com', 'category'=>'Valid'),
            array('alamat'=>'bbc.com', 'category'=>'Valid'),
            array('alamat'=>'kompasiana.com', 'category'=>'Valid'),
            array('alamat'=>'sindonews.com', 'category'=>'Valid'),
            //array('alamat'=>'suaranews.co', 'category'=>'Valid'),

            array('alamat'=>'nytimes.com', 'category'=>'Valid'),
            array('alamat'=>'huffingtonpost.com', 'category'=>'Valid'),
            array('alamat'=>'theguardian.com', 'category'=>'Valid'),
            array('alamat'=>'foxnews.com', 'category'=>'Valid'),
            array('alamat'=>'bbc.co.uk', 'category'=>'Valid'),
            array('alamat'=>'forbes.com', 'category'=>'Valid'),
            array('alamat'=>'timesofindia.indiatimes.com', 'category'=>'Valid'),
            array('alamat'=>'usatoday.com', 'category'=>'Valid'),
            array('alamat'=>'bloomberg.com', 'category'=>'Valid'),


            array('alamat'=>'seword.com', 'category'=>'Blacklist'),
            array('alamat'=>'posmetro.info', 'category'=>'Blacklist'),
            array('alamat'=>'pos-metro.com', 'category'=>'Blacklist'),
            array('alamat'=>'nusanews.com', 'category'=>'Blacklist'),
            array('alamat'=>'nahimunkar.net', 'category'=>'Blacklist'),
            array('alamat'=>'suara-islam.com', 'category'=>'Blacklist'),
            array('alamat'=>'jurnalmuslim.com', 'category'=>'Blacklist'),
            array('alamat'=>'islamnkri.info', 'category'=>'Blacklist'),
            // array('alamat'=>'', 'category'=>'Blacklist'),
            // array('alamat'=>'', 'category'=>'Valid'),
            // array('alamat'=>'', 'category'=>'Valid'),
            // array('alamat'=>'', 'category'=>'Valid'),
            // array('alamat'=>'', 'category'=>'Valid'),
            // array('alamat'=>'', 'category'=>'Valid'),

            array('alamat'=>'.blogspot.', 'category'=>'Uknown'),
            array('alamat'=>'.wordpress.', 'category'=>'Uknown'),
            //array('alamat'=>'', 'category'=>'Uknown'),
            
          ));
    }
}
