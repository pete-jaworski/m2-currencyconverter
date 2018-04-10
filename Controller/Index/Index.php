<?php
/**
 * Created by PhpStorm.
 * User: Piotr Jaworski
 * Date: 10.04.2018
 */
namespace Orba\CurrencyConverter\Controller\Index;

/**
 * Class Index
 * @package Orba\CurrencyConverter\Controller\Index
 */
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        return $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_PAGE);
    }

}