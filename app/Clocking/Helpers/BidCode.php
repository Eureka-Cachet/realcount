<?php

namespace Clocking\Helpers;


use App\Bid;
use Clocking\Helpers\Interfaces\IBidCode;
use Cryptomute\Cryptomute;

class BidCode implements IBidCode
{

    const INCREMENT = 1;
    const INITIALS = "COM";
    private $cryptomute;

    const CIPHER = 'aes-128-cbc';
    const BASE_KEY = '0123456789zxcvbn';
    const NUMBER_OF_ROUNDS = 7;

    /**
     * @var Bid
     */
    private $bid;


    /**
     * BidCode constructor.
     * @param Bid $bid
     */
    public function __construct(Bid $bid)
    {
        $this->cryptomute = new Cryptomute(self::CIPHER, self::BASE_KEY, self::NUMBER_OF_ROUNDS);
        $this->cryptomute = $this->cryptomute->setValueRange(0, 9999999);
        $this->bid = $bid;
    }

    public function generate(): string
    {
        $lastBidGenerated = $this->bid->latest()->first();

        $nextIncrement = null;

        if(is_null($lastBidGenerated)){
            $nextIncrement = self::INCREMENT;
        }else{
            $lastBidCode = $this->removeBIDInitials($lastBidGenerated->code);
            $lastBidDecoded = $this->decode($lastBidCode);
            $nextIncrement =  $lastBidDecoded + self::INCREMENT;
        }

        $newEncodedBID = $this->encode($nextIncrement);
        $BID = self::INITIALS.$newEncodedBID;
        return $BID;
    }

    /**
     * function to obf the raw serial id
     * @param $r_id
     * @return int
     */
    public function encode($r_id){
        return $this->cryptomute->encrypt((string) $r_id, 10, true, $this->getPass(), $this->getIV());
    }

    /**
     * function to deobf safe id into raw one
     * @param $s_id
     * @return int
     */
    public function decode($s_id){
        return (int)$this->cryptomute->decrypt((string) $s_id, 10, true, $this->getPass(), $this->getIV());
    }

    /**
     * @return string
     */
    private function getPass(){
        return '4e70Lt5Nv9jnDExaXltduQUdzU5YcGJWgcxpnJpq';
    }

    /**
     * @return string
     */
    private function getIV(){
        return 'Q7bEOykpb3NewI83';
    }

    /**
     * @param $BID
     * @return bool|string
     */
    private function removeBIDInitials($BID)
    {
        return substr($BID, -7);
    }
}