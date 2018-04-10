<?php
/**
 * Created by PhpStorm.
 * User: Piotr Jaworski
 * Date: 10.04.2018
 */

namespace Orba\CurrencyConverter\Model;

/**
 * Class CurrencyConverter
 * @package Orba\CurrencyConverter\Model
 */
class CurrencyConverter implements \Orba\CurrencyConverter\Api\CurrencyConverterInterface
{
    /**
     * Web service URL
     */
    const SERVICE_URL = 'https://free.currencyconverterapi.com/api/v5/convert?q=';

    /**
     * @param string $from
     * @param string $to
     * @param int $amount
     * @return string
     */
    public function convert($from, $to, $amount = 1)
    {
        return $this->convertCurrency(urlencode($from), urlencode($to), $amount);
    }


    /**
     * @param string $from
     * @param string $to
     * @param int $amount
     * @return string
     */
    private function convertCurrency($from, $to, $amount)
    {
        $query =  "{$from}_{$to}";

        try {
            $json = file_get_contents(self::SERVICE_URL.$query);
            $obj = json_decode($json, true);
            $val = floatval($obj["results"]["$query"]["val"]);
            $total = $val * $amount;
            return number_format($total, 2, '.', '');

        } catch (\Exception $exception) {
            return __('We are sorry :( - unexpected error occured. Please try later.');
        }



    }



}