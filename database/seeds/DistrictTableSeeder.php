<?php

use Clocking\Helpers\Traits\TDBSeeder;
use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{

    use TDBSeeder;

    const TABLE = 'districts';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncate(self::TABLE);
        $this->seed(self::TABLE);
    }

    /**
     * @return array
     */
    private function data()
    {
        return [
            //ASHANTI REGION
            array("code"=>"0601","name"=>"OBUASI MUNICIPAL ASSEMBLY","region_id"=>6),
            array("code"=>"0611","name"=>"EJISU JUABEN MUNICIPAL ASSEMBLY","region_id"=>6),
            array("code"=>"0607","name"=>"BEKWAI MUNICIPAL ASSEMBLY","region_id"=>6),
            array("code"=>"0622","name"=>"MAMPONG MUNICIPAL ASSEMBLY","region_id"=>6),
            array("code"=>"0618","name"=>"OFFINSO MUNICIPAL ASSEMBLY","region_id"=>6),
            array("code"=>"0628","name"=>"ASOKORE MAMPONG MUNICIPAL ASSEMBLY","region_id"=>6),
            array("code"=>"0610","name"=>"ASANTE AKIM CENTRAL MUNICIPAL ASSEMBLY","region_id"=>6),
            array("code"=>"0626","name"=>"EJURA SEKYEDUMASE DISTRICT ASSEMBLY","region_id"=>6),
            array("code"=>"0614","name"=>"KUMASI METROPOLITAN ASSEMBLY","region_id"=>6),
            array("code"=>"0606","name"=>"ADANSI NORTH DISTRICT ASSEMBLY","region_id"=>6),
            array("code"=>"0621","name"=>"AFIAGYA KWABRE DISTRICT ASSEMBLY ","region_id"=>6),
            array("code"=>"0617","name"=>"AHAFO ANO NORTH DISTRICT ASSEMBLY","region_id"=>6),
            array("code"=>"0616","name"=>"AHAFO ANO SOUTH DISTRICT ASSEMBLY","region_id"=>6),
            array("code"=>"0603","name"=>"AMANSIE CENTRAL DISTRICT ASSEMBLY","region_id"=>6),
            array("code"=>"0602","name"=>"AMANSIE WEST DISTRICT ASSEMBLY","region_id"=>6),
            array("code"=>"0629","name"=>"ASANTE AKIM NORTH DISTRICT ASSEMBLY","region_id"=>6),
            array("code"=>"0613","name"=>"ATWIMA KWANWOMA DISTRICT ASSEMBLY","region_id"=>6),
            array("code"=>"0601","name"=>"ATWIMA MPONUA DISTRICT ASSEMBLY","region_id"=>6),
            array("code"=>"0615","name"=>"ATWIMA NWABIAGYA DISTRICT ASSEMBLY","region_id"=>6),
            array("code"=>"0608","name"=>"BOSOME FREHO DISTRICT ASSEMBLY","region_id"=>6),
            array("code"=>"0612","name"=>"BOSOMTWE DISTRICT ASSEMBLY","region_id"=>6),
            array("code"=>"0620","name"=>"KWABRE DISTRICT ASSEMBLY","region_id"=>6),
            array("code"=>"0627","name"=>"OFFINSO NORTH DISTRICT ASSEMBLY","region_id"=>6),
            array("code"=>"0624","name"=>"SEKYERE AFRAM PLAINS DISTRICT ASSEMBLY","region_id"=>6),
            array("code"=>"0630","name"=>"SEKYERE AFRAM PLAINS DISTRICT ASSEMBLY North","region_id"=>6),
            array("code"=>"0625","name"=>"SEKYERE CENTRAL DISTRICT ASSEMBLY","region_id"=>6),
            array("code"=>"0623","name"=>"SEKYERE EAST DISTRICT ASSEMBLY","region_id"=>6),


            //GREATER ACCRA
            array("code"=>"0302","name"=>"GA WEST MUNICIPAL ASSEMBLY","region_id"=>3),
            array("code"=>"0301","name"=>"GA SOUTH MUNICIPAL ASSEMBLY","region_id"=>3),
            array("code"=>"0303","name"=>"GA EAST MUNICIPAL ASSEMBLY","region_id"=>3),
            array("code"=>"0311","name"=>"GA CENTRAL MUNICIPAL ASSEMBLY","region_id"=>3),
            array("code"=>"0305","name"=>"ADENTAN MUNICIPAL ASSEMBLY","region_id"=>3),
            array("code"=>"0306","name"=>"LEDZEKUKU-KLOWOR MUNICIPAL ASSEMBLY","region_id"=>3),
            array("code"=>"0313","name"=>"LA NKWATANANG MADINA MUNICIPAL ASSEMBLY","region_id"=>3),
            array("code"=>"0307","name"=>"ASHIAMAN MUNICIPAL ASSEMBLY","region_id"=>3),
            array("code"=>"0309","name"=>"SHAI OSUDOKU DISTRICT ASSEMBLY","region_id"=>3),
            array("code"=>"0315","name"=>"NINGO PRAMPRAM DISTRICT ASSEMBLY","region_id"=>3),
            array("code"=>"0314","name"=>"KPONE KATAMANSO DISTRICT ASSEMBLY","region_id"=>3),
            array("code"=>"0316","name"=>"ADA WEST DISTRICT ASSEMBLY","region_id"=>3),
            array("code"=>"0310","name"=>"ADA EAST DISTRICT ASSEMBLY","region_id"=>3),


            //BRONG AHAFO REGION
            array("code"=>"0722","name"=>"KINTAMPO NORTH MUNICIPAL ASSEMBLY","region_id"=>7),
            array("code"=>"0702","name"=>"ASUNAFO NORTH MUNICIPAL ASSEMBLY","region_id"=>7),
            array("code"=>"0710","name"=>"BEREKUM MUNICIPAL ASSEMBLY","region_id"=>7),
            array("code"=>"0714","name"=>"WENCHI MUNICIPAL ASSEMBLY","region_id"=>7),
            array("code"=>"0708","name"=>"SUNYANI MUNICIPAL ASSEMBLY","region_id"=>7),
            array("code"=>"0704","name"=>"DORMAA CENTRAL MUNICIPAL ASSEMBLY","region_id"=>7),
            array("code"=>"0716","name"=>"NKORANZA SOUTH MUNICIPAL ASSEMBLY","region_id"=>7),
            array("code"=>"0715","name"=>"TECHIMAN MUNICIPAL ASSEMBLY","region_id"=>7),
            array("code"=>"0725","name"=>"TECHIMAN NORTH DISTRICT ASSEMBLY","region_id"=>7),
            array("code"=>"0706","name"=>"TANO SOUTH DISTRICT ASSEMBLY","region_id"=>7),
            array("code"=>"0707","name"=>"TANO NORTH DISTRICT ASSEMBLY","region_id"=>7),
            array("code"=>"0713","name"=>"TAIN DISTRICT ASSEMBLY","region_id"=>7),
            array("code"=>"0709","name"=>"SUNYANI WEST DISTRICT ASSEMBLY","region_id"=>7),
            array("code"=>"0719","name"=>"SENE WEST DISTRICT ASSEMBLY","region_id"=>7),
            array("code"=>"0727","name"=>"SENE EAST DISTRICT ASSEMBLY","region_id"=>7),
            array("code"=>"0720","name"=>"PRU DISTRICT ASSEMBLY","region_id"=>7),
            array("code"=>"0717","name"=>"NKORANZA NORTH DISTRICT ASSEMBLY","region_id"=>7),
            array("code"=>"0721","name"=>"KITAMPO SOUTH DISTRICT ASSEMBLY","region_id"=>7),
            array("code"=>"0711","name"=>"JAMAN SOUTH DISTRICT ASSEMBLY","region_id"=>7),
            array("code"=>"0712","name"=>"JAMAN NORTH DISTRICT ASSEMBLY","region_id"=>7),
            array("code"=>"0724","name"=>"DORMAA WEST DISTRICT ASSEMBLY","region_id"=>7),
            array("code"=>"0726","name"=>"BANDA DISTRICT ASSEMBLY","region_id"=>7),
            array("code"=>"0718","name"=>"ATEBUBU AMANTIN DISTRICT ASSEMBLY","region_id"=>7),
            array("code"=>"0723","name"=>"ASUTIFI SOUTH DISTRICT ASSEMBLY","region_id"=>7),
            array("code"=>"0701","name"=>"ASUNAFO SOUTH DISTRICT ASSEMBLY","region_id"=>7),


            //CENTRAL REGION
            array("code"=>"0201","name"=>"KOMENDA EDINA AGUAFO ABIREM MUNICIPAL ASSEMBLY","region_id"=>2),
            array("code"=>"0214","name"=>"ASSIN NORTH MUNICIPAL ASSEMBLY","region_id"=>2),
            array("code"=>"0220","name"=>"AWUTU SENYA EAST DISTRICT ASSEMBLY","region_id"=>2),
            array("code"=>"0207","name"=>"EFFUTU MUNICIPAL ASSEMBLY","region_id"=>2),
            array("code"=>"0216","name"=>"UPPER DENKYIRA EAST MUNICIPAL ASSEMBLY","region_id"=>2),
            array("code"=>"0211","name"=>"AGONA WEST MUNICIPAL ASSEMBLY","region_id"=>2),
            array("code"=>"0204","name"=>"MFANTSIMAN MUNICIPAL ASSEMBLY","region_id"=>2),
            array("code"=>"0212","name"=>"ASIKUMA-ODOBEN BRAKWA","region_id"=>2),
            array("code"=>"0217","name"=>"UPPER DENKYIRA WEST DISTRICT ASSEMBLY","region_id"=>2),
            array("code"=>"0218","name"=>"TWIFO LOWER DENKYIRA DISTRICT ASSEMBLY","region_id"=>2),
            array("code"=>"0215","name"=>"TWIFO ATI-MORKWA DISTRICT ASSEMBLY","region_id"=>2),
            array("code"=>"0206","name"=>"GOMOA WEST DISTRICT ASSEMBLY","region_id"=>2),
            array("code"=>"0208","name"=>"GOMOA EAST DISTRICT ASSEMBLY","region_id"=>2),
            array("code"=>"0219","name"=>"EKUMFI DISTRICT ASSEMBLY","region_id"=>2),
            array("code"=>"0213","name"=>"ASSIN SOUTH DISTRICT ASSEMBLY","region_id"=>2),
            array("code"=>"0205","name"=>"AJUMAKO-ENYAN-ESIAM DISTRICT ASSEMBLY","region_id"=>2),
            array("code"=>"0210","name"=>"AGONA EAST DISTRICT ASSEMBLY","region_id"=>2),
            array("code"=>"0203","name"=>"ABURA-ASEBU-KWAMANKESE DISTRICT ASSEMBLY","region_id"=>2),


            //EASTERN REGION
            array("code"=>"0508","name"=>"YILO KROBO MUNICIPAL ASSEMBLY","region_id"=>5),
            array("code"=>"0503","name"=>"WEST AKIM MUNICIPAL ASSEMBLY","region_id"=>5),
            array("code"=>"0522","name"=>"UPPER WEST AKIM MUNICIPAL ASSEMBLY","region_id"=>5),
            array("code"=>"0511","name"=>"UPPER MANYA DISTRICT ASSEMBLY","region_id"=>5),
            array("code"=>"0504","name"=>"SUHUM MUNICIPAL ASSEMBLY","region_id"=>5),
            array("code"=>"0505","name"=>"NSAWAM ADOAGYIRI MUNICIPAL ASSEMBLY","region_id"=>5),
            array("code"=>"0507","name"=>"NEW JUABEN MUNICIPAL ASSEMBLY","region_id"=>5),
            array("code"=>"0509","name"=>"LOWER MANYA KROBO MUNICIPAL ASSEMBLY","region_id"=>5),
            array("code"=>"0518","name"=>"KWAHU WEST MUNICIPAL ASSEMBLY","region_id"=>5),
            array("code"=>"0519","name"=>"KWAHU SOUTH DISTRICT ASSEMBLY","region_id"=>5),
            array("code"=>"0520","name"=>"KWAHU EAST DISTRICT ASSEMBLY","region_id"=>5),
            array("code"=>"0521","name"=>"KWAHU AFRAM PLAINS SOUTH DISTRICT ASSEMBLY","region_id"=>5),
            array("code"=>"0514","name"=>"KWAEBIBIREM DISTRICT ASSEMBLY","region_id"=>5),
            array("code"=>"0512","name"=>"FANTEAKWA DISTRICT ASSEMBLY","region_id"=>5),
            array("code"=>"0513","name"=>"EAST AKIM MUNICIPAL ASSEMBLY","region_id"=>5),
            array("code"=>"0525","name"=>"DENKYEMBOUR DISTRICT ASSEMBLY","region_id"=>5),
            array("code"=>"0501","name"=>"BIRIM SOUTH DISTRICT ASSEMBLY","region_id"=>5),
            array("code"=>"0502","name"=>"BIRIM CENTRAL MUNICIPAL ASSEMBLY","region_id"=>5),
            array("code"=>"0524","name"=>"AYENSUANO DISTRICT ASSEMBLY","region_id"=>5),
            array("code"=>"0517","name"=>"ATIWA DISTRICT ASSEMBLY","region_id"=>5),
            array("code"=>"0510","name"=>"ASUOGYAMAN DISTRICT ASSEMBLY","region_id"=>5),
            array("code"=>"0515","name"=>"AKYEMANSA DISTRICT ASSEMBLY","region_id"=>5),
            array("code"=>"0523","name"=>"AKWAPEM SOUTH MUNICIPAL ASSEMBLY","region_id"=>5),


            //WESTERN REGION
            array("code"=>"0107","name"=>"AHANTA EAST DISTRICT ASSEMBLY","region_id"=>1),
            array("code"=>"0111","name"=>"WASSA AMENFI WEST DISTRICT ASSEMBLY","region_id"=>1),
            array("code"=>"0119","name"=>"WASSA AMENFI CENTRAL DISTRICT ASSEMBLY","region_id"=>1),
            array("code"=>"0108","name"=>"TARKWA NSUAEM MUNICIPAL ASSEMBLY","region_id"=>1),
            array("code"=>"0120","name"=>"SUAMAN DISTRICT ASSEMBLY","region_id"=>1),
            array("code"=>"0106","name"=>"SHAMA MUNICIPAL ASSEMBLY","region_id"=>1),
            array("code"=>"0105","name"=>"SEKONDI-TAKORADI METROPOLITAN ASSEMBLY","region_id"=>1),
            array("code"=>"0114","name"=>"SEFWI WIAWSO DISTRICT ASSEMBLY","region_id"=>1),
            array("code"=>"0115","name"=>"SEFWI BIBIANI-ANHWIASO BEKWAI DISTRICT ASSEMBLY","region_id"=>1),
            array("code"=>"0113","name"=>"SEFWI AKONTOMBRA DISTRICT ASSEMBLY","region_id"=>1),
            array("code"=>"0109","name"=>"PRESTIA-HUNI VALLEY DISTRICT ASSEMBLY","region_id"=>1),
            array("code"=>"0103","name"=>"NZEMA EAST MUNICIPAL ASSEMBLY","region_id"=>1),
            array("code"=>"0118","name"=>"MPOHOR  DISTRICT ASSEMBLY","region_id"=>1),
            array("code"=>"0116","name"=>"JUABESO DISTRICT ASSEMBLY","region_id"=>1),
            array("code"=>"0101","name"=>"JOMORO DISTRICT ASSEMBLY","region_id"=>1),
            array("code"=>"0102","name"=>"ELLEMBELLE DISTRICT ASSEMBLY","region_id"=>1),
            array("code"=>"0121","name"=>"BODI DISTRICT ASSEMBLY","region_id"=>1),
            array("code"=>"0122","name"=>"BIA EAST DISTRICT ASSEMBLY","region_id"=>1),
            array("code"=>"0117","name"=>"BIA WEST DISTRICT ASSEMBLY","region_id"=>1),
            array("code"=>"0112","name"=>"AOWIN DISTRICT ASSEMBLY ","region_id"=>1),
            array("code"=>"0104","name"=>"AHANTA WEST DISTRICT ASSEMBLY ","region_id"=>1),


            //VOLTA REGION
            array("code"=>"0401","name"=>"SOUTH TONGU DISTRICT ASSEMBLY","region_id"=>4),
            array("code"=>"0409","name"=>"SOUTH DAYI DISTRICT ASSEMBLY","region_id"=>4),
            array("code"=>"0419","name"=>"NORTH TONGU DISTRICT ASSEMBLY","region_id"=>4),
            array("code"=>"0424","name"=>"NORTH DAYI  DISTRICT ASSEMBLY","region_id"=>4),
            array("code"=>"0417","name"=>"NKWANTA SOUTH DISTRICT ASSEMBLY","region_id"=>4),
            array("code"=>"0418","name"=>"NKWANTA NORTH DISTRICT ASSEMBLY","region_id"=>4),
            array("code"=>"0416","name"=>"KRACHI WEST DISTRICT ASSEMBLY","region_id"=>4),
            array("code"=>"0425","name"=>"KRACHI NCHUMURU DISTRICT ASSEMBLY","region_id"=>4),
            array("code"=>"0415","name"=>"KRACHI EAST DISTRICT ASSEMBLY","region_id"=>4),
            array("code"=>"0410","name"=>"KPANDO MUNICIPAL ASSEMBLY","region_id"=>4),
            array("code"=>"0403","name"=>"KETU SOUTH MUNICIPAL ASSEMBLY","region_id"=>4),
            array("code"=>"0404","name"=>"KETU NORTH  DISTRICT ASSEMBLY","region_id"=>4),
            array("code"=>"0402","name"=>"KETA MUNICIPAL ASSEMBLY","region_id"=>4),
            array("code"=>"0414","name"=>"KADJEBI  DISTRICT ASSEMBLY","region_id"=>4),
            array("code"=>"0413","name"=>"JASIKAN DISTRICT ASSEMBLY","region_id"=>4),
            array("code"=>"0411","name"=>"HOHOE MUNICIPAL ASSEMBLY","region_id"=>4),
            array("code"=>"0422","name"=>"HO WEST DISTRICT ASSEMBLY","region_id"=>4),
            array("code"=>"0408","name"=>"HO MUNICIPAL ASSEMBLY","region_id"=>4),
            array("code"=>"0406","name"=>"CENTRAL TONGU DISTRICT ASSEMBLY","region_id"=>4),
            array("code"=>"0412","name"=>"BIAKOYE DISTRICT ASSEMBLY","region_id"=>4),
            array("code"=>"0405","name"=>"AKATSI SOUTH DISTRICT ASSEMBLY","region_id"=>4),
            array("code"=>"0420","name"=>"AKATSI NORTH DISTRICT ASSEMBLY","region_id"=>4),
            array("code"=>"0407","name"=>"AGOTIME ZIOPE DISTRICT ASSEMBLY","region_id"=>4),
            array("code"=>"0423","name"=>"AFADZATO SOUTH DISTRICT ASSEMBLY","region_id"=>4),
            array("code"=>"0421","name"=>"ADAKLU DISTRICT ASSEMBLY","region_id"=>4),


            //NORTHERN REGION
            array("code"=>"0809","name"=>"ZABZUGU DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0810","name"=>"YENDI MUNICIPAL ASSEMBLY","region_id"=>8),
            array("code"=>"0820","name"=>"WEST MAMPRUSI  DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0803","name"=>"WEST GONJA DISTRICT ASSEMBLY ","region_id"=>8),
            array("code"=>"0812","name"=>"TOLON DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0825","name"=>"TATALE DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0802","name"=>"SAWLA-TUNA-KALBA DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0813","name"=>"SAVULUGU NANTON DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0811","name"=>"SAGNERIGU DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0816","name"=>"SABOBA DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0821","name"=>"NORTH GONJA DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0807","name"=>"NANUMBA SOUTH DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0808","name"=>"NANUMBA NORTH DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0824","name"=>"MION DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0826","name"=>"MAMPRUGU MOAGDURI DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0822","name"=>"KUMBUNGU DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0806","name"=>"KPANDAI DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0814","name"=>"KARAGA DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0815","name"=>"GUSHIEGU DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0819","name"=>"MAMPRUSI EAST DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0805","name"=>"EAST GONJA DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0817","name"=>"CHEREPONI DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0804","name"=>"GONJA CENTRAL DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0818","name"=>"BUNKPURUGU YONYO DISTRICT ASSEMBLY","region_id"=>8),
            array("code"=>"0801","name"=>"BOLE DISTRICT ASSEMBLY","region_id"=>8),


            //UPPER EAST REGION
            array("code"=>"0905","name"=>"TALENSI DISTRICT ASSEMBLY","region_id"=>9),
            array("code"=>"0913","name"=>"PUSIGA DISTRICT ASSEMBLY","region_id"=>9),
            array("code"=>"0911","name"=>"NABDAM DISTRICT ASSEMBLY","region_id"=>9),
            array("code"=>"0902","name"=>"KASENA NANKANA WEST DISTRICT ASSEMBLY","region_id"=>9),
            array("code"=>"0903","name"=>"KASENA NANKANA EAST DISTRICT ASSEMBLY","region_id"=>9),
            array("code"=>"0908","name"=>"GARU TEMPANE DISTRICT ASSEMBLY","region_id"=>9),
            array("code"=>"0901","name"=>"BUILSA NORTH DISTRICT ASSEMBLY","region_id"=>9),
            array("code"=>"0906","name"=>"BONGO DISTRICT ASSEMBLY","region_id"=>9),
            array("code"=>"0904","name"=>"BOLGATANGA MUNICIPAL ASSEMBLY","region_id"=>9),
            array("code"=>"0912","name"=>"BINDURI DISTRICT ASSEMBLY","region_id"=>9),
            array("code"=>"0907","name"=>"BAWKU WEST DISTRICT ASSEMBLY","region_id"=>9),
            array("code"=>"0909","name"=>"BAWKU MUNICIPAL ASSEMBLY","region_id"=>9),


            //UPPER WEST REGION
            array("code"=>"1001","name"=>"WA WEST DISTRICT ASSEMBLY","region_id"=>10),
            array("code"=>"1002","name"=>"WA MUNICIPAL ASSEMBLY","region_id"=>10),
            array("code"=>"1003","name"=>"WA EAST DISTRICT ASSEMBLY","region_id"=>10),
            array("code"=>"1007","name"=>"SISSALA WEST DISTRICT ASSEMBLY","region_id"=>10),
            array("code"=>"1004","name"=>"SISSALA EAST DISTRICT ASSEMBLY","region_id"=>10),
            array("code"=>"1011","name"=>"NANDOM DISTRICT ASSEMBLY","region_id"=>10),
            array("code"=>"1005","name"=>"NADOWLI-KALEO DISTRICT ASSEMBLY","region_id"=>10),
            array("code"=>"1009","name"=>"LAWRA DISTRICT ASSEMBLY","region_id"=>10),
            array("code"=>"1008","name"=>"LAMBUSSIE KARNI DISTRICT ASSEMBLY","region_id"=>10),
            array("code"=>"1006","name"=>"JIRAPA DISTRICT ASSEMBLY","region_id"=>10),
            array("code"=>"1010","name"=>"DAFFIAMA BUSSIE DISTRICT ASSEMBLY","region_id"=>10)
        ];
    }
}
