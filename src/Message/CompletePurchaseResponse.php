<?php
namespace Omnipay\Ecopayz\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Ecopayz Complete Purchase Response
 *
 * @author Samuel Petrosyan <spetrosyan@codeblock.pro>
 * @copyright 2018 Codeblock
 * @license   http://opensource.org/licenses/mit-license.php MIT
 * @version   2.0.3 Ecopayz API Specification
 */
class CompletePurchaseResponse extends AbstractResponse
{
    /**
     * Is the response successful
     *
     * @return boolean is successful
     */
    public function isSuccessful()
    {
        return $this->getCode() === 0;
    }

    /**
     * Get the response code
     *
     * @return int code
     */
    public function getCode()
    {
        $xml = $this->data['notifyData'];
        $code = (int)$xml->StatusReport->SVSTransaction->Result->Code;

        return $code;
    }

    /**
     * Get the response description
     *
     * @return int code
     */
    public function getDescription()
    {
        $xml = $this->data['notifyData'];
        $desc = (string)$xml->StatusReport->SVSTransaction->Result->Description;

        return empty($desc) ? 'OK' : $desc;
    }

    /**
     * Get xml object
     *
     * @return void
     */
    public function getData()
    {
        return $this->data['response']['object'];
    }

    /**
     * Get pure xml
     *
     * @return void
     */
    public function getXmlData()
    {
        return $this->data['response']['xml'];
    }
}
