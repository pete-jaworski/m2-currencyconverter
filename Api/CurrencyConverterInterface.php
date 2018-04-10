<?php
/**
 * Created by PhpStorm.
 * User: Piotr Jaworski
 * Date: 10.04.2018
 */

namespace Orba\CurrencyConverter\Api;

/**
 * Interface CurrencyConverterInterface
 * @package Orba\CurrencyConverter\Api
 */
interface CurrencyConverterInterface
{
    /**
     * @param string $from
     * @param string $to
     * @param float $amount
     * @return string
     */
    public function convert($from, $to, $amount = 1);

}