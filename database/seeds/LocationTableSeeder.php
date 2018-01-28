<?php

use Clocking\Helpers\Traits\TDBSeeder;
use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    use TDBSeeder;

    const TABLE = 'locations';

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


            array("code"=>"010701","name"=>"NEW SUBRI","district_id"=>107),
            array("code"=>"010702","name"=>"ATOBIASE","district_id"=>107),
            array("code"=>"010703","name"=>"SEKYERE KROBO","district_id"=>107),
            array("code"=>"010704","name"=>"DABOASE","district_id"=>107),
            array("code"=>"010705","name"=>"AKYEMPIM","district_id"=>107),
            array("code"=>"010706","name"=>"WASSA AKUTUASE","district_id"=>107),


            array("code"=>"011101","name"=>"SAMREBOI","district_id"=>108),
            array("code"=>"011102","name"=>"ASANKRAGWA","district_id"=>108),
            array("code"=>"011103","name"=>"WASSA DUNKWA","district_id"=>108),
            array("code"=>"011104","name"=>"ASANKRAN BREMANG","district_id"=>108),
            array("code"=>"011105","name"=>"ASANKRAN SAA","district_id"=>108),
            array("code"=>"011106","name"=>"OPPON VALLEY","district_id"=>108),
            array("code"=>"011107","name"=>"DOMPIM BAWDIE","district_id"=>108),
            array("code"=>"011108","name"=>"AFRANSIE","district_id"=>108),
            array("code"=>"011109","name"=>"WASSA AKROPONG","district_id"=>108),
            array("code"=>"011110","name"=>"NANANKO","district_id"=>108),


            array("code"=>"011901","name"=>"BONUAMA","district_id"=>109),
            array("code"=>"011902","name"=>"ANYINABRIM","district_id"=>109),
            array("code"=>"011903","name"=>"HIAWA","district_id"=>109),
            array("code"=>"011904","name"=>"AKYEKYERE (ACHICHIRE)","district_id"=>109),
            array("code"=>"011905","name"=>"KWAMANG","district_id"=>109),
            array("code"=>"011906","name"=>"MANSO AMENFI","district_id"=>109),


            array("code"=>"010801","name"=>"NSUAEM","district_id"=>110),
            array("code"=>"010802","name"=>"SIMPA","district_id"=>110),
            array("code"=>"010803","name"=>"DOMPIM-PEPESA","district_id"=>110),
            array("code"=>"010804","name"=>"TARKWA","district_id"=>110),
            array("code"=>"010805","name"=>"NSUTA","district_id"=>110),
            array("code"=>"010806","name"=>"SENYAKROM","district_id"=>110),
            array("code"=>"010807","name"=>"TAMSO","district_id"=>110),


            array("code"=>"012001","name"=>"DADIESO","district_id"=>111),


            array("code"=>"010601","name"=>"ABOADZE","district_id"=>112),
            array("code"=>"010602","name"=>"ABUESI","district_id"=>112),
            array("code"=>"010603","name"=>"INCHABAN","district_id"=>112),
            array("code"=>"010604","name"=>"SHAMA JUNCTION","district_id"=>112),
            array("code"=>"010605","name"=>"KOMFUEKU","district_id"=>112),
            array("code"=>"010606","name"=>"ASSORKU-ESSAMAN","district_id"=>112),
            array("code"=>"010607","name"=>"SHAMA","district_id"=>112),
            array("code"=>"010608","name"=>"ANLO BEACH","district_id"=>112),


            array("code"=>"010501","name"=>"ADIEMBRA","district_id"=>113),
            array("code"=>"010502","name"=>"KWEIKUMA","district_id"=>113),
            array("code"=>"010503","name"=>"NEW TAKORADI","district_id"=>113),
            array("code"=>"010504","name"=>"SEKONDI","district_id"=>113),
            array("code"=>"010505","name"=>"ANAJI","district_id"=>113),
            array("code"=>"010506","name"=>"APREMDO","district_id"=>113),
            array("code"=>"010507","name"=>"ASSAKAI","district_id"=>113),
            array("code"=>"010508","name"=>"EAST TANOKROM","district_id"=>113),
            array("code"=>"010509","name"=>"EFFIA - VILLAGE","district_id"=>113),
            array("code"=>"010510","name"=>"EFFIAKUMA","district_id"=>113),
            array("code"=>"010511","name"=>"KWESIMINTSIM","district_id"=>113),
            array("code"=>"010512","name"=>"NTANKOFUL","district_id"=>113),
            array("code"=>"010513","name"=>"WEST TANOKROM","district_id"=>113),
            array("code"=>"010514","name"=>"ESSIKADO","district_id"=>113),
            array("code"=>"010515","name"=>"FIJAI","district_id"=>113),
            array("code"=>"010516","name"=>"KANSAWORADO","district_id"=>113),
            array("code"=>"010517","name"=>"KOJOKROM","district_id"=>113),
            array("code"=>"010518","name"=>"TAKORADI","district_id"=>113),
            array("code"=>"010519","name"=>"NGYIRESIA","district_id"=>113),
            array("code"=>"010520","name"=>"NKROFUL","district_id"=>113),


            array("code"=>"011401","name"=>"BOAKO","district_id"=>114),
            array("code"=>"011402","name"=>"ANYINABRIM","district_id"=>114),
            array("code"=>"011403","name"=>"PUNIKROM","district_id"=>114),
            array("code"=>"011404","name"=>"AHOKWAA","district_id"=>114),
            array("code"=>"011405","name"=>"DATANO","district_id"=>114),
            array("code"=>"011406","name"=>"SUI","district_id"=>114),
            array("code"=>"011407","name"=>"DWINASE","district_id"=>114),
            array("code"=>"011408","name"=>"SEFWI WIAWSO","district_id"=>114),
            array("code"=>"011409","name"=>"ANWIAM","district_id"=>114),
            array("code"=>"011410","name"=>"BOSOMOISO","district_id"=>114),
            array("code"=>"011411","name"=>"AHWIAA","district_id"=>114),
            array("code"=>"011412","name"=>"AMAFIE","district_id"=>114),
            array("code"=>"011413","name"=>"KOKOKROM","district_id"=>114),
            array("code"=>"011414","name"=>"ABODUAM","district_id"=>114),
            array("code"=>"011415","name"=>"ASAFO","district_id"=>114),
            array("code"=>"011416","name"=>"ASAWINSO","district_id"=>114),
            array("code"=>"011417","name"=>"PABOASE","district_id"=>114),


            array("code"=>"011501","name"=>"HOMGYEBRE","district_id"=>115),
            array("code"=>"011502","name"=>"SEFWI BEKWAI","district_id"=>115),
            array("code"=>"011503","name"=>"SURANO","district_id"=>115),
            array("code"=>"011504","name"=>"AWASO","district_id"=>115),
            array("code"=>"011505","name"=>"ASAWINSO","district_id"=>115),
            array("code"=>"011506","name"=>"ANHWIASO","district_id"=>115),
            array("code"=>"011507","name"=>"TANOSO-PRASO","district_id"=>115),
            array("code"=>"011508","name"=>"KUNKUMSO","district_id"=>115),
            array("code"=>"011509","name"=>"WENCHI","district_id"=>115),
            array("code"=>"011510","name"=>"HWENAMPORI","district_id"=>115),
            array("code"=>"011511","name"=>"BIBIANI","district_id"=>115),
            array("code"=>"011512","name"=>"CHIRANO","district_id"=>115),
            array("code"=>"011513","name"=>"SUBRI NKWANTA/KOJINA","district_id"=>115),


            array("code"=>"011301","name"=>"APRUTU","district_id"=>116),
            array("code"=>"011302","name"=>"NSAWURA","district_id"=>116),
            array("code"=>"011303","name"=>"BOPA","district_id"=>116),
            array("code"=>"011304","name"=>"AKONTOMBRA","district_id"=>116),
            array("code"=>"011305","name"=>"KOFI ACKAAKROM","district_id"=>116),


            array("code"=>"010901","name"=>"BOMPIESO","district_id"=>117),
            array("code"=>"010902","name"=>"AMOANDA","district_id"=>117),
            array("code"=>"010903","name"=>"HUNI VALLEY","district_id"=>117),
            array("code"=>"010904","name"=>"DAMANG","district_id"=>117),
            array("code"=>"010905","name"=>"AWUDUA","district_id"=>117),
            array("code"=>"010906","name"=>"PRESTEA","district_id"=>117),
            array("code"=>"010907","name"=>"HIMAN","district_id"=>117),
            array("code"=>"010908","name"=>"DUMASI","district_id"=>117),
            array("code"=>"010909","name"=>"BOGOSO","district_id"=>117),
            array("code"=>"010910","name"=>"KOOKOASE","district_id"=>117),
            array("code"=>"010911","name"=>"ABOSO","district_id"=>117),
            array("code"=>"010912","name"=>"BONDAI","district_id"=>117),
            array("code"=>"010913","name"=>"INSU/PETERLINE","district_id"=>117),


            array("code"=>"010301","name"=>"NSEIN","district_id"=>118),
            array("code"=>"010302","name"=>"AXIM","district_id"=>118),


            array("code"=>"011801","name"=>"MPOHOR","district_id"=>119),
            array("code"=>"011802","name"=>"AYIEM","district_id"=>119),
            array("code"=>"011803","name"=>"ADUM DOMINASE","district_id"=>119),
            array("code"=>"011804","name"=>"EDUM BANSO","district_id"=>119),
            array("code"=>"011805","name"=>"BOPP","district_id"=>119),
            array("code"=>"011806","name"=>"MANSO","district_id"=>119),


            array("code"=>"011601","name"=>"BONSU NKWANTA","district_id"=>120),
            array("code"=>"011602","name"=>"ANTOBIA","district_id"=>120),
            array("code"=>"011603","name"=>"JUABESO NKWANTA","district_id"=>120),
            array("code"=>"011604","name"=>"BOIZAN","district_id"=>120),
            array("code"=>"011605","name"=>"JUABOSO","district_id"=>120),
            array("code"=>"011606","name"=>"BENCHEMA","district_id"=>120),


            array("code"=>"010101","name"=>"EKPU","district_id"=>121),
            array("code"=>"010102","name"=>"HALF ASSINI","district_id"=>121),
            array("code"=>"010103","name"=>"EDU","district_id"=>121),
            array("code"=>"010104","name"=>"AHOBRE NO.2","district_id"=>121),
            array("code"=>"010105","name"=>"TAKINTA","district_id"=>121),
            array("code"=>"010106","name"=>"BONYERE","district_id"=>121),
            array("code"=>"010107","name"=>"EZINLIBO(ZINIBO)","district_id"=>121),
            array("code"=>"010108","name"=>"NDUMSUAZO","district_id"=>121),
            array("code"=>"010109","name"=>"ELLENDA","district_id"=>121),
            array("code"=>"010110","name"=>"ALLOWULE NO.1","district_id"=>121),
            array("code"=>"010111","name"=>"TIKOBO NO.1","district_id"=>121),
            array("code"=>"010112","name"=>"KENGEN","district_id"=>121),
            array("code"=>"010113","name"=>"NUBA","district_id"=>121),
            array("code"=>"010114","name"=>"SAMENYE","district_id"=>121),
            array("code"=>"010115","name"=>"MPATABA","district_id"=>121),
            array("code"=>"010116","name"=>"TIKOBO NO.2","district_id"=>121),
            array("code"=>"010117","name"=>"AVOLENU (NEW TOWN)","district_id"=>121),
            array("code"=>"010118","name"=>"EFASU","district_id"=>121),
            array("code"=>"010119","name"=>"GYAWUE WHARF","district_id"=>121),
            array("code"=>"010120","name"=>"ELUBO","district_id"=>121),


            array("code"=>"010201","name"=>"EIKWE","district_id"=>122),
            array("code"=>"010202","name"=>"KAMEBUNLI","district_id"=>122),
            array("code"=>"010203","name"=>"AWIEBO","district_id"=>122),
            array("code"=>"010204","name"=>"AIYINASE","district_id"=>122),
            array("code"=>"010205","name"=>"KIKAM","district_id"=>122),
            array("code"=>"010206","name"=>"ESIAMA","district_id"=>122),
            array("code"=>"010207","name"=>"NKROFUL","district_id"=>122),
            array("code"=>"010208","name"=>"TELEKU BOKAZO","district_id"=>122),
            array("code"=>"010209","name"=>"ASASETERE","district_id"=>122),
            array("code"=>"010210","name"=>"ASANTA","district_id"=>122),


            array("code"=>"012101","name"=>"AMOAYA","district_id"=>123),
            array("code"=>"012102","name"=>"KWESIKROM","district_id"=>123),
            array("code"=>"012103","name"=>"AHIBENSO","district_id"=>123),
            array("code"=>"012104","name"=>"SUIANO","district_id"=>123),
            array("code"=>"012105","name"=>"AFERE","district_id"=>123),
            array("code"=>"012106","name"=>"BODIE","district_id"=>123),


            array("code"=>"012201","name"=>"ADABOKROM","district_id"=>124),


            array("code"=>"011701","name"=>"AKAATISO","district_id"=>125),
            array("code"=>"011702","name"=>"YAWMATWA","district_id"=>125),
            array("code"=>"011703","name"=>"ELLUOKROM","district_id"=>125),
            array("code"=>"011704","name"=>"ADJOAFUA","district_id"=>125),
            array("code"=>"011705","name"=>"OLD DEBISO","district_id"=>125),
            array("code"=>"011706","name"=>"ESSAM","district_id"=>125),
            array("code"=>"011707","name"=>"KWAMEBIKROM","district_id"=>125),
            array("code"=>"011708","name"=>"OSEIKOJOKROM","district_id"=>125),
            array("code"=>"011709","name"=>"NEW ABESIM","district_id"=>125),


            array("code"=>"011201","name"=>"ASEMKROM","district_id"=>126),
            array("code"=>"011202","name"=>"GYEMA","district_id"=>126),
            array("code"=>"011203","name"=>"BOINSO","district_id"=>126),
            array("code"=>"011204","name"=>"ENCHI","district_id"=>126),
            array("code"=>"011205","name"=>"NEW YAKASI","district_id"=>126),
            array("code"=>"011206","name"=>"SEWUM","district_id"=>126),
            array("code"=>"011207","name"=>"OMANPE","district_id"=>126),
            array("code"=>"011208","name"=>"KWAWU","district_id"=>126),
            array("code"=>"011209","name"=>"NYANKAMAM","district_id"=>126),


            array("code"=>"010401","name"=>"AGONA NKWANTA","district_id"=>127),
            array("code"=>"010402","name"=>"AKATACHI","district_id"=>127),
            array("code"=>"010403","name"=>"BEAHU","district_id"=>127),
            array("code"=>"010404","name"=>"ADJUA","district_id"=>127),
            array("code"=>"010405","name"=>"FUNKO","district_id"=>127),
            array("code"=>"010406","name"=>"NEW AMANFUL","district_id"=>127),
            array("code"=>"010407","name"=>"APOWA","district_id"=>127),
            array("code"=>"010408","name"=>"KEJABIL","district_id"=>127),
            array("code"=>"010409","name"=>"HOTOPO","district_id"=>127),
            array("code"=>"010410","name"=>"DIXCOVE","district_id"=>127),
            array("code"=>"010411","name"=>"EWUSIEJO","district_id"=>127),


            array("code"=>"020101","name"=>"KOMENDA","district_id"=>66),
            array("code"=>"020102","name"=>"ABOROBEANO","district_id"=>66),
            array("code"=>"020103","name"=>"DOMENASE","district_id"=>66),
            array("code"=>"020104","name"=>"BESEASE","district_id"=>66),
            array("code"=>"020105","name"=>"ABEYEE","district_id"=>66),
            array("code"=>"020106","name"=>"ABREM AGONA","district_id"=>66),
            array("code"=>"020107","name"=>"ABREM BESEASE","district_id"=>66),
            array("code"=>"020108","name"=>"DUTCH KOMENDA","district_id"=>66),
            array("code"=>"020109","name"=>"KISSI","district_id"=>66),
            array("code"=>"020110","name"=>"BRONYIBIMA","district_id"=>66),
            array("code"=>"020111","name"=>"ABRESHIA","district_id"=>66),
            array("code"=>"020112","name"=>"NTRANOA","district_id"=>66),
            array("code"=>"020113","name"=>"ESSAMAN","district_id"=>66),
            array("code"=>"020114","name"=>"ELMINA","district_id"=>66),
            array("code"=>"020115","name"=>"TETTEH KESSIM","district_id"=>66),
            array("code"=>"020116","name"=>"BANTOMA","district_id"=>66),
            array("code"=>"020117","name"=>"AMPENYI","district_id"=>66),
            array("code"=>"020118","name"=>"ANKAFUL","district_id"=>66),


            array("code"=>"021401","name"=>"ASSIN DOMPEM","district_id"=>67),
            array("code"=>"021402","name"=>"ASSIN JUASO","district_id"=>67),
            array("code"=>"021403","name"=>"ASSIN NYANKOMASI","district_id"=>67),
            array("code"=>"021404","name"=>"ASSIN AKROPONG","district_id"=>67),
            array("code"=>"021405","name"=>"ASSIN BROFOYEDURU","district_id"=>67),
            array("code"=>"021406","name"=>"ASSIN ENDWA","district_id"=>67),
            array("code"=>"021407","name"=>"AKONFUDI","district_id"=>67),
            array("code"=>"021408","name"=>"ASSIN BEREKU","district_id"=>67),
            array("code"=>"021409","name"=>"ASSIN AWISEM","district_id"=>67),
            array("code"=>"021410","name"=>"ASSIN KUSHEA","district_id"=>67),
            array("code"=>"021411","name"=>"ASSIN DANSAME","district_id"=>67),
            array("code"=>"021412","name"=>"ASEMPANEYE","district_id"=>67),
            array("code"=>"021413","name"=>"ASSIN PRASO","district_id"=>67),
            array("code"=>"021414","name"=>"ANWEANSU","district_id"=>67),
            array("code"=>"021415","name"=>"ASSIN FOSU","district_id"=>67),


            array("code"=>"022001","name"=>"AWUTU BEREKU","district_id"=>68),
            array("code"=>"022002","name"=>"BONTRASE","district_id"=>68),
            array("code"=>"022003","name"=>"BAWJIASE","district_id"=>68),
            array("code"=>"022004","name"=>"ADAWUKWAO","district_id"=>68),
            array("code"=>"022005","name"=>"MANGOASE","district_id"=>68),
            array("code"=>"022006","name"=>"SENYA BEREKU","district_id"=>68),
            array("code"=>"022007","name"=>"AKWELE NKWANTA","district_id"=>68),
            array("code"=>"022008","name"=>"OFAAKOR","district_id"=>68),
            array("code"=>"022009","name"=>"AKWELEY","district_id"=>68),
            array("code"=>"022010","name"=>"ODUPONKPEHE KASOA","district_id"=>68),


            array("code"=>"020701","name"=>"SANKOR","district_id"=>69),
            array("code"=>"020702","name"=>"WINNEBA","district_id"=>69),


            array("code"=>"021601","name"=>"ASIKUMA","district_id"=>70),
            array("code"=>"021602","name"=>"DUNKWA-ON-OFFIN","district_id"=>70),


            array("code"=>"021101","name"=>"AGONA ABODOM","district_id"=>71),
            array("code"=>"021102","name"=>"AGONA BOBIKUMA","district_id"=>71),
            array("code"=>"021103","name"=>"AGONA KWAMAN","district_id"=>71),
            array("code"=>"021104","name"=>"AGONA NYAKROM","district_id"=>71),
            array("code"=>"021105","name"=>"AGONA NKUM","district_id"=>71),
            array("code"=>"021106","name"=>"AGONA SWEDRU","district_id"=>71),


            array("code"=>"020401","name"=>"Mankessim","district_id"=>72),
            array("code"=>"020402","name"=>"Saltpond","district_id"=>72),
            array("code"=>"020403","name"=>"Kormantse","district_id"=>72),
            array("code"=>"020404","name"=>"Abandze","district_id"=>72),
            array("code"=>"020405","name"=>"Anomabo","district_id"=>72),
            array("code"=>"020406","name"=>"Biriwa","district_id"=>72),
            array("code"=>"020407","name"=>"Yamoransa","district_id"=>72),
            array("code"=>"020408","name"=>"Abeadze Dominase","district_id"=>72),
            array("code"=>"020409","name"=>"Baifikrom","district_id"=>72),


            array("code"=>"021201","name"=>"BREMAN BEDUM","district_id"=>73),
            array("code"=>"021202","name"=>"BREMAN BAAKO","district_id"=>73),
            array("code"=>"021203","name"=>"BREMAN AMOANDA","district_id"=>73),
            array("code"=>"021204","name"=>"BREMAN AYIPEY","district_id"=>73),
            array("code"=>"021205","name"=>"BREMAN NWOMASO","district_id"=>73),
            array("code"=>"021206","name"=>"BREMAN ASIKUMA","district_id"=>73),
            array("code"=>"021207","name"=>"BREMAN BENIN","district_id"=>73),
            array("code"=>"021208","name"=>"BREMAN FOSUANSA","district_id"=>73),
            array("code"=>"021209","name"=>"BREMAN JAMRA","district_id"=>73),
            array("code"=>"021210","name"=>"BREMAN  KOKOSO","district_id"=>73),
            array("code"=>"021211","name"=>"BREMAN BRAKWA","district_id"=>73),
            array("code"=>"021212","name"=>"BREMAN AMANFOPONG","district_id"=>73),
            array("code"=>"021213","name"=>"KUNTANASE","district_id"=>73),
            array("code"=>"021214","name"=>"BREMAN ODOBEN","district_id"=>73),


            array("code"=>"021701","name"=>"NTOM","district_id"=>74),
            array("code"=>"021702","name"=>"DIASO","district_id"=>74),
            array("code"=>"021703","name"=>"MAUDASO","district_id"=>74),
            array("code"=>"021704","name"=>"DOMINASE","district_id"=>74),
            array("code"=>"021705","name"=>"NKOTUMSO","district_id"=>74),
            array("code"=>"021706","name"=>"AYANFURI","district_id"=>74),


            array("code"=>"021801","name"=>"WAWASE","district_id"=>75),
            array("code"=>"021802","name"=>"TWIFO HEMANG","district_id"=>75),
            array("code"=>"021803","name"=>"JUKWA","district_id"=>75),
            array("code"=>"021804","name"=>"KROBO","district_id"=>75),
            array("code"=>"021805","name"=>"AMPENKROM","district_id"=>75),
            array("code"=>"021806","name"=>"MFUOM","district_id"=>75),


            array("code"=>"021501","name"=>"TWIFO MAMPONG","district_id"=>76),
            array("code"=>"021502","name"=>"NTAFREWASO","district_id"=>76),
            array("code"=>"021503","name"=>"TWIFO NYINASE","district_id"=>76),
            array("code"=>"021504","name"=>"TWIFO PRASO","district_id"=>76),


            array("code"=>"020601","name"=>"GOMOA DAGO","district_id"=>77),
            array("code"=>"020602","name"=>"MUMFORD","district_id"=>77),
            array("code"=>"020603","name"=>"APAM","district_id"=>77),
            array("code"=>"020604","name"=>"GOMOA ANKAMU","district_id"=>77),
            array("code"=>"020605","name"=>"GOMOA BROFO","district_id"=>77),
            array("code"=>"020606","name"=>"GOMOA DAWURAMPONG","district_id"=>77),
            array("code"=>"020607","name"=>"GOMOA MANKESIM","district_id"=>77),
            array("code"=>"020608","name"=>"GOMOA TARKWA","district_id"=>77),
            array("code"=>"020609","name"=>"GOMOA ESHIEM","district_id"=>77),
            array("code"=>"020610","name"=>"GOMOA ABAMKROM","district_id"=>77),
            array("code"=>"020611","name"=>"GOMOA MOZANO","district_id"=>77),
            array("code"=>"020612","name"=>"GOMOA PINANKO","district_id"=>77),


            array("code"=>"020801","name"=>"NYANYANO","district_id"=>78),
            array("code"=>"020802","name"=>"GOMOA FETTEH","district_id"=>78),
            array("code"=>"020803","name"=>"BUDUBURAM","district_id"=>78),
            array("code"=>"020804","name"=>"AKOTSI","district_id"=>78),
            array("code"=>"020805","name"=>"OJOBI","district_id"=>78),
            array("code"=>"020806","name"=>"GOMOA DOMINASE","district_id"=>78),
            array("code"=>"020807","name"=>"GOMOA ASEBU","district_id"=>78),
            array("code"=>"020808","name"=>"GOMOA AKROPONG NO. 2","district_id"=>78),
            array("code"=>"020809","name"=>"GOMOA AKROFUL","district_id"=>78),
            array("code"=>"020810","name"=>"GOMOA ABOSA","district_id"=>78),
            array("code"=>"020811","name"=>"EKWAMKROM","district_id"=>78),
            array("code"=>"020812","name"=>"GOMOA DARHOM","district_id"=>78),
            array("code"=>"020813","name"=>"ACHIASE","district_id"=>78),
            array("code"=>"020814","name"=>"GOMOA AFRANSI","district_id"=>78),
            array("code"=>"020815","name"=>"GYAMAN","district_id"=>78),
            array("code"=>"020816","name"=>"GOMOA BENSO","district_id"=>78),
            array("code"=>"020817","name"=>"ANSAFUL","district_id"=>78),
            array("code"=>"020818","name"=>"GOMOA JUKWA","district_id"=>78),
            array("code"=>"020819","name"=>"GOMOA OBUASI","district_id"=>78),
            array("code"=>"020820","name"=>"NYANYANO KAKRABA","district_id"=>78),


            array("code"=>"021901","name"=>"TANTUM (OTUAM)","district_id"=>79),
            array("code"=>"021902","name"=>"ESSAKYIR","district_id"=>79),
            array("code"=>"021903","name"=>"NARKWA","district_id"=>79),
            array("code"=>"021904","name"=>"EYISAM","district_id"=>79),


            array("code"=>"021301","name"=>"KRUWA","district_id"=>80),
            array("code"=>"021302","name"=>"JAKAI","district_id"=>80),
            array("code"=>"021303","name"=>"ASSIN ANYINABRIM","district_id"=>80),
            array("code"=>"021304","name"=>"AKROFUOM","district_id"=>80),
            array("code"=>"021305","name"=>"ASSIN ANDOE","district_id"=>80),
            array("code"=>"021306","name"=>"ASSIN BOSOMADWIE","district_id"=>80),
            array("code"=>"021307","name"=>"ASAMANKESE","district_id"=>80),
            array("code"=>"021308","name"=>"ASSIN MANSO","district_id"=>80),
            array("code"=>"021309","name"=>"NSUTA","district_id"=>80),
            array("code"=>"021310","name"=>"ASSIN ONGWA (AWOROSO)","district_id"=>80),
            array("code"=>"021311","name"=>"ADIEMBRA","district_id"=>80),
            array("code"=>"021312","name"=>"ADUBIASE","district_id"=>80),
            array("code"=>"021313","name"=>"ASSIN NSUAEM","district_id"=>80),
            array("code"=>"021314","name"=>"NYANKOMASI AHENKRO","district_id"=>80),


            array("code"=>"020501","name"=>"OCHISO","district_id"=>81),
            array("code"=>"020502","name"=>"OSEDZI","district_id"=>81),
            array("code"=>"020503","name"=>"BAA","district_id"=>81),
            array("code"=>"020504","name"=>"ESHIEM","district_id"=>81),
            array("code"=>"020505","name"=>"ENTUMBIL","district_id"=>81),
            array("code"=>"020506","name"=>"ASSASAN","district_id"=>81),
            array("code"=>"020507","name"=>"AJUMAKO","district_id"=>81),
            array("code"=>"020508","name"=>"TECHIMAN","district_id"=>81),
            array("code"=>"020509","name"=>"ONWANE","district_id"=>81),
            array("code"=>"020510","name"=>"AJUMAKO MANDO","district_id"=>81),
            array("code"=>"020511","name"=>"ABAASA","district_id"=>81),
            array("code"=>"020512","name"=>"KROMAIM","district_id"=>81),
            array("code"=>"020513","name"=>"ENYAN DENKYIRA","district_id"=>81),
            array("code"=>"020514","name"=>"ENYAN APAA","district_id"=>81),
            array("code"=>"020515","name"=>"ENYAN MAIM","district_id"=>81),
            array("code"=>"020516","name"=>"BESEASE","district_id"=>81),
            array("code"=>"020517","name"=>"KOKOBEN","district_id"=>81),


            array("code"=>"021001","name"=>"AGONA KWANYAKO","district_id"=>82),
            array("code"=>"021002","name"=>"MANKRONG NKWANTA","district_id"=>82),
            array("code"=>"021003","name"=>"AGONA ASAFO","district_id"=>82),
            array("code"=>"021004","name"=>"AGONA DUAKWA","district_id"=>82),
            array("code"=>"021005","name"=>"AGONA MENSAKROM","district_id"=>82),
            array("code"=>"021006","name"=>"AGONA NSABA","district_id"=>82),
            array("code"=>"021007","name"=>"KOTOKORI ZONGO","district_id"=>82),


            array("code"=>"020301","name"=>"ASEBU","district_id"=>83),
            array("code"=>"020302","name"=>"MOREE","district_id"=>83),
            array("code"=>"020303","name"=>"BRAFOYAW","district_id"=>83),
            array("code"=>"020304","name"=>"AMOSIMA","district_id"=>83),
            array("code"=>"020305","name"=>"ASEBU-EKROFUL","district_id"=>83),
            array("code"=>"020306","name"=>"NEW EBU","district_id"=>83),
            array("code"=>"020307","name"=>"ABAKRAMPA","district_id"=>83),
            array("code"=>"020308","name"=>"NYAMEDOM","district_id"=>83),
            array("code"=>"020309","name"=>"EDUMFA","district_id"=>83),
            array("code"=>"020310","name"=>"ABURA-DUNKWA","district_id"=>83),



            array("code"=>"030201","name"=>"NII BOYE TOWN","district_id"=>28),
            array("code"=>"030202","name"=>"CHANTAN","district_id"=>28),
            array("code"=>"030203","name"=>"ISRAEL","district_id"=>28),
            array("code"=>"030204","name"=>"NEW ACHIMOTA","district_id"=>28),
            array("code"=>"030205","name"=>"LOMNAVA","district_id"=>28),
            array("code"=>"030206","name"=>"TANTRA HILL","district_id"=>28),
            array("code"=>"030207","name"=>"ASOFAA","district_id"=>28),
            array("code"=>"030208","name"=>"AMAMOLE","district_id"=>28),
            array("code"=>"030209","name"=>"OFANKOR","district_id"=>28),
            array("code"=>"030210","name"=>"POKUASE","district_id"=>28),
            array("code"=>"030211","name"=>"AMASAMAN","district_id"=>28),
            array("code"=>"030212","name"=>"AMANFROM","district_id"=>28),
            array("code"=>"030213","name"=>"AWOSHIE","district_id"=>28),
            array("code"=>"030214","name"=>"AYAWASO","district_id"=>28),
            array("code"=>"030215","name"=>"FISE","district_id"=>28),
            array("code"=>"030216","name"=>"KWASHIEBU","district_id"=>28),


            array("code"=>"030101","name"=>"KOKROBITE","district_id"=>29),
            array("code"=>"030102","name"=>"OSHIYIE","district_id"=>29),
            array("code"=>"030103","name"=>"BORTIANOR","district_id"=>29),
            array("code"=>"030104","name"=>"NEW APLAKU","district_id"=>29),
            array("code"=>"030105","name"=>"MANDELA-WEIJA","district_id"=>29),
            array("code"=>"030106","name"=>"SAMPA VALLEY","district_id"=>29),
            array("code"=>"030107","name"=>"MENDSKROM","district_id"=>29),
            array("code"=>"030108","name"=>"MALLAM","district_id"=>29),
            array("code"=>"030109","name"=>"GBAWE","district_id"=>29),
            array("code"=>"030110","name"=>"OBLOGO","district_id"=>29),
            array("code"=>"030111","name"=>"WEIJA","district_id"=>29),
            array("code"=>"030112","name"=>"MACCARTHY HILL","district_id"=>29),
            array("code"=>"030113","name"=>"JEI KRODUA","district_id"=>29),
            array("code"=>"030114","name"=>"TUBAKROM","district_id"=>29),
            array("code"=>"030115","name"=>"NGLESHIE AMANFROM","district_id"=>29),


            array("code"=>"030301","name"=>"DOME","district_id"=>30),
            array("code"=>"030302","name"=>"PAPAO","district_id"=>30),
            array("code"=>"030303","name"=>"TAIFA","district_id"=>30),
            array("code"=>"030304","name"=>"KWABENYA","district_id"=>30),
            array("code"=>"030305","name"=>"AGBOGBA","district_id"=>30),
            array("code"=>"030306","name"=>"NEW ASHOOMA MUSUKA","district_id"=>30),
            array("code"=>"030307","name"=>"ASHONGMAN ESTATE","district_id"=>30),
            array("code"=>"030308","name"=>"ASHONGMAN","district_id"=>30),
            array("code"=>"030309","name"=>"ABOKOBI","district_id"=>30),
            array("code"=>"030310","name"=>"HATSO","district_id"=>30),


            array("code"=>"031101","name"=>"ANYAA","district_id"=>31),
            array("code"=>"031102","name"=>"ABLEKUMA","district_id"=>31),
            array("code"=>"031103","name"=>"ABLEKUMAN / ANYAA","district_id"=>31),
            array("code"=>"031104","name"=>"SANTA MARIE","district_id"=>31),
            array("code"=>"031105","name"=>"SOWUTUOM","district_id"=>31),


            array("code"=>"030501","name"=>"ASHIYIE","district_id"=>32),
            array("code"=>"030502","name"=>"FRAFRAHA","district_id"=>32),
            array("code"=>"030503","name"=>"ADENTA EAST","district_id"=>32),
            array("code"=>"030504","name"=>"NMAI DZORN","district_id"=>32),
            array("code"=>"030505","name"=>"ASHALEY BOTWE","district_id"=>32),
            array("code"=>"030506","name"=>"OGBOJO","district_id"=>32),
            array("code"=>"030507","name"=>"DZEN AYOR","district_id"=>32),
            array("code"=>"030508","name"=>"ADJIRIGANO","district_id"=>32),
            array("code"=>"030509","name"=>"OTANOR","district_id"=>32),
            array("code"=>"030510","name"=>"ADENTA","district_id"=>32),
            array("code"=>"030511","name"=>"TESA","district_id"=>32),


            array("code"=>"030601","name"=>"ADJORMAN","district_id"=>33),
            array("code"=>"030602","name"=>"BAATSONAA","district_id"=>33),
            array("code"=>"030603","name"=>"GREDA ESTATES","district_id"=>33),
            array("code"=>"030604","name"=>"MARTEY TSURU","district_id"=>33),
            array("code"=>"030605","name"=>"NORTH NUNGUA","district_id"=>33),
            array("code"=>"030606","name"=>"NORTH TESHIE","district_id"=>33),
            array("code"=>"030607","name"=>"NUNGUA","district_id"=>33),
            array("code"=>"030608","name"=>"REGIMANUAL ESTATE (EAST","district_id"=>33),
            array("code"=>"030609","name"=>"SOUTH TESHIE","district_id"=>33),
            array("code"=>"030610","name"=>"TESHIE","district_id"=>33),
            array("code"=>"030611","name"=>"TESHIE CAMP","district_id"=>33),
            array("code"=>"030612","name"=>"TESHIE NUNGUA ESTATE","district_id"=>33),


            array("code"=>"031301","name"=>"MADINA","district_id"=>34),
            array("code"=>"031302","name"=>"ADENTA WEST","district_id"=>34),
            array("code"=>"031303","name"=>"OSHIYIE","district_id"=>34),
            array("code"=>"031304","name"=>"OYARIFA","district_id"=>34),
            array("code"=>"031305","name"=>"AMANFROKOO","district_id"=>34),
            array("code"=>"031306","name"=>"AIRPORT","district_id"=>34),
            array("code"=>"031307","name"=>"BURMA CAMP","district_id"=>34),
            array("code"=>"031308","name"=>"CANTONMENTS","district_id"=>34),
            array("code"=>"031309","name"=>"LA","district_id"=>34),
            array("code"=>"031310","name"=>"EAST CANTOMENTS","district_id"=>34),
            array("code"=>"031311","name"=>"NORTH LABONE","district_id"=>34),
            array("code"=>"031312","name"=>"SOUTH LA","district_id"=>34),


            array("code"=>"030701","name"=>"ASHIAMAN","district_id"=>35),


            array("code"=>"030901","name"=>"DODOWA","district_id"=>36),
            array("code"=>"030902","name"=>"KODIABE","district_id"=>36),
            array("code"=>"030903","name"=>"DORYUMU","district_id"=>36),
            array("code"=>"030904","name"=>"ASUTSUARE","district_id"=>36),
            array("code"=>"030905","name"=>"AYIKUMA","district_id"=>36),


            array("code"=>"031501","name"=>"DAWHENYA","district_id"=>37),
            array("code"=>"031502","name"=>"MATEHEKO","district_id"=>37),
            array("code"=>"031503","name"=>"ABLEKUMA","district_id"=>37),
            array("code"=>"031504","name"=>"AFIENYA","district_id"=>37),
            array("code"=>"031505","name"=>"PRAMPRAM","district_id"=>37),
            array("code"=>"031506","name"=>"NEW NINGO","district_id"=>37),
            array("code"=>"031507","name"=>"OLD NINGO","district_id"=>37),
            array("code"=>"031508","name"=>"ANWHIAM","district_id"=>37),
            array("code"=>"031509","name"=>"MONGOCHONYA","district_id"=>37),
            array("code"=>"031510","name"=>"LEKPONGUNOR","district_id"=>37),


            array("code"=>"031401","name"=>"OYIBI","district_id"=>38),
            array("code"=>"031402","name"=>"KOBEKRO NO.1","district_id"=>38),
            array("code"=>"031403","name"=>"KPONE","district_id"=>38),
            array("code"=>"031404","name"=>"ZENU","district_id"=>38),
            array("code"=>"031405","name"=>"GBETSELI","district_id"=>38),
            array("code"=>"031406","name"=>"MICHEL CAMP","district_id"=>38),
            array("code"=>"031407","name"=>"KAKASUNANKA II","district_id"=>38),
            array("code"=>"031408","name"=>"ADAMOROBE","district_id"=>38),
            array("code"=>"031409","name"=>"TEMA INDUSTRIAL AREA","district_id"=>38),
            array("code"=>"031410","name"=>"TEMA NEW TOWN","district_id"=>38),


            array("code"=>"031601","name"=>"LOLONYA","district_id"=>39),
            array("code"=>"031602","name"=>"GOI","district_id"=>39),
            array("code"=>"031603","name"=>"ANYAMAM","district_id"=>39),
            array("code"=>"031604","name"=>"AKPLABANYA","district_id"=>39),
            array("code"=>"031605","name"=>"BORNKOPE","district_id"=>39),
            array("code"=>"031606","name"=>"ADZOMANUKOPE","district_id"=>39),
            array("code"=>"031607","name"=>"TOFLOKPO","district_id"=>39),
            array("code"=>"031608","name"=>"KOLUEDOR","district_id"=>39),
            array("code"=>"031609","name"=>"SEGE JUNCTION","district_id"=>39),


            array("code"=>"031001","name"=>"AZIZANYA","district_id"=>40),
            array("code"=>"031002","name"=>"ADA FOAH","district_id"=>40),
            array("code"=>"031003","name"=>"TOTIMEKOPE","district_id"=>40),
            array("code"=>"031004","name"=>"BIG ADA","district_id"=>40),
            array("code"=>"031005","name"=>"PUTE","district_id"=>40),
            array("code"=>"031006","name"=>"BEDEKU","district_id"=>40),
            array("code"=>"031007","name"=>"KASSEH","district_id"=>40),



            array("code"=>"040101","name"=>"AGBAKOPE","district_id"=>128),
            array("code"=>"040102","name"=>"SOKPOE","district_id"=>128),
            array("code"=>"040103","name"=>"SOGAKOPE","district_id"=>128),
            array("code"=>"040104","name"=>"DABALA","district_id"=>128),
            array("code"=>"040105","name"=>"HIKPO","district_id"=>128),
            array("code"=>"040106","name"=>"TEFLE","district_id"=>128),
            array("code"=>"040107","name"=>"AGBADZA KOPE","district_id"=>128),
            array("code"=>"040108","name"=>"AGORKPO","district_id"=>128),


            array("code"=>"040901","name"=>"PEKI-DZAKE","district_id"=>129),
            array("code"=>"040902","name"=>"PEKI AVETILE","district_id"=>129),
            array("code"=>"040903","name"=>"PEKI TSAME","district_id"=>129),
            array("code"=>"040904","name"=>"KPEVE (NEW TOWM)","district_id"=>129),
            array("code"=>"040905","name"=>"TOH KPALIME","district_id"=>129),
            array("code"=>"040906","name"=>"PEKI WUDOME","district_id"=>129),
            array("code"=>"040907","name"=>"DZEMENI","district_id"=>129),


            array("code"=>"041901","name"=>"AVEYIME","district_id"=>130),
            array("code"=>"041902","name"=>"PODOE","district_id"=>130),
            array("code"=>"041903","name"=>"JUAPONG","district_id"=>130),
            array("code"=>"041904","name"=>"BATTOR","district_id"=>130),
            array("code"=>"041905","name"=>"MEPE","district_id"=>130),


            array("code"=>"042401","name"=>"VAKPO","district_id"=>131),
            array("code"=>"042402","name"=>"ANFOEGA AKUKORME","district_id"=>131),
            array("code"=>"042403","name"=>"ANFOEGA ADAME","district_id"=>131),
            array("code"=>"042404","name"=>"WUSUTA DAYI","district_id"=>131),


            array("code"=>"041701","name"=>"PUSUPU","district_id"=>132),
            array("code"=>"041702","name"=>"BREWANIASE","district_id"=>132),
            array("code"=>"041703","name"=>"KECHEIBI","district_id"=>132),
            array("code"=>"041704","name"=>"OFOSU","district_id"=>132),
            array("code"=>"041705","name"=>"KERI","district_id"=>132),
            array("code"=>"041706","name"=>"ODUMASE ADELE","district_id"=>132),
            array("code"=>"041707","name"=>"NKWANTA","district_id"=>132),
            array("code"=>"041708","name"=>"BONAKYE","district_id"=>132),
            array("code"=>"041709","name"=>"NYAMBONG","district_id"=>132),
            array("code"=>"041710","name"=>"ASHIABRE","district_id"=>132),


            array("code"=>"041801","name"=>"SIBI CENTRAL","district_id"=>133),
            array("code"=>"041802","name"=>"SIBI HILL TOP","district_id"=>133),
            array("code"=>"041803","name"=>"ABUNYANYA","district_id"=>133),
            array("code"=>"041804","name"=>"TINJASE","district_id"=>133),
            array("code"=>"041805","name"=>"KPASSA","district_id"=>133),
            array("code"=>"041806","name"=>"DAMANKO","district_id"=>133),
            array("code"=>"041807","name"=>"NABU","district_id"=>133),


            array("code"=>"041601","name"=>"EHIAMANKYENE","district_id"=>134),
            array("code"=>"041602","name"=>"OSRAMANI","district_id"=>134),
            array("code"=>"041603","name"=>"KETE KRACHI","district_id"=>134),


            array("code"=>"042501","name"=>"BANDA","district_id"=>135),
            array("code"=>"042502","name"=>"GRUBI","district_id"=>135),
            array("code"=>"042503","name"=>"BORAE No.2","district_id"=>135),
            array("code"=>"042504","name"=>"CHINDERI","district_id"=>135),
            array("code"=>"042505","name"=>"AKANIEM","district_id"=>135),
            array("code"=>"042506","name"=>"BEJAMSE","district_id"=>135),
            array("code"=>"042507","name"=>"BUAFRI","district_id"=>135),


            array("code"=>"041501","name"=>"ASUKAWKAW","district_id"=>136),
            array("code"=>"041502","name"=>"PAI-KATANGA","district_id"=>136),
            array("code"=>"041503","name"=>"DAMBAI","district_id"=>136),
            array("code"=>"041504","name"=>"KPAREKPARE","district_id"=>136),
            array("code"=>"041505","name"=>"DORMABIN","district_id"=>136),
            array("code"=>"041506","name"=>"TOKUROANO","district_id"=>136),


            array("code"=>"041001","name"=>"KPANDO TORKOR","district_id"=>137),
            array("code"=>"041002","name"=>"SOVIE","district_id"=>137),
            array("code"=>"041003","name"=>"KPANDO","district_id"=>137),
            array("code"=>"041004","name"=>"GBEFI HOEME","district_id"=>137),


            array("code"=>"040301","name"=>"AVOEME","district_id"=>138),
            array("code"=>"040302","name"=>"VIEPE","district_id"=>138),
            array("code"=>"040303","name"=>"DENU","district_id"=>138),
            array("code"=>"040304","name"=>"HEDZANAWO","district_id"=>138),
            array("code"=>"040305","name"=>"ADAFIENU","district_id"=>138),
            array("code"=>"040306","name"=>"AGAVEDZI","district_id"=>138),
            array("code"=>"040307","name"=>"BLEKUSU","district_id"=>138),
            array("code"=>"040308","name"=>"ADINA","district_id"=>138),
            array("code"=>"040309","name"=>"AGBOZUME","district_id"=>138),
            array("code"=>"040310","name"=>"KLIKOR","district_id"=>138),
            array("code"=>"040311","name"=>"AFLAO","district_id"=>138),


            array("code"=>"040401","name"=>"DZODZE","district_id"=>139),
            array("code"=>"040402","name"=>"PENYI","district_id"=>139),
            array("code"=>"040403","name"=>"TADZEWU","district_id"=>139),
            array("code"=>"040404","name"=>"AFIFE","district_id"=>139),
            array("code"=>"040405","name"=>"WETA","district_id"=>139),
            array("code"=>"040406","name"=>"EHIE","district_id"=>139),


            array("code"=>"040201","name"=>"DZITA-AGBLEDOMI","district_id"=>140),
            array("code"=>"040202","name"=>"WHUTI","district_id"=>140),
            array("code"=>"040203","name"=>"ANLOGA","district_id"=>140),
            array("code"=>"040204","name"=>"WOE","district_id"=>140),
            array("code"=>"040205","name"=>"TEGBI","district_id"=>140),
            array("code"=>"040206","name"=>"DZELUKOPE","district_id"=>140),
            array("code"=>"040207","name"=>"KETA","district_id"=>140),
            array("code"=>"040208","name"=>"ANYAKO","district_id"=>140),
            array("code"=>"040209","name"=>"ANLO AFIADENYIGBA","district_id"=>140),
            array("code"=>"040210","name"=>"ABOR","district_id"=>140),
            array("code"=>"040211","name"=>"TSIAME","district_id"=>140),
            array("code"=>"040212","name"=>"HATORGODO","district_id"=>140),
            array("code"=>"040213","name"=>"DZITA","district_id"=>140),
            array("code"=>"040214","name"=>"ADZIDO-VORDZA","district_id"=>140),
            array("code"=>"040215","name"=>"ANYANUI","district_id"=>140),
            array("code"=>"040216","name"=>"ATIAVI","district_id"=>140),


            array("code"=>"041401","name"=>"DODI PAPASE","district_id"=>141),
            array("code"=>"041402","name"=>"AHAMANSU","district_id"=>141),
            array("code"=>"041403","name"=>"ASATO","district_id"=>141),
            array("code"=>"041404","name"=>"POASE CEMENT","district_id"=>141),
            array("code"=>"041405","name"=>"DODI MEMPEASEM","district_id"=>141),
            array("code"=>"041406","name"=>"KADJEBI","district_id"=>141),
            array("code"=>"041407","name"=>"DODO AMANFROM","district_id"=>141),
            array("code"=>"041408","name"=>"PAMPAWIE AMANTA","district_id"=>141),


            array("code"=>"041301","name"=>"JASIKAN","district_id"=>142),
            array("code"=>"041302","name"=>"KUTE","district_id"=>142),
            array("code"=>"041303","name"=>"BODADA","district_id"=>142),
            array("code"=>"041304","name"=>"TETEMAN","district_id"=>142),
            array("code"=>"041305","name"=>"NEW AYOMA","district_id"=>142),
            array("code"=>"041306","name"=>"OKADJAKROM","district_id"=>142),


            array("code"=>"041101","name"=>"LOLOBI KUMASI","district_id"=>143),
            array("code"=>"041102","name"=>"LOLOBI ASHAMBI","district_id"=>143),
            array("code"=>"041103","name"=>"SANTROKOFI-BENUA","district_id"=>143),
            array("code"=>"041104","name"=>"HOHOE","district_id"=>143),
            array("code"=>"041105","name"=>"GBI WEGBE","district_id"=>143),
            array("code"=>"041106","name"=>"ALAVANYO WUDIDI","district_id"=>143),
            array("code"=>"041107","name"=>"LIKPE BAKWA","district_id"=>143),
            array("code"=>"041108","name"=>"GBI ATABU","district_id"=>143),
            array("code"=>"041109","name"=>"KLEDJO","district_id"=>143),
            array("code"=>"041110","name"=>"ALAVANYO DZOGBEDZE","district_id"=>143),
            array("code"=>"041111","name"=>"GBI KPOETA","district_id"=>143),


            array("code"=>"042201","name"=>"DEDEDO","district_id"=>144),
            array("code"=>"042202","name"=>"TSITO","district_id"=>144),
            array("code"=>"042203","name"=>"ABUATIA - TETI","district_id"=>144),
            array("code"=>"042204","name"=>"ABUATIA - KLOE","district_id"=>144),
            array("code"=>"042205","name"=>"AVENUI","district_id"=>144),
            array("code"=>"042206","name"=>"ANYIRAWASE","district_id"=>144),
            array("code"=>"042207","name"=>"KPEDZE (AWLIME)","district_id"=>144),
            array("code"=>"042208","name"=>"DZOLO KPUITA","district_id"=>144),
            array("code"=>"042209","name"=>"DZOLO GBOGAME","district_id"=>144),


            array("code"=>"040801","name"=>"ZIAVE DZOGBE","district_id"=>145),
            array("code"=>"040802","name"=>"HO","district_id"=>145),
            array("code"=>"040803","name"=>"TAVIEFE AVENYA","district_id"=>145),
            array("code"=>"040804","name"=>"TAVIEFE DEME","district_id"=>145),
            array("code"=>"040805","name"=>"ATIKPUI","district_id"=>145),
            array("code"=>"040806","name"=>"KLEFE ACHATIME","district_id"=>145),
            array("code"=>"040807","name"=>"GHANA NYIVE","district_id"=>145),
            array("code"=>"040808","name"=>"KPENOE HELUTSEKOPE","district_id"=>145),


            array("code"=>"040601","name"=>"MAFI KUMASE","district_id"=>146),
            array("code"=>"040602","name"=>"ADIDOME","district_id"=>146),


            array("code"=>"041201","name"=>"KWAMEKROM","district_id"=>147),
            array("code"=>"041202","name"=>"NKONYA WURUPONG","district_id"=>147),
            array("code"=>"041203","name"=>"NKONYA AHENKRO","district_id"=>147),
            array("code"=>"041204","name"=>"TAPA ABOTOASE","district_id"=>147),
            array("code"=>"041205","name"=>"APESOKUBI","district_id"=>147),
            array("code"=>"041206","name"=>"WORAWORA","district_id"=>147),
            array("code"=>"041207","name"=>"TAPA AMANYA","district_id"=>147),


            array("code"=>"040501","name"=>"AVENORPEDO","district_id"=>148),
            array("code"=>"040502","name"=>"AKATSI","district_id"=>148),


            array("code"=>"042001","name"=>"AVE DAKPA","district_id"=>149),


            array("code"=>"040701","name"=>"ZIOPE","district_id"=>150),
            array("code"=>"040702","name"=>"AGOTIME KPETOE","district_id"=>150),


            array("code"=>"042301","name"=>"VE GOLOKWATI","district_id"=>151),
            array("code"=>"042302","name"=>"LEKLEBI DUGA","district_id"=>151),
            array("code"=>"042303","name"=>"LIATI AGBONYIRA","district_id"=>151),
            array("code"=>"042304","name"=>"VE DEME","district_id"=>151),
            array("code"=>"042305","name"=>"LOGBA TOTTA","district_id"=>151),
            array("code"=>"042306","name"=>"HAVE ETOE","district_id"=>151),
            array("code"=>"042307","name"=>"AGATE","district_id"=>151),
            array("code"=>"042308","name"=>"TAFI ABUIPE","district_id"=>151),
            array("code"=>"042309","name"=>"LOGBA ALAKPETI","district_id"=>151),
            array("code"=>"042310","name"=>"TAFI ATOME","district_id"=>151),


            array("code"=>"042101","name"=>"ADAKLU WAYA","district_id"=>152),
            array("code"=>"042102","name"=>"AHUNDA KPODZI","district_id"=>152),




            array("code"=>"050801","name"=>"SAWER","district_id"=>84),
            array("code"=>"050802","name"=>"OGOME","district_id"=>84),
            array("code"=>"050803","name"=>"SOMANYA","district_id"=>84),
            array("code"=>"050804","name"=>"ADJIKPO","district_id"=>84),
            array("code"=>"050805","name"=>"NKURAKAN","district_id"=>84),
            array("code"=>"050806","name"=>"SRA","district_id"=>84),


            array("code"=>"050301","name"=>"OWORAM","district_id"=>85),
            array("code"=>"050302","name"=>"OSENASE","district_id"=>85),
            array("code"=>"050303","name"=>"AKANTENG","district_id"=>85),
            array("code"=>"050304","name"=>"ASAMANKESE","district_id"=>85),
            array("code"=>"050305","name"=>"EKOSO","district_id"=>85),
            array("code"=>"050306","name"=>"QUARSHIE","district_id"=>85),


            array("code"=>"052201","name"=>"ABAMKROM","district_id"=>86),
            array("code"=>"052202","name"=>"ASUOKAW","district_id"=>86),
            array("code"=>"052203","name"=>"MEPOM","district_id"=>86),
            array("code"=>"052204","name"=>"ASIKASU","district_id"=>86),
            array("code"=>"052205","name"=>"ASUOTWENE","district_id"=>86),
            array("code"=>"052206","name"=>"OKORASE","district_id"=>86),
            array("code"=>"052207","name"=>"ADEISO","district_id"=>86),


            array("code"=>"051101","name"=>"AKATENG","district_id"=>87),
            array("code"=>"051102","name"=>"ASESEWA","district_id"=>87),
            array("code"=>"051103","name"=>"SEKESUA","district_id"=>87),


            array("code"=>"050401","name"=>"AKORABO","district_id"=>88),
            array("code"=>"050402","name"=>"SUHUM","district_id"=>88),
            array("code"=>"050403","name"=>"NANKESE","district_id"=>88),


            array("code"=>"050501","name"=>"ADOAGYIRI","district_id"=>89),
            array("code"=>"050502","name"=>"SEKYIKROM","district_id"=>89),
            array("code"=>"050503","name"=>"NSAWAM","district_id"=>89),
            array("code"=>"050504","name"=>"ANKWA DOBORO","district_id"=>89),


            array("code"=>"050701","name"=>"KOFORIDUA","district_id"=>90),
            array("code"=>"050702","name"=>"KOFORIDUA ADA","district_id"=>90),
            array("code"=>"050703","name"=>"EFFIDUASE","district_id"=>90),
            array("code"=>"050704","name"=>"ASOKORE","district_id"=>90),
            array("code"=>"050705","name"=>"OYOKO","district_id"=>90),
            array("code"=>"050706","name"=>"AKWADUM","district_id"=>90),
            array("code"=>"050707","name"=>"JUMAPO","district_id"=>90),
            array("code"=>"050708","name"=>"SUHYEN","district_id"=>90),


            array("code"=>"050901","name"=>"AGORMANYA","district_id"=>91),
            array("code"=>"050902","name"=>"NUASO","district_id"=>91),
            array("code"=>"050903","name"=>"KPONG","district_id"=>91),
            array("code"=>"050904","name"=>"ATUA","district_id"=>91),
            array("code"=>"050905","name"=>"AKUSE","district_id"=>91),
            array("code"=>"050906","name"=>"MANYA KPONGUNOR","district_id"=>91),
            array("code"=>"050907","name"=>"ODUMASE","district_id"=>91),


            array("code"=>"051801","name"=>"KWAHU-NSABAH","district_id"=>92),
            array("code"=>"051802","name"=>"ASUBONE RAILS","district_id"=>92),
            array("code"=>"051803","name"=>"AMANFROM","district_id"=>92),
            array("code"=>"051804","name"=>"NKAWKAW","district_id"=>92),


            array("code"=>"051901","name"=>"ATIBIE","district_id"=>93),
            array("code"=>"051902","name"=>"MPRAESO","district_id"=>93),
            array("code"=>"051903","name"=>"OBOMENG","district_id"=>93),
            array("code"=>"051904","name"=>"OBO","district_id"=>93),
            array("code"=>"051905","name"=>"TWENEDURASE","district_id"=>93),
            array("code"=>"051906","name"=>"ASAKRAKA","district_id"=>93),
            array("code"=>"051907","name"=>"BEPONG","district_id"=>93),
            array("code"=>"051908","name"=>"KWAHU PRASO NO.1","district_id"=>93),
            array("code"=>"051909","name"=>"KWAHU PRASO NO.2","district_id"=>93),


            array("code"=>"052001","name"=>"BESEASE","district_id"=>94),
            array("code"=>"052002","name"=>"NKWATIA","district_id"=>94),
            array("code"=>"052003","name"=>"ADUAMOA","district_id"=>94),
            array("code"=>"052004","name"=>"PEPEASE","district_id"=>94),
            array("code"=>"052005","name"=>"SUMINAKESE","district_id"=>94),
            array("code"=>"052006","name"=>"AKWASIHO","district_id"=>94),
            array("code"=>"052007","name"=>"KOTOSO","district_id"=>94),
            array("code"=>"052008","name"=>"KWAHU TAFO","district_id"=>94),
            array("code"=>"052009","name"=>"MIASO","district_id"=>94),
            array("code"=>"052010","name"=>"ABETIFI","district_id"=>94),


            array("code"=>"052101","name"=>"TEASE","district_id"=>95),
            array("code"=>"052102","name"=>"EKYE AMANFROM","district_id"=>95),
            array("code"=>"052103","name"=>"FORIFORI","district_id"=>95),
            array("code"=>"052104","name"=>"MAAME KROBO","district_id"=>95),
            array("code"=>"052105","name"=>"FOSO (KWAHU FOSO)","district_id"=>95),
            array("code"=>"052106","name"=>"BRUMBEN","district_id"=>95),
            array("code"=>"052107","name"=>"AMANKWA KROM","district_id"=>95),
            array("code"=>"052108","name"=>"ADIEMBRA","district_id"=>95),
            array("code"=>"052109","name"=>"KWAEKESE","district_id"=>95),
            array("code"=>"052110","name"=>"DONKORKROM","district_id"=>95),


            array("code"=>"051401","name"=>"BOMSO","district_id"=>96),
            array("code"=>"051402","name"=>"TWEAPEASE","district_id"=>96),
            array("code"=>"051403","name"=>"ASUOM","district_id"=>96),
            array("code"=>"051404","name"=>"KWAE","district_id"=>96),
            array("code"=>"051405","name"=>"ANWEAM","district_id"=>96),
            array("code"=>"051406","name"=>"OTUMI","district_id"=>96),
            array("code"=>"051407","name"=>"ABAAM","district_id"=>96),
            array("code"=>"051408","name"=>"NKWANTANANG","district_id"=>96),
            array("code"=>"051409","name"=>"ABODOM","district_id"=>96),
            array("code"=>"051410","name"=>"PRAMKESE","district_id"=>96),
            array("code"=>"051411","name"=>"TAKYIMAN","district_id"=>96),
            array("code"=>"051412","name"=>"ADANKRONO","district_id"=>96),
            array("code"=>"051413","name"=>"KADE","district_id"=>96),


            array("code"=>"051201","name"=>"SAAMAN","district_id"=>97),
            array("code"=>"051202","name"=>"NSUTEM","district_id"=>97),
            array("code"=>"051203","name"=>"OSINO","district_id"=>97),
            array("code"=>"051204","name"=>"AKYEM HEMANG","district_id"=>97),
            array("code"=>"051205","name"=>"DWENASE","district_id"=>97),
            array("code"=>"051206","name"=>"ABOMPE","district_id"=>97),
            array("code"=>"051207","name"=>"BEGORO","district_id"=>97),
            array("code"=>"051208","name"=>"DEDESO WORAKO","district_id"=>97),
            array("code"=>"051209","name"=>"OBOSOSO","district_id"=>97),


            array("code"=>"051301","name"=>"AKIM WIRENKYIRENG AMANFROM","district_id"=>98),
            array("code"=>"051302","name"=>"ODUMASE","district_id"=>98),
            array("code"=>"051303","name"=>"POTROASE","district_id"=>98),
            array("code"=>"051304","name"=>"APEDWA","district_id"=>98),
            array("code"=>"051305","name"=>"KIBI","district_id"=>98),
            array("code"=>"051306","name"=>"AKIM APAPAM","district_id"=>98),
            array("code"=>"051307","name"=>"AKOOKO","district_id"=>98),
            array("code"=>"051308","name"=>"AKIM ASAFO","district_id"=>98),
            array("code"=>"051309","name"=>"ANYINASIN","district_id"=>98),
            array("code"=>"051310","name"=>"ADONKWANTA","district_id"=>98),
            array("code"=>"051311","name"=>"MAASE","district_id"=>98),
            array("code"=>"051312","name"=>"KUKURANTUMI","district_id"=>98),
            array("code"=>"051313","name"=>"OLD TAFO","district_id"=>98),
            array("code"=>"051314","name"=>"NEW TAFO","district_id"=>98),
            array("code"=>"051315","name"=>"OSIEM","district_id"=>98),
            array("code"=>"051316","name"=>"BUNSO","district_id"=>98),
            array("code"=>"051317","name"=>"ASIAKWA","district_id"=>98),
            array("code"=>"051318","name"=>"AKIM NKRONSO","district_id"=>98),
            array("code"=>"051319","name"=>"AKIM SAGYIMASE","district_id"=>98),
            array("code"=>"051320","name"=>"ASIKAM","district_id"=>98),


            array("code"=>"052501","name"=>"OKUMANING","district_id"=>99),
            array("code"=>"052502","name"=>"APINAMANG","district_id"=>99),
            array("code"=>"052503","name"=>"TOPREMANG","district_id"=>99),
            array("code"=>"052504","name"=>"BOADUA","district_id"=>99),
            array("code"=>"052505","name"=>"TAKROWASE","district_id"=>99),
            array("code"=>"052506","name"=>"KUSI","district_id"=>99),
            array("code"=>"052507","name"=>"WENCHI","district_id"=>99),
            array("code"=>"052508","name"=>"AKWATIA","district_id"=>99),


            array("code"=>"050101","name"=>"AKIM ACHIASE","district_id"=>100),
            array("code"=>"050102","name"=>"AKIM OSORASE","district_id"=>100),
            array("code"=>"050103","name"=>"AKIM ANYINAM","district_id"=>100),
            array("code"=>"050104","name"=>"AKIM ANAMASE","district_id"=>100),
            array("code"=>"050105","name"=>"AKIM KOKOBEN","district_id"=>100),
            array("code"=>"050106","name"=>"AKIM AWISA","district_id"=>100),
            array("code"=>"050107","name"=>"AKIM ADUASA","district_id"=>100),
            array("code"=>"050108","name"=>"AKIM APERADE","district_id"=>100),
            array("code"=>"050109","name"=>"AKIM AKENKANSU","district_id"=>100),
            array("code"=>"050110","name"=>"AKIM DUAKON","district_id"=>100),
            array("code"=>"050111","name"=>"AKYEM SWEDRU","district_id"=>100),
            array("code"=>"050112","name"=>"OLD ABIREM","district_id"=>100),
            array("code"=>"050113","name"=>"NKWATENG","district_id"=>100),
            array("code"=>"050114","name"=>"NEW ABIREM","district_id"=>100),
            array("code"=>"050115","name"=>"AFOSU","district_id"=>100),
            array("code"=>"050116","name"=>"NTRONANG","district_id"=>100),
            array("code"=>"050117","name"=>"TWEAPEASE","district_id"=>100),
            array("code"=>"050118","name"=>"NWINSO","district_id"=>100),
            array("code"=>"050119","name"=>"PANKESE","district_id"=>100),
            array("code"=>"050120","name"=>"MAMANSO","district_id"=>100),
            array("code"=>"050121","name"=>"AMUANA PRASO","district_id"=>100),
            array("code"=>"050122","name"=>"AKOASE","district_id"=>100),


            array("code"=>"050201","name"=>"AKIM ESHIEM","district_id"=>101),
            array("code"=>"050202","name"=>"AKIM AKROSO","district_id"=>101),
            array("code"=>"050203","name"=>"AKIM ASUOSO","district_id"=>101),
            array("code"=>"050204","name"=>"AKIM ASUBOA","district_id"=>101),
            array("code"=>"050205","name"=>"AKIM ASANTEMANG","district_id"=>101),
            array("code"=>"050206","name"=>"AKIM MANSO","district_id"=>101),
            array("code"=>"050207","name"=>"AKIM ATIANKAMA NKWANTA","district_id"=>101),
            array("code"=>"050208","name"=>"AKIM ASENE","district_id"=>101),
            array("code"=>"050209","name"=>"AKIM ABOABO","district_id"=>101),
            array("code"=>"050210","name"=>"AKIM ODA","district_id"=>101),
            array("code"=>"050211","name"=>"ODA NKWANTA","district_id"=>101),
            array("code"=>"050212","name"=>"GYADAM","district_id"=>101),


            array("code"=>"052401","name"=>"TEACHER MANTE","district_id"=>102),
            array("code"=>"052402","name"=>"ASUBOI","district_id"=>102),
            array("code"=>"052403","name"=>"AMANASE","district_id"=>102),
            array("code"=>"052404","name"=>"ANUM APAPAM","district_id"=>102),
            array("code"=>"052405","name"=>"DOKROKYEWA","district_id"=>102),
            array("code"=>"052406","name"=>"COALTAR","district_id"=>102),


            array("code"=>"051701","name"=>"BANSO","district_id"=>103),
            array("code"=>"051702","name"=>"AKIM AKROPONG","district_id"=>103),
            array("code"=>"051703","name"=>"TUMFA","district_id"=>103),
            array("code"=>"051704","name"=>"AWENARE","district_id"=>103),
            array("code"=>"051705","name"=>"KWABENG","district_id"=>103),
            array("code"=>"051706","name"=>"MOSEASO","district_id"=>103),
            array("code"=>"051707","name"=>"ASAMANG -TAMFOE","district_id"=>103),
            array("code"=>"051708","name"=>"ANYINAM","district_id"=>103),
            array("code"=>"051709","name"=>"ADASAWASE","district_id"=>103),
            array("code"=>"051710","name"=>"AKROFUFU","district_id"=>103),
            array("code"=>"051711","name"=>"ASAMAMA","district_id"=>103),
            array("code"=>"051712","name"=>"ABOMOSO","district_id"=>103),
            array("code"=>"051713","name"=>"SANKUBEASE","district_id"=>103),
            array("code"=>"051714","name"=>"ASUNAFO","district_id"=>103),
            array("code"=>"051715","name"=>"ENYIRESI","district_id"=>103),
            array("code"=>"051716","name"=>"AKIM SEKYERE","district_id"=>103),
            array("code"=>"051717","name"=>"ABAKOASE","district_id"=>103),
            array("code"=>"051718","name"=>"NEW JEJETI","district_id"=>103),
            array("code"=>"051719","name"=>"AWURANSUA","district_id"=>103),


            array("code"=>"051001","name"=>"SOUTH SENCHI","district_id"=>104),
            array("code"=>"051002","name"=>"NEW SENCHI","district_id"=>104),
            array("code"=>"051003","name"=>"ATIMPOKU","district_id"=>104),
            array("code"=>"051004","name"=>"AKOSOMBO","district_id"=>104),
            array("code"=>"051005","name"=>"AKWAMUFIE","district_id"=>104),
            array("code"=>"051006","name"=>"FRANKADUA","district_id"=>104),
            array("code"=>"051007","name"=>"ANUM","district_id"=>104),
            array("code"=>"051008","name"=>"BOSO","district_id"=>104),
            array("code"=>"051009","name"=>"ASIKUMA","district_id"=>104),
            array("code"=>"051010","name"=>"PUPUNI","district_id"=>104),
            array("code"=>"051011","name"=>"NEW AKRADE","district_id"=>104),
            array("code"=>"051012","name"=>"POWMU (NEW POWMU)","district_id"=>104),


            array("code"=>"051501","name"=>"KOTOKUOM","district_id"=>105),
            array("code"=>"051502","name"=>"CHIA","district_id"=>105),
            array("code"=>"051503","name"=>"ADWARFO","district_id"=>105),
            array("code"=>"051504","name"=>"AKOKOASO","district_id"=>105),
            array("code"=>"051505","name"=>"OFOASE-KESE","district_id"=>105),
            array("code"=>"051506","name"=>"ANYINASE","district_id"=>105),
            array("code"=>"051507","name"=>"ABENASE","district_id"=>105),
            array("code"=>"051508","name"=>"ADWOBUE","district_id"=>105),
            array("code"=>"051509","name"=>"AYIREBI","district_id"=>105),
            array("code"=>"051510","name"=>"OTWERESO","district_id"=>105),
            array("code"=>"051511","name"=>"ADUBIASE","district_id"=>105),
            array("code"=>"051512","name"=>"BRENASE","district_id"=>105),


            array("code"=>"052301","name"=>"KITASE","district_id"=>106),
            array("code"=>"052302","name"=>"ABURI","district_id"=>106),
            array("code"=>"052303","name"=>"POKROM (NSABAA)","district_id"=>106),
            array("code"=>"052304","name"=>"PAKRO","district_id"=>106),
            array("code"=>"052305","name"=>"OBOSOMASE","district_id"=>106),
            array("code"=>"052306","name"=>"TUTU","district_id"=>106),
            array("code"=>"052307","name"=>"MAMPONG","district_id"=>106),
            array("code"=>"052308","name"=>"AMANOKROM","district_id"=>106),
            array("code"=>"052309","name"=>"MAMFE","district_id"=>106),
            array("code"=>"052310","name"=>"LARTEH","district_id"=>106),
            array("code"=>"052311","name"=>"AKROPONG","district_id"=>106),
            array("code"=>"052312","name"=>"ABIRIIW","district_id"=>106),
            array("code"=>"052313","name"=>"DAWU","district_id"=>106),
            array("code"=>"052314","name"=>"AWUKUGUA","district_id"=>106),
            array("code"=>"052315","name"=>"ADUKROM","district_id"=>106),
            array("code"=>"052316","name"=>"APIREDE","district_id"=>106),
            array("code"=>"052317","name"=>"ADAWSO","district_id"=>106),
            array("code"=>"052318","name"=>"OKORASE","district_id"=>106),



            array("code"=>"060101","name"=>"POMPOSO","district_id"=>1),
            array("code"=>"060102","name"=>"KWABENAKWA","district_id"=>1),
            array("code"=>"060103","name"=>"ODUMAS1","district_id"=>1),
            array("code"=>"060104","name"=>"OBUASI","district_id"=>1),


            array("code"=>"061101","name"=>"ADUMASA","district_id"=>2),
            array("code"=>"061102","name"=>"NOBEWAM","district_id"=>2),
            array("code"=>"061103","name"=>"NEW KOFORIDUA","district_id"=>2),
            array("code"=>"061104","name"=>"KWASO","district_id"=>2),
            array("code"=>"061105","name"=>"DONYINA","district_id"=>2),
            array("code"=>"061106","name"=>"JUABEN","district_id"=>2),
            array("code"=>"061107","name"=>"ONWE","district_id"=>2),
            array("code"=>"061108","name"=>"EJISU","district_id"=>2),
            array("code"=>"061109","name"=>"BESEASE","district_id"=>2),
            array("code"=>"061110","name"=>"BONWIRE","district_id"=>2),
            array("code"=>"061111","name"=>"TIKROM","district_id"=>2),
            array("code"=>"061112","name"=>"AMOAM ACHIASE","district_id"=>2),
            array("code"=>"061113","name"=>"KWAMO","district_id"=>2),
            array("code"=>"061114","name"=>"FUMESUA","district_id"=>2),
            array("code"=>"061115","name"=>"ADARKO JACHIE","district_id"=>2),
            array("code"=>"061116","name"=>"ESSIENINPONG","district_id"=>2),
            array("code"=>"061117","name"=>"AKYAWKROM","district_id"=>2),
            array("code"=>"061118","name"=>"ACHIASE","district_id"=>2),
            array("code"=>"061119","name"=>"ACHINAKROM","district_id"=>2),
            array("code"=>"061120","name"=>"KRAPA","district_id"=>2),


            array("code"=>"060701","name"=>"KENSERE","district_id"=>3),
            array("code"=>"060702","name"=>"ADJAMESU","district_id"=>3),
            array("code"=>"060703","name"=>"DOMINASE","district_id"=>3),
            array("code"=>"060704","name"=>"OFOASE - KOKOBEN","district_id"=>3),
            array("code"=>"060705","name"=>"NTINANKO","district_id"=>3),
            array("code"=>"060706","name"=>"POANO","district_id"=>3),
            array("code"=>"060707","name"=>"BONI (BEHENASE)","district_id"=>3),
            array("code"=>"060708","name"=>"Missing Name","district_id"=>3),
            array("code"=>"060709","name"=>"ANWIANKWANTA","district_id"=>3),
            array("code"=>"060710","name"=>"KOKOFU","district_id"=>3),
            array("code"=>"060711","name"=>"BOGYAWE","district_id"=>3),
            array("code"=>"060712","name"=>"BEKWAI","district_id"=>3),
            array("code"=>"060713","name"=>"ESSUMEJA","district_id"=>3),
            array("code"=>"060714","name"=>"KONIYAW","district_id"=>3),


            array("code"=>"062201","name"=>"MAMPONG","district_id"=>4),
            array("code"=>"062202","name"=>"BENIN","district_id"=>4),
            array("code"=>"062203","name"=>"KOFIASE","district_id"=>4),
            array("code"=>"062204","name"=>"ATONSUAGYA","district_id"=>4),
            array("code"=>"062205","name"=>"ADIDWAN","district_id"=>4),
            array("code"=>"062206","name"=>"DAAHO","district_id"=>4),
            array("code"=>"062207","name"=>"NEW DAAMANG","district_id"=>4),
            array("code"=>"062208","name"=>"YONSO","district_id"=>4),


            array("code"=>"061801","name"=>"ABOFOUR","district_id"=>5),
            array("code"=>"061802","name"=>"NAMONG","district_id"=>5),
            array("code"=>"061803","name"=>"KOKOTE","district_id"=>5),
            array("code"=>"061804","name"=>"OLD OFFINSO","district_id"=>5),
            array("code"=>"061805","name"=>"AMOAWI","district_id"=>5),
            array("code"=>"061806","name"=>"ABOASU","district_id"=>5),
            array("code"=>"061807","name"=>"OFFINSO","district_id"=>5),


            array("code"=>"062801","name"=>"ABOABO","district_id"=>6),
            array("code"=>"062802","name"=>"ADUKROM","district_id"=>6),
            array("code"=>"062803","name"=>"APERADE","district_id"=>6),
            array("code"=>"062804","name"=>"AKOREM","district_id"=>6),
            array("code"=>"062805","name"=>"ASAWASI","district_id"=>6),
            array("code"=>"062806","name"=>"ASH TOWN","district_id"=>6),
            array("code"=>"062807","name"=>"ASOKORE MAMPONG","district_id"=>6),
            array("code"=>"062808","name"=>"DICHEMSO","district_id"=>6),
            array("code"=>"062809","name"=>"DOTE","district_id"=>6),
            array("code"=>"062810","name"=>"DUASI","district_id"=>6),
            array("code"=>"062811","name"=>"PARKOSO","district_id"=>6),
            array("code"=>"062812","name"=>"SAWABA","district_id"=>6),
            array("code"=>"062813","name"=>"SEPE WUSUANSA","district_id"=>6),
            array("code"=>"062814","name"=>"SEPE - TINPON","district_id"=>6),


            array("code"=>"061001","name"=>"KYEKYEBIASE","district_id"=>7),
            array("code"=>"061002","name"=>"PATRIENSA","district_id"=>7),
            array("code"=>"061003","name"=>"KONONGO","district_id"=>7),
            array("code"=>"061004","name"=>"ODUMASE","district_id"=>7),
            array("code"=>"061005","name"=>"DWEASE","district_id"=>7),
            array("code"=>"061006","name"=>"PRAASO","district_id"=>7),


            array("code"=>"062601","name"=>"ANYINASU","district_id"=>8),
            array("code"=>"062602","name"=>"SEKYEDUMASE","district_id"=>8),
            array("code"=>"062603","name"=>"EJURA","district_id"=>8),
            array("code"=>"062604","name"=>"DROMANKUMA","district_id"=>8),
            array("code"=>"062605","name"=>"HIAWOANWU","district_id"=>8),


            array("code"=>"061401","name"=>"BREMANG","district_id"=>9),
            array("code"=>"061402","name"=>"KRONOM","district_id"=>9),
            array("code"=>"061403","name"=>"OLD TAFO","district_id"=>9),
            array("code"=>"061404","name"=>"AMAKOM","district_id"=>9),
            array("code"=>"061405","name"=>"ASAFO","district_id"=>9),
            array("code"=>"061406","name"=>"PANKRONO","district_id"=>9),
            array("code"=>"061407","name"=>"AHINSAN","district_id"=>9),
            array("code"=>"061408","name"=>"ANLOGA","district_id"=>9),
            array("code"=>"061409","name"=>"AYIGYA","district_id"=>9),
            array("code"=>"061410","name"=>"OFORIKROM","district_id"=>9),
            array("code"=>"061411","name"=>"ASH TOWN","district_id"=>9),
            array("code"=>"061412","name"=>"BUOKROM","district_id"=>9),
            array("code"=>"061413","name"=>"NEW TAFO","district_id"=>9),
            array("code"=>"061414","name"=>"ASUOYEBOA","district_id"=>9),
            array("code"=>"061415","name"=>"KWADASO","district_id"=>9),
            array("code"=>"061416","name"=>"TANOSO","district_id"=>9),
            array("code"=>"061417","name"=>"BANTAMA","district_id"=>9),
            array("code"=>"061418","name"=>"SUAME","district_id"=>9),
            array("code"=>"061419","name"=>"TARKWA-MAAKRO","district_id"=>9),
            array("code"=>"061420","name"=>"ATONSU","district_id"=>9),


            array("code"=>"060601","name"=>"DOMPOASE","district_id"=>10),
            array("code"=>"060602","name"=>"FOMENA","district_id"=>10),
            array("code"=>"060603","name"=>"BOBRIASE","district_id"=>10),
            array("code"=>"060604","name"=>"AKROKERRI","district_id"=>10),
            array("code"=>"060605","name"=>"KWAPIA","district_id"=>10),
            array("code"=>"060606","name"=>"ABOABO NO. 2","district_id"=>10),
            array("code"=>"060607","name"=>"BROFOYEDRU","district_id"=>10),
            array("code"=>"060608","name"=>"BODWOSANGO","district_id"=>10),
            array("code"=>"060609","name"=>"PIPISO","district_id"=>10),
            array("code"=>"060610","name"=>"ASOKWA (OBUASI JUNCTION)","district_id"=>10),
            array("code"=>"060611","name"=>"NEW AKROFUOM","district_id"=>10),
            array("code"=>"060612","name"=>"ANHWIASO","district_id"=>10),
            array("code"=>"060613","name"=>"AKWANSREM","district_id"=>10),
            array("code"=>"060614","name"=>"FUMSO","district_id"=>10),
            array("code"=>"060615","name"=>"AKROFUOM","district_id"=>10),
            array("code"=>"060616","name"=>"NEW EDUBIASE","district_id"=>10),
            array("code"=>"060617","name"=>"APAGYA","district_id"=>10),
            array("code"=>"060618","name"=>"ADANSI PRASO","district_id"=>10),
            array("code"=>"060619","name"=>"ATOBIASE","district_id"=>10),


            array("code"=>"062101","name"=>"AFRANCHO","district_id"=>11),
            array("code"=>"062102","name"=>"BRONKRONG","district_id"=>11),
            array("code"=>"062103","name"=>"WIOSO","district_id"=>11),
            array("code"=>"062104","name"=>"KODIE","district_id"=>11),
            array("code"=>"062105","name"=>"ADWUMAKASE-KESE","district_id"=>11),
            array("code"=>"062106","name"=>"HEMANG","district_id"=>11),
            array("code"=>"062107","name"=>"EJURATIA","district_id"=>11),
            array("code"=>"062108","name"=>"ANKAASE","district_id"=>11),
            array("code"=>"062109","name"=>"NKUKUA BUOHO","district_id"=>11),
            array("code"=>"062110","name"=>"KYEKYEWERE","district_id"=>11),
            array("code"=>"062111","name"=>"TETREM","district_id"=>11),
            array("code"=>"062112","name"=>"AMOAKO","district_id"=>11),
            array("code"=>"062113","name"=>"KWAMANG","district_id"=>11),
            array("code"=>"062114","name"=>"AHENKRO","district_id"=>11),
            array("code"=>"062115","name"=>"NKWANTAKESE","district_id"=>11),
            array("code"=>"062116","name"=>"ADOMAKOMA BUOHO-KROBO","district_id"=>11),
            array("code"=>"062117","name"=>"ATIMATIM","district_id"=>11),
            array("code"=>"062118","name"=>"NEW KYEKYIRE","district_id"=>11),
            array("code"=>"062119","name"=>"TAABUOM","district_id"=>11),
            array("code"=>"062120","name"=>"BEPOASE","district_id"=>11),
            array("code"=>"062121","name"=>"WIAMOASE","district_id"=>11),
            array("code"=>"062122","name"=>"JAMASI","district_id"=>11),
            array("code"=>"062123","name"=>"BOANIM","district_id"=>11),
            array("code"=>"062124","name"=>"AFAMANSO","district_id"=>11),
            array("code"=>"062125","name"=>"BEDOMASE","district_id"=>11),
            array("code"=>"062126","name"=>"BIPOA","district_id"=>11),
            array("code"=>"062127","name"=>"AGONA","district_id"=>11),
            array("code"=>"062128","name"=>"KONA","district_id"=>11),
            array("code"=>"062129","name"=>"TANO - ODUMASE","district_id"=>11),
            array("code"=>"062130","name"=>"ASAMANG","district_id"=>11),
            array("code"=>"062131","name"=>"HEMAN  BUOTTO","district_id"=>11),


            array("code"=>"061701","name"=>"ABONSUASO","district_id"=>12),
            array("code"=>"061702","name"=>"SUBRISO","district_id"=>12),
            array("code"=>"061703","name"=>"ASUHYIAE","district_id"=>12),
            array("code"=>"061704","name"=>"BETIAKO","district_id"=>12),
            array("code"=>"061705","name"=>"AKWASIASE","district_id"=>12),
            array("code"=>"061706","name"=>"MABANG","district_id"=>12),
            array("code"=>"061707","name"=>"ANYINASUSO","district_id"=>12),
            array("code"=>"061708","name"=>"TEPA","district_id"=>12),
            array("code"=>"061709","name"=>"TWABIDI","district_id"=>12),
            array("code"=>"061710","name"=>"MFANTE","district_id"=>12),


            array("code"=>"061601","name"=>"ABESEWA","district_id"=>13),
            array("code"=>"061602","name"=>"HWIBAA","district_id"=>13),
            array("code"=>"061603","name"=>"WIOSO","district_id"=>13),
            array("code"=>"061604","name"=>"DOMEABRA","district_id"=>13),
            array("code"=>"061605","name"=>"MPAPASO N0.1","district_id"=>13),
            array("code"=>"061606","name"=>"MPAPASO N0.2","district_id"=>13),
            array("code"=>"061607","name"=>"MANKRANSO","district_id"=>13),
            array("code"=>"061608","name"=>"KUNSU","district_id"=>13),
            array("code"=>"061609","name"=>"BIEMSO NO.1","district_id"=>13),
            array("code"=>"061610","name"=>"ADUGYAMA","district_id"=>13),
            array("code"=>"061611","name"=>"SABRONUM","district_id"=>13),
            array("code"=>"061612","name"=>"AHWEREWAM","district_id"=>13),
            array("code"=>"061613","name"=>"NSUTA","district_id"=>13),
            array("code"=>"061614","name"=>"POKUKROM","district_id"=>13),


            array("code"=>"060301","name"=>"APITISO NO. 2","district_id"=>14),
            array("code"=>"060302","name"=>"TWEAPEASE","district_id"=>14),
            array("code"=>"060303","name"=>"FIANKUMA","district_id"=>14),
            array("code"=>"060304","name"=>"JACOBU","district_id"=>14),
            array("code"=>"060305","name"=>"HIA","district_id"=>14),


            array("code"=>"060201","name"=>"DATANO","district_id"=>15),
            array("code"=>"060202","name"=>"PAKYI NO. 2","district_id"=>15),
            array("code"=>"060203","name"=>"PAKYI NO. 1","district_id"=>15),
            array("code"=>"060204","name"=>"MOSEASO","district_id"=>15),
            array("code"=>"060205","name"=>"ODAHO","district_id"=>15),
            array("code"=>"060206","name"=>"MANSO ATWEDE/OBINCHEM","district_id"=>15),
            array("code"=>"060207","name"=>"MANSO EDUBIA","district_id"=>15),
            array("code"=>"060208","name"=>"MPATUOM (MPATOAM)","district_id"=>15),
            array("code"=>"060209","name"=>"DOME KENIAGO","district_id"=>15),
            array("code"=>"060210","name"=>"ESSUOWIN","district_id"=>15),
            array("code"=>"060211","name"=>"MANSO NKWANTA","district_id"=>15),
            array("code"=>"060212","name"=>"MANSO ABORE","district_id"=>15),
            array("code"=>"060213","name"=>"ESAASE","district_id"=>15),
            array("code"=>"060214","name"=>"MANSO TAKORASE","district_id"=>15),
            array("code"=>"060215","name"=>"TONTOKROM","district_id"=>15),


            array("code"=>"062901","name"=>"DOMEABRA","district_id"=>16),
            array("code"=>"062902","name"=>"JUANSA","district_id"=>16),
            array("code"=>"062903","name"=>"AGOGO","district_id"=>16),
            array("code"=>"062904","name"=>"HWIDIEM","district_id"=>16),
            array("code"=>"062905","name"=>"AKUTUASE","district_id"=>16),
            array("code"=>"062906","name"=>"WIOSO","district_id"=>16),
            array("code"=>"062907","name"=>"BANKA","district_id"=>16),
            array("code"=>"062908","name"=>"DWENDWENASE","district_id"=>16),
            array("code"=>"062909","name"=>"BANSO","district_id"=>16),
            array("code"=>"062910","name"=>"KUMESO","district_id"=>16),
            array("code"=>"062911","name"=>"OFOASE","district_id"=>16),
            array("code"=>"062912","name"=>"OBOGU","district_id"=>16),
            array("code"=>"062913","name"=>"DAMPONG","district_id"=>16),
            array("code"=>"062914","name"=>"JUASO","district_id"=>16),
            array("code"=>"062915","name"=>"KROFA","district_id"=>16),
            array("code"=>"062916","name"=>"ATWEDIE","district_id"=>16),
            array("code"=>"062917","name"=>"BOMPATA","district_id"=>16),
            array("code"=>"062918","name"=>"ADOMFE","district_id"=>16),
            array("code"=>"062919","name"=>"ASANKARE","district_id"=>16),
            array("code"=>"062920","name"=>"BREKU","district_id"=>16),
            array("code"=>"062921","name"=>"PRA RIVER","district_id"=>16),


            array("code"=>"061301","name"=>"NWINISO NO. 1","district_id"=>17),
            array("code"=>"061302","name"=>"TRABUOM","district_id"=>17),
            array("code"=>"061303","name"=>"TWEDIE","district_id"=>17),
            array("code"=>"061304","name"=>"KROMUASE","district_id"=>17),
            array("code"=>"061305","name"=>"ABURASO","district_id"=>17),
            array("code"=>"061306","name"=>"TREDE","district_id"=>17),
            array("code"=>"061307","name"=>"AHENEMA-KOKOBEN","district_id"=>17),
            array("code"=>"061308","name"=>"AMPABAME NO. 1","district_id"=>17),
            array("code"=>"061309","name"=>"KROFOFROM","district_id"=>17),
            array("code"=>"061310","name"=>"AMPEYOO","district_id"=>17),
            array("code"=>"061311","name"=>"BROFOYEDU","district_id"=>17),
            array("code"=>"061312","name"=>"FOASE","district_id"=>17),
            array("code"=>"061313","name"=>"HEMANG","district_id"=>17),
            array("code"=>"061314","name"=>"KOTWI-TWINDURASI","district_id"=>17),


            array("code"=>"060101","name"=>"MPASATIA","district_id"=>18),
            array("code"=>"060102","name"=>"NYINAHIN","district_id"=>18),
            array("code"=>"060103","name"=>"OTAAKROM","district_id"=>18),
            array("code"=>"060104","name"=>"AHYIRESU","district_id"=>18),
            array("code"=>"060105","name"=>"TANO- ODUMASE","district_id"=>18),


            array("code"=>"061501","name"=>"BAREKESE","district_id"=>19),
            array("code"=>"061502","name"=>"FUFUO","district_id"=>19),
            array("code"=>"061503","name"=>"ASAMAN","district_id"=>19),
            array("code"=>"061504","name"=>"MFENSI","district_id"=>19),
            array("code"=>"061505","name"=>"AKROPONG","district_id"=>19),
            array("code"=>"061506","name"=>"HIAWU BESEASE","district_id"=>19),
            array("code"=>"061507","name"=>"NEREBEHI","district_id"=>19),
            array("code"=>"061508","name"=>"SEPAASE","district_id"=>19),
            array("code"=>"061509","name"=>"MAAKRO","district_id"=>19),
            array("code"=>"061510","name"=>"MIM","district_id"=>19),
            array("code"=>"061511","name"=>"NKAWIE KUMA","district_id"=>19),
            array("code"=>"061512","name"=>"MANHYIA","district_id"=>19),
            array("code"=>"061513","name"=>"ASENEMASO","district_id"=>19),
            array("code"=>"061514","name"=>"BOKANKYE","district_id"=>19),
            array("code"=>"061515","name"=>"AGOGO","district_id"=>19),
            array("code"=>"061516","name"=>"ASUOFUA","district_id"=>19),
            array("code"=>"061517","name"=>"ATWIMA KOFORIDUA","district_id"=>19),
            array("code"=>"061518","name"=>"ESAASE","district_id"=>19),
            array("code"=>"061519","name"=>"TOASE","district_id"=>19),
            array("code"=>"061520","name"=>"ABUAKWA","district_id"=>19),


            array("code"=>"060801","name"=>"TEBESO NO.2","district_id"=>20),
            array("code"=>"060802","name"=>"ANYANSO","district_id"=>20),
            array("code"=>"060803","name"=>"ADUMASA","district_id"=>20),
            array("code"=>"060804","name"=>"ASIWA","district_id"=>20),
            array("code"=>"060805","name"=>"ESAASE","district_id"=>20),
            array("code"=>"060806","name"=>"DOMPA","district_id"=>20),


            array("code"=>"061201","name"=>"SAWUA","district_id"=>21),
            array("code"=>"061202","name"=>"JACHIE","district_id"=>21),
            array("code"=>"061203","name"=>"PRAMSO","district_id"=>21),
            array("code"=>"061204","name"=>"KUNTANASE","district_id"=>21),
            array("code"=>"061205","name"=>"APUTUOGYA","district_id"=>21),
            array("code"=>"061206","name"=>"ESSERESO","district_id"=>21),
            array("code"=>"061207","name"=>"ADAGYA","district_id"=>21),
            array("code"=>"061208","name"=>"ESASO","district_id"=>21),
            array("code"=>"061209","name"=>"NEW BRODEKWANO","district_id"=>21),


            array("code"=>"062001","name"=>"AHWIAA","district_id"=>22),
            array("code"=>"062002","name"=>"MEDUMA","district_id"=>22),
            array("code"=>"062003","name"=>"FAWOADE","district_id"=>22),
            array("code"=>"062004","name"=>"BEMPENASE","district_id"=>22),
            array("code"=>"062005","name"=>"KENYASE","district_id"=>22),
            array("code"=>"062006","name"=>"ADWUMAKASE-WADIE","district_id"=>22),
            array("code"=>"062007","name"=>"DUMANAFO","district_id"=>22),
            array("code"=>"062008","name"=>"MAMPONTENG","district_id"=>22),
            array("code"=>"062009","name"=>"ABOASO","district_id"=>22),
            array("code"=>"062010","name"=>"ANTOA","district_id"=>22),
            array("code"=>"062011","name"=>"ABIRA","district_id"=>22),
            array("code"=>"062012","name"=>"NTONSO","district_id"=>22),
            array("code"=>"062013","name"=>"NEW ASONOMASO","district_id"=>22),
            array("code"=>"062014","name"=>"ADANWOMASE","district_id"=>22),
            array("code"=>"062015","name"=>"BROFOYEDRU","district_id"=>22),
            array("code"=>"062016","name"=>"ABIREM","district_id"=>22),
            array("code"=>"062017","name"=>"ADWUMAM","district_id"=>22),
            array("code"=>"062018","name"=>"ASENUA","district_id"=>22),


            array("code"=>"062701","name"=>"AKOMADAN","district_id"=>23),
            array("code"=>"062702","name"=>"AFRANCHO","district_id"=>23),
            array("code"=>"062703","name"=>"NKENKAASU","district_id"=>23),
            array("code"=>"062704","name"=>"ASUOSO","district_id"=>23),
            array("code"=>"062705","name"=>"NKWAANKWAA NO. 2","district_id"=>23),


            array("code"=>"062401","name"=>"BANKO","district_id"=>24),
            array("code"=>"062402","name"=>"SEKYERE","district_id"=>24),
            array("code"=>"062403","name"=>"DADEASE","district_id"=>24),
            array("code"=>"062404","name"=>"KUMAWU","district_id"=>24),
            array("code"=>"062405","name"=>"BESORO","district_id"=>24),
            array("code"=>"062406","name"=>"WORASO","district_id"=>24),
            array("code"=>"062407","name"=>"BODOMASE","district_id"=>24),
            array("code"=>"062408","name"=>"ABOTANSO","district_id"=>24),


            array("code"=>"063001","name"=>"DROBONSO","district_id"=>25),


            array("code"=>"062501","name"=>"ATONSU","district_id"=>26),
            array("code"=>"062502","name"=>"BEPOSO","district_id"=>26),
            array("code"=>"062503","name"=>"KWAMANG","district_id"=>26),
            array("code"=>"062504","name"=>"NSUTA","district_id"=>26),
            array("code"=>"062505","name"=>"JEDUAKO","district_id"=>26),
            array("code"=>"062506","name"=>"BIREM","district_id"=>26),


            array("code"=>"062301","name"=>"OYOKO","district_id"=>27),
            array("code"=>"062302","name"=>"ASOKORE","district_id"=>27),
            array("code"=>"062303","name"=>"NKWANKWANUA","district_id"=>27),
            array("code"=>"062304","name"=>"SENIAGYA","district_id"=>27),
            array("code"=>"062305","name"=>"SENKYE","district_id"=>27),
            array("code"=>"062306","name"=>"NTUMKUMSO","district_id"=>27),
            array("code"=>"062307","name"=>"OKAEKUROM","district_id"=>27),
            array("code"=>"062308","name"=>"EFFIDUASE","district_id"=>27),



            array("code"=>"072201","name"=>"BABATOKUMA","district_id"=>41),
            array("code"=>"072202","name"=>"DAWADAWA  NO. 2","district_id"=>41),
            array("code"=>"072203","name"=>"KADELSO","district_id"=>41),
            array("code"=>"072204","name"=>"PORTOR","district_id"=>41),
            array("code"=>"072205","name"=>"GULUMPE","district_id"=>41),
            array("code"=>"072206","name"=>"KAWOMPE","district_id"=>41),
            array("code"=>"072207","name"=>"KINTAMPO","district_id"=>41),


            array("code"=>"070201","name"=>"KASAPIN","district_id"=>42),
            array("code"=>"070202","name"=>"MIM","district_id"=>42),
            array("code"=>"070203","name"=>"GOASO","district_id"=>42),
            array("code"=>"070204","name"=>"AYUMSO","district_id"=>42),
            array("code"=>"070205","name"=>"AKRODIE","district_id"=>42),
            array("code"=>"070206","name"=>"FAWOHOYEDEN","district_id"=>42),


            array("code"=>"071001","name"=>"BIADAN","district_id"=>43),
            array("code"=>"071002","name"=>"SENASE","district_id"=>43),
            array("code"=>"071003","name"=>"KATO","district_id"=>43),
            array("code"=>"071004","name"=>"BEREKUM","district_id"=>43),
            array("code"=>"071005","name"=>"JAMDEDE","district_id"=>43),
            array("code"=>"071006","name"=>"ADOM","district_id"=>43),
            array("code"=>"071007","name"=>"MPATASIE","district_id"=>43),
            array("code"=>"071008","name"=>"KUTRE NO. 1","district_id"=>43),
            array("code"=>"071009","name"=>"KORASO","district_id"=>43),
            array("code"=>"071010","name"=>"JINIJINI","district_id"=>43),
            array("code"=>"071011","name"=>"FETENTAA","district_id"=>43),


            array("code"=>"071401","name"=>"NCHIRAA","district_id"=>44),
            array("code"=>"071402","name"=>"SUBINSO NO. 2","district_id"=>44),
            array("code"=>"071403","name"=>"AMPONSA KROM","district_id"=>44),
            array("code"=>"071404","name"=>"AKROBI","district_id"=>44),
            array("code"=>"071405","name"=>"WENCHI","district_id"=>44),
            array("code"=>"071406","name"=>"DROBOSO","district_id"=>44),
            array("code"=>"071407","name"=>"NKONSIA","district_id"=>44),
            array("code"=>"071408","name"=>"TROMESO","district_id"=>44),
            array("code"=>"071409","name"=>"AWISA","district_id"=>44),


            array("code"=>"070801","name"=>"ABESIM","district_id"=>45),
            array("code"=>"070802","name"=>"NEW DORMAA","district_id"=>45),
            array("code"=>"070803","name"=>"SUNYANI","district_id"=>45),
            array("code"=>"070804","name"=>"ATRONIE","district_id"=>45),


            array("code"=>"070401","name"=>"ASUNSU NO. 1","district_id"=>46),
            array("code"=>"070402","name"=>"DOMAA AHENKRO","district_id"=>46),
            array("code"=>"070403","name"=>"ANTWIRIFO","district_id"=>46),
            array("code"=>"070404","name"=>"KOFI BADU KROM","district_id"=>46),
            array("code"=>"070405","name"=>"AMMASU","district_id"=>46),
            array("code"=>"070406","name"=>"ABOABO NO. 4","district_id"=>46),
            array("code"=>"070407","name"=>"ABOABO NO. 2","district_id"=>46),
            array("code"=>"070408","name"=>"NSUHIA","district_id"=>46),
            array("code"=>"070409","name"=>"KORASO","district_id"=>46),
            array("code"=>"070410","name"=>"TRONAN","district_id"=>46),


            array("code"=>"071601","name"=>"DONKRO NKWANTA","district_id"=>47),
            array("code"=>"071602","name"=>"AHYIAEM","district_id"=>47),
            array("code"=>"071603","name"=>"BONSU","district_id"=>47),
            array("code"=>"071604","name"=>"DOTOBAA","district_id"=>47),
            array("code"=>"071605","name"=>"AKUMA","district_id"=>47),
            array("code"=>"071606","name"=>"NKWABENG","district_id"=>47),
            array("code"=>"071607","name"=>"AYEREDE","district_id"=>47),
            array("code"=>"071608","name"=>"AKUMSA DUMASE","district_id"=>47),
            array("code"=>"071609","name"=>"NKORANZA","district_id"=>47),


            array("code"=>"071501","name"=>"OFORIKROM","district_id"=>48),
            array("code"=>"071502","name"=>"FIASO","district_id"=>48),
            array("code"=>"071503","name"=>"NSUTA","district_id"=>48),
            array("code"=>"071504","name"=>"KENTEN","district_id"=>48),
            array("code"=>"071505","name"=>"TAKOFIANO","district_id"=>48),
            array("code"=>"071506","name"=>"NKWAESO","district_id"=>48),
            array("code"=>"071507","name"=>"TECHIMAN","district_id"=>48),
            array("code"=>"071508","name"=>"HANSUA","district_id"=>48),
            array("code"=>"071509","name"=>"TWIMIA-NKWANTA","district_id"=>48),
            array("code"=>"071510","name"=>"TANOSO","district_id"=>48),


            array("code"=>"072501","name"=>"TUOBODOM","district_id"=>49),
            array("code"=>"072502","name"=>"KROBO","district_id"=>49),
            array("code"=>"072503","name"=>"AWOROWA","district_id"=>49),
            array("code"=>"072504","name"=>"ASUEYI","district_id"=>49),
            array("code"=>"072505","name"=>"OFUMAN","district_id"=>49),
            array("code"=>"072506","name"=>"BUOYEM","district_id"=>49),


            array("code"=>"070601","name"=>"ANKAASE","district_id"=>50),
            array("code"=>"070602","name"=>"BREME","district_id"=>50),
            array("code"=>"070603","name"=>"BECHEM","district_id"=>50),
            array("code"=>"070604","name"=>"TECHIMANTIA","district_id"=>50),
            array("code"=>"070605","name"=>"DERMA","district_id"=>50),
            array("code"=>"070606","name"=>"DWOMMO","district_id"=>50),
            array("code"=>"070607","name"=>"NEW BROSANKRO","district_id"=>50),


            array("code"=>"070701","name"=>"DUAYAW NKWANTA","district_id"=>51),
            array("code"=>"070702","name"=>"TANOSO","district_id"=>51),
            array("code"=>"070703","name"=>"SUSUANSO","district_id"=>51),
            array("code"=>"070704","name"=>"YAMFO","district_id"=>51),
            array("code"=>"070705","name"=>"BOMAA","district_id"=>51),
            array("code"=>"070706","name"=>"TERCHIRE","district_id"=>51),
            array("code"=>"070707","name"=>"ADROBAA","district_id"=>51),


            array("code"=>"071301","name"=>"MENJI","district_id"=>52),
            array("code"=>"071302","name"=>"NSAWKAW","district_id"=>52),
            array("code"=>"071303","name"=>"TAIN DISTRICT ASSEMBLYSO","district_id"=>52),
            array("code"=>"071304","name"=>"BRODI","district_id"=>52),
            array("code"=>"071305","name"=>"DEBIBI","district_id"=>52),
            array("code"=>"071306","name"=>"BROHANI","district_id"=>52),
            array("code"=>"071307","name"=>"SEIKWA","district_id"=>52),
            array("code"=>"071308","name"=>"ATOMFUOSO","district_id"=>52),
            array("code"=>"071309","name"=>"BADU","district_id"=>52),
            array("code"=>"071310","name"=>"ASUAFU","district_id"=>52),


            array("code"=>"070901","name"=>"CHIRAA","district_id"=>53),
            array("code"=>"070902","name"=>"ODUMASE","district_id"=>53),
            array("code"=>"070903","name"=>"KWATIRE","district_id"=>53),
            array("code"=>"070904","name"=>"TAIN DISTRICT ASSEMBLYSO","district_id"=>53),
            array("code"=>"070905","name"=>"FIAPRE","district_id"=>53),
            array("code"=>"070906","name"=>"DUMASUA","district_id"=>53),
            array("code"=>"070907","name"=>"NSUATRE","district_id"=>53),


            array("code"=>"071901","name"=>"LEMU NTRUBUSO","district_id"=>54),
            array("code"=>"071902","name"=>"OKYEAME KROM","district_id"=>54),
            array("code"=>"071903","name"=>"BANTAMA","district_id"=>54),
            array("code"=>"071904","name"=>"KWAME DANSO","district_id"=>54),
            array("code"=>"071905","name"=>"KIRENKUASE","district_id"=>54),


            array("code"=>"072701","name"=>"DEIFOUR BATTOR","district_id"=>55),
            array("code"=>"072702","name"=>"BODINKA","district_id"=>55),
            array("code"=>"072703","name"=>"NYANKONTREH","district_id"=>55),
            array("code"=>"072704","name"=>"KAJAJI","district_id"=>55),
            array("code"=>"072705","name"=>"PREMUASE","district_id"=>55),


            array("code"=>"072001","name"=>"KOJO BOFFOUR","district_id"=>56),
            array("code"=>"072002","name"=>"YEJI","district_id"=>56),
            array("code"=>"072003","name"=>"KONKOMMA","district_id"=>56),
            array("code"=>"072004","name"=>"PARAMBO","district_id"=>56),
            array("code"=>"072005","name"=>"DAMAN NKWANTA","district_id"=>56),
            array("code"=>"072006","name"=>"BUIPE","district_id"=>56),
            array("code"=>"072007","name"=>"ABEASE NEW TOWN","district_id"=>56),
            array("code"=>"072008","name"=>"ZABRAMA","district_id"=>56),
            array("code"=>"072009","name"=>"PRANG","district_id"=>56),
            array("code"=>"072010","name"=>"SAWABA","district_id"=>56),
            array("code"=>"072011","name"=>"BEPOSO","district_id"=>56),
            array("code"=>"072012","name"=>"KOMFOURKROM","district_id"=>56),


            array("code"=>"071701","name"=>"MANSO","district_id"=>57),
            array("code"=>"071702","name"=>"KRANKA","district_id"=>57),
            array("code"=>"071703","name"=>"YEFRI","district_id"=>57),
            array("code"=>"071704","name"=>"BUSUNYA","district_id"=>57),
            array("code"=>"071705","name"=>"FIEMA","district_id"=>57),
            array("code"=>"071706","name"=>"BONTE","district_id"=>57),
            array("code"=>"071707","name"=>"BOMINI","district_id"=>57),
            array("code"=>"071708","name"=>"DROMANKESE","district_id"=>57),


            array("code"=>"072101","name"=>"AMOMA","district_id"=>58),
            array("code"=>"072102","name"=>"NEW PENINAMISA / EDEWSO","district_id"=>58),
            array("code"=>"072103","name"=>"ANYIMA","district_id"=>58),
            array("code"=>"072104","name"=>"JEMA","district_id"=>58),
            array("code"=>"072105","name"=>"AMPOMA","district_id"=>58),
            array("code"=>"072106","name"=>"NANTE","district_id"=>58),
            array("code"=>"072107","name"=>"APESIKA","district_id"=>58),
            array("code"=>"072108","name"=>"KRABONSO","district_id"=>58),


            array("code"=>"071101","name"=>"ATUNA","district_id"=>59),
            array("code"=>"071102","name"=>"BABIANIHA","district_id"=>59),
            array("code"=>"071103","name"=>"KATAKYIEKROM","district_id"=>59),
            array("code"=>"071104","name"=>"KWASIBUO KROM","district_id"=>59),
            array("code"=>"071105","name"=>"JAPEKROM","district_id"=>59),
            array("code"=>"071106","name"=>"DROBO","district_id"=>59),
            array("code"=>"071107","name"=>"GUNASUA","district_id"=>59),
            array("code"=>"071108","name"=>"KWAMESEI KROM","district_id"=>59),
            array("code"=>"071109","name"=>"ZEZERA","district_id"=>59),
            array("code"=>"071110","name"=>"ADAMSU","district_id"=>59),
            array("code"=>"071111","name"=>"DWENEM","district_id"=>59),
            array("code"=>"071112","name"=>"FAAMAN","district_id"=>59),
            array("code"=>"071113","name"=>"MIREMANO","district_id"=>59),


            array("code"=>"071201","name"=>"ASUOKOR-AKOATA","district_id"=>60),
            array("code"=>"071202","name"=>"GOKA","district_id"=>60),
            array("code"=>"071203","name"=>"BUNI","district_id"=>60),
            array("code"=>"071204","name"=>"KOKOA","district_id"=>60),
            array("code"=>"071205","name"=>"ASIRI","district_id"=>60),
            array("code"=>"071206","name"=>"MAYERA","district_id"=>60),
            array("code"=>"071207","name"=>"SUMA AHENKRO","district_id"=>60),
            array("code"=>"071208","name"=>"DUADASO NO.1","district_id"=>60),
            array("code"=>"071209","name"=>"DUADASO NO.2","district_id"=>60),
            array("code"=>"071210","name"=>"SAMPA","district_id"=>60),
            array("code"=>"071211","name"=>"KABILE","district_id"=>60),
            array("code"=>"071212","name"=>"JAMERA","district_id"=>60),
            array("code"=>"071213","name"=>"ADADIEM","district_id"=>60),
            array("code"=>"071214","name"=>"JANKUFA","district_id"=>60),


            array("code"=>"072401","name"=>"YAAKROM","district_id"=>61),
            array("code"=>"072402","name"=>"DIABAA","district_id"=>61),
            array("code"=>"072403","name"=>"KRAKROM","district_id"=>61),
            array("code"=>"072404","name"=>"NKRANNKWANTA","district_id"=>61),
            array("code"=>"072405","name"=>"KYEREMASU","district_id"=>61),
            array("code"=>"072406","name"=>"WAMFIE","district_id"=>61),
            array("code"=>"072407","name"=>"ASUOTIANO","district_id"=>61),
            array("code"=>"072408","name"=>"DORMAA AKWAMU","district_id"=>61),
            array("code"=>"072409","name"=>"WAMANAFO","district_id"=>61),


            array("code"=>"072601","name"=>"SABIYE","district_id"=>62),
            array("code"=>"072602","name"=>"BUNGASI","district_id"=>62),
            array("code"=>"072603","name"=>"BANDA DISTRICT ASSEMBLY AHENKRO","district_id"=>62),


            array("code"=>"071801","name"=>"KUMFIA","district_id"=>63),
            array("code"=>"071802","name"=>"FAKWASI","district_id"=>63),
            array("code"=>"071803","name"=>"AMANTIN","district_id"=>63),
            array("code"=>"071804","name"=>"JATO ZONGO","district_id"=>63),
            array("code"=>"071805","name"=>"BEPOSO NO. 1 &  2","district_id"=>63),
            array("code"=>"071806","name"=>"GARADIMA","district_id"=>63),
            array("code"=>"071807","name"=>"ATEBUBU","district_id"=>63),


            array("code"=>"072301","name"=>"NKRANKROM","district_id"=>64),
            array("code"=>"072302","name"=>"NKASEIM","district_id"=>64),
            array("code"=>"072303","name"=>"OHIATUA","district_id"=>64),
            array("code"=>"072304","name"=>"DADIESOABA","district_id"=>64),
            array("code"=>"072305","name"=>"HWIDIEM","district_id"=>64),
            array("code"=>"072306","name"=>"ACHERENSUA","district_id"=>64),
            array("code"=>"072307","name"=>"KENYASI 2","district_id"=>64),
            array("code"=>"072308","name"=>"NTOTROSO","district_id"=>64),
            array("code"=>"072309","name"=>"GYEDU","district_id"=>64),
            array("code"=>"072310","name"=>"KENYASI 1","district_id"=>64),


            array("code"=>"070101","name"=>"KWAPONG","district_id"=>65),
            array("code"=>"070102","name"=>"NOBERKAW","district_id"=>65),
            array("code"=>"070103","name"=>"KUKUOM","district_id"=>65),
            array("code"=>"070104","name"=>"DANTANO","district_id"=>65),
            array("code"=>"070105","name"=>"SANKORE","district_id"=>65),
            array("code"=>"070106","name"=>"ABUOM","district_id"=>65),




            array("code"=>"080901","name"=>"GBANDI","district_id"=>153),
            array("code"=>"080902","name"=>"ZABZUGU","district_id"=>153),
            array("code"=>"080903","name"=>"NAKPALI","district_id"=>153),


            array("code"=>"081001","name"=>"NAKPACHEI","district_id"=>154),
            array("code"=>"081002","name"=>"ADIBO","district_id"=>154),
            array("code"=>"081003","name"=>"GBUNGBALGA","district_id"=>154),
            array("code"=>"081004","name"=>"YENDI","district_id"=>154),
            array("code"=>"081005","name"=>"KUGA (KPATUYA)","district_id"=>154),
            array("code"=>"081006","name"=>"NASIA","district_id"=>154),


            array("code"=>"082001","name"=>"WALEWALE","district_id"=>155),
            array("code"=>"082002","name"=>"TAMPULINGU","district_id"=>155),
            array("code"=>"082003","name"=>"ZANGU-VUGA","district_id"=>155),
            array("code"=>"082004","name"=>"ZANGUM","district_id"=>155),
            array("code"=>"082005","name"=>"GBIMSI","district_id"=>155),
            array("code"=>"082006","name"=>"TINGURI","district_id"=>155),
            array("code"=>"082007","name"=>"KPARIGU","district_id"=>155),
            array("code"=>"082008","name"=>"GUABULIGA","district_id"=>155),
            array("code"=>"082009","name"=>"WULUGU","district_id"=>155),
            array("code"=>"082010","name"=>"JANGA","district_id"=>155),
            array("code"=>"082011","name"=>"YAMA","district_id"=>155),
            array("code"=>"082012","name"=>"KPASENKPE","district_id"=>155),
            array("code"=>"082013","name"=>"DUU","district_id"=>155),
            array("code"=>"082014","name"=>"WUNGU","district_id"=>155),


            array("code"=>"080301","name"=>"BUSUNU","district_id"=>156),
            array("code"=>"080302","name"=>"DAMONGO","district_id"=>156),
            array("code"=>"080303","name"=>"LARABANGA","district_id"=>156),


            array("code"=>"081201","name"=>"KASULIYILI","district_id"=>157),
            array("code"=>"081202","name"=>"WANTUGU","district_id"=>157),
            array("code"=>"081203","name"=>"KPENDUA","district_id"=>157),
            array("code"=>"081204","name"=>"GUNDAA","district_id"=>157),
            array("code"=>"081205","name"=>"LUNGBUNGA","district_id"=>157),
            array("code"=>"081206","name"=>"TUNAYILI","district_id"=>157),
            array("code"=>"081207","name"=>"NYANKPALA","district_id"=>157),
            array("code"=>"081208","name"=>"TOLON","district_id"=>157),


            array("code"=>"082501","name"=>"NAHUYILI","district_id"=>158),
            array("code"=>"082502","name"=>"KUYILI","district_id"=>158),
            array("code"=>"082503","name"=>"TATALE","district_id"=>158),


            array("code"=>"080201","name"=>"TUNA","district_id"=>159),
            array("code"=>"080202","name"=>"KALBA","district_id"=>159),
            array("code"=>"080203","name"=>"SAWLA","district_id"=>159),


            array("code"=>"081301","name"=>"ZION","district_id"=>160),
            array("code"=>"081302","name"=>"NANTON","district_id"=>160),
            array("code"=>"081303","name"=>"TAMPION","district_id"=>160),
            array("code"=>"081304","name"=>"ZOGGU","district_id"=>160),
            array("code"=>"081305","name"=>"SAVELUGU","district_id"=>160),
            array("code"=>"081306","name"=>"PONG TAMALE","district_id"=>160),
            array("code"=>"081307","name"=>"DIARE","district_id"=>160),
            array("code"=>"081308","name"=>"NANTON-KURUGU","district_id"=>160),


            array("code"=>"081101","name"=>"MALESHEGU","district_id"=>161),
            array("code"=>"081102","name"=>"KUKUO","district_id"=>161),
            array("code"=>"081103","name"=>"ZAGYULI","district_id"=>161),
            array("code"=>"081104","name"=>"GURUGU","district_id"=>161),
            array("code"=>"081105","name"=>"SANERIGU","district_id"=>161),
            array("code"=>"081106","name"=>"KALPOHINI","district_id"=>161),
            array("code"=>"081107","name"=>"KPALSI","district_id"=>161),
            array("code"=>"081108","name"=>"CHOGGO-MANAYILI","district_id"=>161),
            array("code"=>"081109","name"=>"KANVILLI","district_id"=>161),
            array("code"=>"081110","name"=>"JISONAYILI","district_id"=>161),
            array("code"=>"081111","name"=>"GUMANI","district_id"=>161),
            array("code"=>"081112","name"=>"NYOHINI","district_id"=>161),
            array("code"=>"081113","name"=>"SAKASAKA","district_id"=>161),
            array("code"=>"081114","name"=>"SHISHEGU","district_id"=>161),
            array("code"=>"081115","name"=>"TUNAYILI","district_id"=>161),


            array("code"=>"081601","name"=>"SABOBA","district_id"=>162),
            array("code"=>"081602","name"=>"SAMBULI","district_id"=>162),


            array("code"=>"082101","name"=>"LUKULA","district_id"=>163),
            array("code"=>"082102","name"=>"MANKARIGU","district_id"=>163),
            array("code"=>"082103","name"=>"SINGA","district_id"=>163),
            array("code"=>"082104","name"=>"LINGBINSI","district_id"=>163),
            array("code"=>"082105","name"=>"DABOYA","district_id"=>163),
            array("code"=>"082106","name"=>"YAGBUM","district_id"=>163),


            array("code"=>"080701","name"=>"NAKPAYILI","district_id"=>164),
            array("code"=>"080702","name"=>"LUNGNI","district_id"=>164),
            array("code"=>"080703","name"=>"KANJO","district_id"=>164),
            array("code"=>"080704","name"=>"WULENSI","district_id"=>164),


            array("code"=>"080801","name"=>"NAKPA-GBEINI","district_id"=>165),
            array("code"=>"080802","name"=>"LEPUSI","district_id"=>165),
            array("code"=>"080803","name"=>"BINCHERATANGA","district_id"=>165),
            array("code"=>"080804","name"=>"MAKAYILI","district_id"=>165),
            array("code"=>"080805","name"=>"BIMBILLA","district_id"=>165),
            array("code"=>"080806","name"=>"SABONJIDA","district_id"=>165),
            array("code"=>"080807","name"=>"CHAMBA","district_id"=>165),
            array("code"=>"080808","name"=>"KIMOATEEK","district_id"=>165),
            array("code"=>"080809","name"=>"BAKPABA","district_id"=>165),


            array("code"=>"082401","name"=>"SANG","district_id"=>166),
            array("code"=>"082402","name"=>"KPABIA","district_id"=>166),
            array("code"=>"082403","name"=>"BOFOYILI","district_id"=>166),
            array("code"=>"082404","name"=>"SAMBU","district_id"=>166),
            array("code"=>"082405","name"=>"ZAKPALSI","district_id"=>166),


            array("code"=>"082601","name"=>"LOAGRI NO. 1","district_id"=>167),
            array("code"=>"082602","name"=>"YIZESI","district_id"=>167),
            array("code"=>"082603","name"=>"YAGABA","district_id"=>167),
            array("code"=>"082604","name"=>"TANTALA","district_id"=>167),
            array("code"=>"082605","name"=>"KUBORE","district_id"=>167),


            array("code"=>"082201","name"=>"KUMBUNGU","district_id"=>168),


            array("code"=>"080601","name"=>"KITARE","district_id"=>169),
            array("code"=>"080602","name"=>"BLAJAI","district_id"=>169),
            array("code"=>"080603","name"=>"KANBONWULE","district_id"=>169),
            array("code"=>"080604","name"=>"KANBONWULE  BEPOSO","district_id"=>169),
            array("code"=>"080605","name"=>"BUYA","district_id"=>169),
            array("code"=>"080606","name"=>"KPANDAI","district_id"=>169),
            array("code"=>"080607","name"=>"GULUBI QUARTERS","district_id"=>169),
            array("code"=>"080608","name"=>"KATIEJELI","district_id"=>169),
            array("code"=>"080609","name"=>"LOLOTO","district_id"=>169),
            array("code"=>"080610","name"=>"SABONGIDA","district_id"=>169),


            array("code"=>"081401","name"=>"KARAGA","district_id"=>170),
            array("code"=>"081402","name"=>"NYONG NAYILI","district_id"=>170),
            array("code"=>"081403","name"=>"BAGURUGU","district_id"=>170),
            array("code"=>"081404","name"=>"PISHIGU","district_id"=>170),
            array("code"=>"081405","name"=>"TAMALIGU","district_id"=>170),


            array("code"=>"081501","name"=>"GUSHIEGU","district_id"=>171),
            array("code"=>"081502","name"=>"KPATINGA","district_id"=>171),
            array("code"=>"081503","name"=>"ZINIDO","district_id"=>171),


            array("code"=>"081901","name"=>"GBINTIRI","district_id"=>172),
            array("code"=>"081902","name"=>"NAGBOO","district_id"=>172),
            array("code"=>"081903","name"=>"JAWANI","district_id"=>172),
            array("code"=>"081904","name"=>"DAGBIRIBOARI","district_id"=>172),
            array("code"=>"081905","name"=>"WUNDUA","district_id"=>172),
            array("code"=>"081906","name"=>"GBANGU","district_id"=>172),
            array("code"=>"081907","name"=>"LANGBINSI","district_id"=>172),
            array("code"=>"081908","name"=>"SAMENE","district_id"=>172),
            array("code"=>"081909","name"=>"SAKOGU","district_id"=>172),
            array("code"=>"081910","name"=>"NALERIGU","district_id"=>172),
            array("code"=>"081911","name"=>"GAMBAGA","district_id"=>172),


            array("code"=>"080501","name"=>"ABRUMASE","district_id"=>173),
            array("code"=>"080502","name"=>"KPALIBE","district_id"=>173),
            array("code"=>"080503","name"=>"OLD MAKANGO","district_id"=>173),
            array("code"=>"080504","name"=>"KPEMBE","district_id"=>173),
            array("code"=>"080505","name"=>"SALAGA","district_id"=>173),
            array("code"=>"080506","name"=>"KIGBATITO","district_id"=>173),
            array("code"=>"080507","name"=>"KIJAU BATTOR","district_id"=>173),


            array("code"=>"081701","name"=>"CHEREPONI","district_id"=>174),


            array("code"=>"080401","name"=>"MPAHA","district_id"=>175),
            array("code"=>"080402","name"=>"LITO","district_id"=>175),
            array("code"=>"080403","name"=>"YAPEI","district_id"=>175),
            array("code"=>"080404","name"=>"YIPALA","district_id"=>175),
            array("code"=>"080405","name"=>"FUFULSO","district_id"=>175),
            array("code"=>"080406","name"=>"SANKPALA","district_id"=>175),
            array("code"=>"080407","name"=>"BUIPE","district_id"=>175),


            array("code"=>"081801","name"=>"BUNKPURUGU","district_id"=>176),
            array("code"=>"081802","name"=>"NAJONG II","district_id"=>176),
            array("code"=>"081803","name"=>"NAJONG I","district_id"=>176),
            array("code"=>"081804","name"=>"NASSUAN","district_id"=>176),
            array("code"=>"081805","name"=>"KPEMALE","district_id"=>176),
            array("code"=>"081806","name"=>"NAKPANDURI","district_id"=>176),


            array("code"=>"080101","name"=>"BOLE","district_id"=>177),
            array("code"=>"080102","name"=>"MANDARI","district_id"=>177),
            array("code"=>"080103","name"=>"BAMBOI","district_id"=>177),
            array("code"=>"080104","name"=>"BANDA NKWANTA","district_id"=>177),
            array("code"=>"080105","name"=>"CHIBE","district_id"=>177),




            array("code"=>"090501","name"=>"DUUSI","district_id"=>178),
            array("code"=>"090502","name"=>"SHEAGA","district_id"=>178),
            array("code"=>"090503","name"=>"TONGO","district_id"=>178),
            array("code"=>"090504","name"=>"WINKOGO","district_id"=>178),
            array("code"=>"090505","name"=>"PWALUGU","district_id"=>178),
            array("code"=>"090506","name"=>"GBEOGO","district_id"=>178),
            array("code"=>"090507","name"=>"GOROGO","district_id"=>178),


            array("code"=>"091301","name"=>"WIDANA","district_id"=>179),
            array("code"=>"091302","name"=>"PUSIGA","district_id"=>179),


            array("code"=>"091101","name"=>"PELUNGU","district_id"=>180),
            array("code"=>"091102","name"=>"NANGODI NAKPALIGA","district_id"=>180),
            array("code"=>"091103","name"=>"NANGODI","district_id"=>180),
            array("code"=>"091104","name"=>"KONGO","district_id"=>180),


            array("code"=>"090201","name"=>"PAGA","district_id"=>181),


            array("code"=>"090301","name"=>"KANDIGA AKUKA","district_id"=>182),
            array("code"=>"090302","name"=>"BIU","district_id"=>182),
            array("code"=>"090303","name"=>"UPPER GAANE","district_id"=>182),
            array("code"=>"090304","name"=>"VUNANIA","district_id"=>182),
            array("code"=>"090305","name"=>"GONGENIA","district_id"=>182),
            array("code"=>"090306","name"=>"KORANIA","district_id"=>182),
            array("code"=>"090307","name"=>"NAVRONGO","district_id"=>182),
            array("code"=>"090308","name"=>"NAYAGENIA","district_id"=>182),
            array("code"=>"090309","name"=>"NYANGUA","district_id"=>182),
            array("code"=>"090310","name"=>"MANYORO GWARE","district_id"=>182),
            array("code"=>"090311","name"=>"GOMONGO","district_id"=>182),
            array("code"=>"090312","name"=>"NAAGA CHOO","district_id"=>182),
            array("code"=>"090313","name"=>"MANYORO","district_id"=>182),


            array("code"=>"090801","name"=>"KONGO","district_id"=>183),
            array("code"=>"090802","name"=>"BUGRI-BULPIELISE","district_id"=>183),
            array("code"=>"090803","name"=>"BASYONDE/SABZUNDE","district_id"=>183),
            array("code"=>"090804","name"=>"WURIYANGA","district_id"=>183),
            array("code"=>"090805","name"=>"TEMPANE","district_id"=>183),
            array("code"=>"090806","name"=>"YABRAGO","district_id"=>183),
            array("code"=>"090807","name"=>"GARU","district_id"=>183),
            array("code"=>"090808","name"=>"DENUGU / DANVORGA","district_id"=>183),


            array("code"=>"090101","name"=>"FUMBISI","district_id"=>184),
            array("code"=>"090102","name"=>"SANDEMA CENTRAL","district_id"=>184),


            array("code"=>"090601","name"=>"NAMOO","district_id"=>185),
            array("code"=>"090602","name"=>"LUNGU (LUNGO)","district_id"=>185),
            array("code"=>"090603","name"=>"SOE SOBOKO","district_id"=>185),
            array("code"=>"090604","name"=>"BONGO","district_id"=>185),


            array("code"=>"090401","name"=>"ZUARUNGU DABORO","district_id"=>186),
            array("code"=>"090402","name"=>"YARIGABISI","district_id"=>186),
            array("code"=>"090403","name"=>"BOLGATANGA","district_id"=>186),


            array("code"=>"091201","name"=>"NARANGO","district_id"=>187),
            array("code"=>"091202","name"=>"BINDURI","district_id"=>187),
            array("code"=>"091203","name"=>"BAZUA","district_id"=>187),
            array("code"=>"091204","name"=>"BOKO","district_id"=>187),
            array("code"=>"091205","name"=>"ZORSI","district_id"=>187),


            array("code"=>"090701","name"=>"BINABA","district_id"=>188),
            array("code"=>"090702","name"=>"ZEBILLA","district_id"=>188),
            array("code"=>"090703","name"=>"GOROGO","district_id"=>188),


            array("code"=>"090901","name"=>"BAWKU","district_id"=>189),
            array("code"=>"090902","name"=>"BADOR","district_id"=>189),
            array("code"=>"090903","name"=>"MOGONORI","district_id"=>189),




            array("code"=>"100101","name"=>"WECHIAU","district_id"=>190),
            array("code"=>"100102","name"=>"TANINA","district_id"=>190),


            array("code"=>"100201","name"=>"DANDAFURO","district_id"=>191),
            array("code"=>"100202","name"=>"KPONGU","district_id"=>191),
            array("code"=>"100203","name"=>"BAMAHU","district_id"=>191),
            array("code"=>"100204","name"=>"WA","district_id"=>191),
            array("code"=>"100205","name"=>"CHARIA","district_id"=>191),


            array("code"=>"100301","name"=>"GORIPIE","district_id"=>192),
            array("code"=>"100302","name"=>"KUNDUNGU","district_id"=>192),
            array("code"=>"100303","name"=>"FUNSI","district_id"=>192),
            array("code"=>"100304","name"=>"BULENGA","district_id"=>192),


            array("code"=>"100701","name"=>"PULIMA","district_id"=>193),
            array("code"=>"100702","name"=>"SORBELLE","district_id"=>193),
            array("code"=>"100703","name"=>"JEFFISI","district_id"=>193),
            array("code"=>"100704","name"=>"GWOLLU","district_id"=>193),
            array("code"=>"100705","name"=>"BUO","district_id"=>193),
            array("code"=>"100706","name"=>"FIELMUA","district_id"=>193),


            array("code"=>"100401","name"=>"SAKAI","district_id"=>194),
            array("code"=>"100402","name"=>"TUMU","district_id"=>194),
            array("code"=>"100403","name"=>"NABULO","district_id"=>194),
            array("code"=>"100404","name"=>"CHALLO","district_id"=>194),
            array("code"=>"100405","name"=>"WALEMBELLE","district_id"=>194),


            array("code"=>"101101","name"=>"NANDOM","district_id"=>195),


            array("code"=>"100501","name"=>"SOMBO","district_id"=>196),
            array("code"=>"100502","name"=>"NARO","district_id"=>196),
            array("code"=>"100503","name"=>"NADOWLI","district_id"=>196),
            array("code"=>"100504","name"=>"KALEO","district_id"=>196),
            array("code"=>"100505","name"=>"SANKANA","district_id"=>196),
            array("code"=>"100506","name"=>"SAMATIGU","district_id"=>196),


            array("code"=>"100901","name"=>"BABILE","district_id"=>197),
            array("code"=>"100902","name"=>"LAWRA","district_id"=>197),
            array("code"=>"100903","name"=>"DOWINE","district_id"=>197),
            array("code"=>"100904","name"=>"BOO","district_id"=>197),


            array("code"=>"100801","name"=>"KARNI","district_id"=>198),
            array("code"=>"100802","name"=>"SAMOA","district_id"=>198),
            array("code"=>"100803","name"=>"HAMILE","district_id"=>198),
            array("code"=>"100804","name"=>"LAMBUSSIE","district_id"=>198),


            array("code"=>"100601","name"=>"SABULI","district_id"=>199),
            array("code"=>"100602","name"=>"HAN","district_id"=>199),
            array("code"=>"100603","name"=>"TAMPALA","district_id"=>199),
            array("code"=>"100604","name"=>"JIRAPA","district_id"=>199),
            array("code"=>"100605","name"=>"TIZZA","district_id"=>199),
            array("code"=>"100606","name"=>"KUNZOKALA","district_id"=>199),
            array("code"=>"100607","name"=>"GBARE","district_id"=>199),
            array("code"=>"100608","name"=>"PING","district_id"=>199),


            array("code"=>"101001","name"=>"DAFFIAMA","district_id"=>200),
            array("code"=>"101002","name"=>"BUSSIE","district_id"=>200),
            array("code"=>"101003","name"=>"KOJOKPERI","district_id"=>200),
            array("code"=>"101004","name"=>"TABEASI","district_id"=>200),
            array("code"=>"101005","name"=>"ISSA","district_id"=>200),
            array("code"=>"101006","name"=>"WUGO","district_id"=>200)

        ];
    }
}
