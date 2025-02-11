<?php
/**
* This class is autogenerated by the Spapi class generator
* Date of generation: 2022-05-26
* Specification: https://github.com/amzn/selling-partner-api-models/blob/main/models/fba-inbound-eligibility-api-model/fbaInbound.json
* Source MD5 signature: 5d96c11f7bde9e28ed850bdb8999bfb7
*
*
* Selling Partner API for FBA Inbound Eligibilty
* With the FBA Inbound Eligibility API, you can build applications that let sellers get eligibility previews for items before shipping them to Amazon's fulfillment centers. With this API you can find out if an item is eligible for inbound shipment to Amazon's fulfillment centers in a specific marketplace. You can also find out if an item is eligible for using the manufacturer barcode for FBA inventory tracking. Sellers can use this information to inform their decisions about which items to ship Amazon's fulfillment centers.
*/
namespace DoubleBreak\Spapi\Api;
use DoubleBreak\Spapi\Client;

class FbaInboundEligibility extends Client {

  /**
  * Operation getItemEligibilityPreview
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - The identifier for the marketplace in which you want to determine eligibility. Required only when program=INBOUND.
  *    - *asin* string - The ASIN of the item for which you want an eligibility preview.
  *    - *program* string - The program that you want to check eligibility against.
  *
  */
  public function getItemEligibilityPreview($queryParams = [])
  {
    return $this->send("/fba/inbound/v1/eligibility/itemPreview", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  public function getItemEligibilityPreviewAsync($queryParams = [])
  {
    return $this->sendAsync("/fba/inbound/v1/eligibility/itemPreview", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }
}
