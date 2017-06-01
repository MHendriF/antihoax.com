<?php

use Illuminate\Database\Seeder;

class WebSeeder extends Seeder
{

    public function run()
    {
        DB::table('websites')->delete();
        //insert some dummy records
        DB::table('websites')->insert(array(
			array('address'=>'.go.', 'type'=>'Valid'),
			array('address'=>'.sch.', 'type'=>'Valid'),
			array('address'=>'.ac.', 'type'=>'Valid'),
			array('address'=>'.edu.', 'type'=>'Valid'),
			array('address'=>'.mil.', 'type'=>'Valid'),
			array('address'=>'.org.', 'type'=>'Valid'),
			array('address'=>'.biz.', 'type'=>'Valid'),
            array('address'=>'wikipedia.org', 'type'=>'Valid'),

            array('address'=>'detik.com', 'type'=>'Valid'),
            array('address'=>'kompas.com', 'type'=>'Valid'),
            array('address'=>'tribunnews.com', 'type'=>'Valid'),
            array('address'=>'merdeka.com', 'type'=>'Valid'),
            array('address'=>'viva.co.id', 'type'=>'Valid'),
            array('address'=>'okezone.com', 'type'=>'Valid'),
            array('address'=>'tempo.co', 'type'=>'Valid'),
            array('address'=>'liputan6.com', 'type'=>'Valid'),
            array('address'=>'republika.co.id', 'type'=>'Valid'),
            array('address'=>'cnnindonesia.com', 'type'=>'Valid'),
            array('address'=>'antaranews.com', 'type'=>'Valid'),
            array('address'=>'kaskus.co.id', 'type'=>'Valid'),
            array('address'=>'kapanlagi.com', 'type'=>'Valid'),
            array('address'=>'uzone.id', 'type'=>'Valid'),
            array('address'=>'sindonews.com', 'type'=>'Valid'),
            array('address'=>'suara.com', 'type'=>'Valid'),
            array('address'=>'tempo.co', 'type'=>'Valid'),
            array('address'=>'dream.co.id', 'type'=>'Valid'),
            array('address'=>'idntimes.com', 'type'=>'Valid'),
            array('address'=>'bola.com', 'type'=>'Valid'),
            array('address'=>'indonesianews.net', 'type'=>'Valid'),
            array('address'=>'antaranews.com', 'type'=>'Valid'),
            array('address'=>'berita.suaramerdeka.com', 'type'=>'Valid'),
            array('address'=>'bbc.com', 'type'=>'Valid'),
            array('address'=>'kompasiana.com', 'type'=>'Valid'),
            array('address'=>'sindonews.com', 'type'=>'Valid'),
            //array('address'=>'suaranews.co', 'type'=>'Valid'),

            array('address'=>'nytimes.com', 'type'=>'Valid'),
            array('address'=>'huffingtonpost.com', 'type'=>'Valid'),
            array('address'=>'theguardian.com', 'type'=>'Valid'),
            array('address'=>'foxnews.com', 'type'=>'Valid'),
            array('address'=>'bbc.co.uk', 'type'=>'Valid'),
            array('address'=>'forbes.com', 'type'=>'Valid'),
            array('address'=>'timesofindia.indiatimes.com', 'type'=>'Valid'),
            array('address'=>'usatoday.com', 'type'=>'Valid'),
            array('address'=>'bloomberg.com', 'type'=>'Valid'),

            array('address'=>'seword.com', 'type'=>'Hoax'),
            array('address'=>'posmetro.info', 'type'=>'Hoax'),
            array('address'=>'pos-metro.com', 'type'=>'Hoax'),
            array('address'=>'nusanews.com', 'type'=>'Hoax'),
            array('address'=>'nahimunkar.net', 'type'=>'Hoax'),
            array('address'=>'suara-islam.com', 'type'=>'Hoax'),
            array('address'=>'jurnalmuslim.com', 'type'=>'Hoax'),
            array('address'=>'islamnkri.info', 'type'=>'Hoax'),
            // array('address'=>'', 'type'=>'Blacklist'),
            
            array('address'=>'kalender.web', 'type'=>'Valid'),
            array('address'=>'zenius.net', 'type'=>'Valid'),
            array('address'=>'liburnasional.com', 'type'=>'Valid'),
            array('address'=>'muslim.or.id', 'type'=>'Valid'),
            array('address'=>'microsoft.com', 'type'=>'Valid'),

            array('address'=>'.blogspot.', 'type'=>'Uknown'),
            array('address'=>'.wordpress.', 'type'=>'Uknown'),
            //array('address'=>'', 'type'=>'Uknown'),
            
          ));
    }
}
