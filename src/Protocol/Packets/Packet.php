<?php
/**
 * Created by PhpStorm.
 * User: WK
 * Date: 2019/12/3
 * Time: 18:13
 */
namespace PMysql\Protocol\Packets;

/**
 * Class Packets
 * @package PMysql\Protocol\Packets
 */
abstract class Packet
{
    /**
     * @return mixed
     */
    abstract public function readPacket();

    /**
     * @return mixed
     */
    abstract public function writePacket();

    /**
     * @return int
     */
    abstract public function calcPacketSize(): int;

    /**
     * @return string
     */
    abstract public function getPacketInfo(): string;
}