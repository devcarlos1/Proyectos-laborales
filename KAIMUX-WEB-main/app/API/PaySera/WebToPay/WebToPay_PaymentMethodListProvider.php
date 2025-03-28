<?php
namespace App\API\PaySera\WebToPay;

use App\API\PaySera\WebToPayException;

/**
 * Loads data about payment methods and constructs payment method list object from that data
 * You need SimpleXML support to use this feature
 */
class WebToPay_PaymentMethodListProvider {

    /**
     * @var integer
     */
    protected $projectId;

    /**
     * @var WebToPay_WebClient
     */
    protected $webClient;

    /**
     * Holds constructed method lists by currency
     *
     * @var WebToPay_PaymentMethodList[]
     */
    protected $methodListCache = array();

    /**
     * Builds various request URLs
     *
     * @var WebToPay_UrlBuilder $urlBuilder
     */
    protected $urlBuilder;

    /**
     * Constructs object
     *
     * @param integer            $projectId
     * @param WebToPay_WebClient $webClient
     * @param WebToPay_UrlBuilder $urlBuilder
     *
     * @throws WebToPayException if SimpleXML is not available
     */
    public function __construct(
        $projectId,
        WebToPay_WebClient $webClient,
        WebToPay_UrlBuilder $urlBuilder
    )
    {
        $this->projectId = $projectId;
        $this->webClient = $webClient;
        $this->urlBuilder = $urlBuilder;

        if (!function_exists('simplexml_load_string')) {
            throw new WebToPayException('You have to install libxml to use payment methods API');
        }
    }

    /**
     * Gets payment method list for specified currency
     *
     * @param string $currency
     *
     * @return WebToPay_PaymentMethodList
     *
     * @throws WebToPayException
     */
    public function getPaymentMethodList($currency) {
        if (!isset($this->methodListCache[$currency])) {
            $xmlAsString = $this->webClient->get($this->urlBuilder->buildForPaymentsMethodList($this->projectId, $currency));
            $useInternalErrors = libxml_use_internal_errors(false);
            $rootNode = simplexml_load_string($xmlAsString);
            libxml_clear_errors();
            libxml_use_internal_errors($useInternalErrors);
            if (!$rootNode) {
                throw new WebToPayException('Unable to load XML from remote server');
            }
            $methodList = new WebToPay_PaymentMethodList($this->projectId, $currency);
            $methodList->fromXmlNode($rootNode);
            $this->methodListCache[$currency] = $methodList;
        }
        return $this->methodListCache[$currency];
    }
}
