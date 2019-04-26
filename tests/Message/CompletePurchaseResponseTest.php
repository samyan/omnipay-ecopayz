<?php
namespace Omnipay\Ecopayz\Message;

use Omnipay\Tests\TestCase;
use Symfony\Component\HttpFoundation\Request as HttpRequest;

class CompletePurchaseResponseTest extends TestCase
{
    public function testFailure()
    {
        $httpRequest = new HttpRequest(array(), array(), array(), array(), array(), array(), '<?xml version="1.0" encoding="utf-8"?><SVSPurchaseStatusNotificationRequest><StatusReport><StatusDescription></StatusDescription><Status>3</Status><SVSTransaction><SVSCustomerAccount>1100382492</SVSCustomerAccount><ProcessingTime>2019-04-25 19:35:07</ProcessingTime><Result><Description>Not enough money for the withdrawal operation. The account balance less than transaction amount.</Description><Code>11007</Code></Result><BatchNumber>7036138</BatchNumber><Id>2326010000008972333</Id></SVSTransaction><SVSCustomer><IP>10.8.140.15</IP><PostalCode>33465</PostalCode><Country>DE</Country><LastName>Dicaprio</LastName><FirstName>Leo</FirstName></SVSCustomer></StatusReport><Request><MerchantFreeText></MerchantFreeText><CustomerIdAtMerchant>22</CustomerIdAtMerchant><MerchantAccountNumber>112013</MerchantAccountNumber><Currency>EUR</Currency><Amount>10.00</Amount><TxBatchNumber>0</TxBatchNumber><TxID>1514336366</TxID></Request><Authentication><Checksum>4dc3a456b17e4239d3ca9eb3c17426e8</Checksum></Authentication></SVSPurchaseStatusNotificationRequest>');
        $request = new CompletePurchaseRequest($this->getHttpClient(), $httpRequest);
        $request->initialize(array(
            'merchantId' => '100',
            'merchantPassword' => 'Y23X05ZS4TDA',
            'testMode' => true
        ));

        $response = $request->send();

        $this->assertFalse($response->isSuccessful());
        $this->assertSame(11007, $response->getCode());
        $this->assertSame('Not enough money for the withdrawal operation. The account balance less than transaction amount.', $response->getDescription());
    }

    public function testSuccess()
    {
        $httpRequest = new HttpRequest(array(), array(), array(), array(), array(), array(), '<?xml version="1.0" encoding="utf-8"?><SVSPurchaseStatusNotificationRequest><StatusReport><StatusDescription></StatusDescription><Status>4</Status><SVSTransaction><SVSCustomerAccount>1100382492</SVSCustomerAccount><ProcessingTime>2019-04-25 19:35:07</ProcessingTime><Result><Description></Description><Code></Code></Result><BatchNumber>7036138</BatchNumber><Id>2326010000008972333</Id></SVSTransaction><SVSCustomer><IP>10.8.140.15</IP><PostalCode>33465</PostalCode><Country>DE</Country><LastName>Dicaprio</LastName><FirstName>Leo</FirstName></SVSCustomer></StatusReport><Request><MerchantFreeText></MerchantFreeText><CustomerIdAtMerchant>22</CustomerIdAtMerchant><MerchantAccountNumber>112013</MerchantAccountNumber><Currency>EUR</Currency><Amount>10.00</Amount><TxBatchNumber>0</TxBatchNumber><TxID>1514336366</TxID></Request><Authentication><Checksum>4dc3a456b17e4239d3ca9eb3c17426e8</Checksum></Authentication></SVSPurchaseStatusNotificationRequest>');
        $request = new CompletePurchaseRequest($this->getHttpClient(), $httpRequest);
        $request->initialize(array(
            'merchantId' => '100',
            'merchantPassword' => 'Y23X05ZS4TDA',
            'testMode' => true
        ));

        $response = $request->send();

        $this->assertTrue($response->isSuccessful());
        $this->assertSame(0, $response->getCode());
        $this->assertSame('OK', $response->getDescription());
    }
}
