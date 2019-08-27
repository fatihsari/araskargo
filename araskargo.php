<?php

ini_set("soap.wsdl_cache_enabled", "0");


  //One order
  class Order{
    private $ResultCode;
    public function get_ResultCode(){
      return $this->ResultCode;
    }

    private $ResultMessage;
    public function get_ResultMessage(){
      return $this->ResultMessage;
    }

    private $InvoiceKey;
    public function get_InvoiceKey(){
      return $this->InvoiceKey;
    }

    private $OrgReceiverCustId;
    public function get_OrgReceiverCustId(){
      return $this->OrgReceiverCustId;
    }

    public function response($response){
      $this->ResultCode        = (string) $response->ResultCode;
      $this->ResultMessage     = (string) $response->ResultMessage;
      $this->InvoiceKey        = (string) $response->InvoiceKey;
      $this->OrgReceiverCustId = (string) $response->OrgReceiverCustId;
    }


    private $TradingWaybillNumber;
    public function set_TradingWaybillNumber($TradingWaybillNumber){
      $this->TradingWaybillNumber = $TradingWaybillNumber;
    }
    public function get_TradingWaybillNumber(){
      return $this->TradingWaybillNumber;
    }


    private $InvoiceNumber;
    public function set_InvoiceNumber($InvoiceNumber){
      $this->InvoiceNumber = $InvoiceNumber;
    }
    public function get_InvoiceNumber(){
      return $this->InvoiceNumber;
    }


    private $ReceiverName;
    public function set_ReceiverName($ReceiverName){
      $this->ReceiverName = $ReceiverName;
    }
    public function get_ReceiverName(){
      return $this->ReceiverName;
    }


    private $ReceiverAddress;
    public function set_ReceiverAddress($ReceiverAddress){
      $this->ReceiverAddress = $ReceiverAddress;
    }
    public function get_ReceiverAddress(){
      return $this->ReceiverAddress;
    }


    private $ReceiverPhone1;
    public function set_ReceiverPhone1($ReceiverPhone1){
      $this->ReceiverPhone1 = $ReceiverPhone1;
    }
    public function get_ReceiverPhone1(){
      return $this->ReceiverPhone1;
    }


    private $ReceiverPhone2;
    public function set_ReceiverPhone2($ReceiverPhone2){
      $this->ReceiverPhone2 = $ReceiverPhone2;
    }
    public function get_ReceiverPhone2(){
      return $this->ReceiverPhone2;
    }


    private $ReceiverPhone3;
    public function set_ReceiverPhone3($ReceiverPhone3){
      $this->ReceiverPhone3 = $ReceiverPhone3;
    }
    public function get_ReceiverPhone3(){
      return $this->ReceiverPhone3;
    }


    private $ReceiverCityName;
    public function set_ReceiverCityName($ReceiverCityName){
      $this->ReceiverCityName = $ReceiverCityName;
    }
    public function get_ReceiverCityName(){
      return $this->ReceiverCityName;
    }


    private $ReceiverTownName;
    public function set_ReceiverTownName($ReceiverTownName){
      $this->ReceiverTownName = $ReceiverTownName;
    }
    public function get_ReceiverTownName(){
      return $this->ReceiverTownName;
    }


    private $VolumetricWeight;
    public function set_VolumetricWeight($VolumetricWeight){
      $this->VolumetricWeight = $VolumetricWeight;
    }
    public function get_VolumetricWeight(){
      return $this->VolumetricWeight;
    }


    private $Weight;
    public function set_Weight($Weight){
      $this->Weight = $Weight;
    }
    public function get_Weight(){
      return $this->Weight;
    }


    private $PieceCount;
    public function set_PieceCount($PieceCount){
      $this->PieceCount = $PieceCount;
    }
    public function get_PieceCount(){
      return $this->PieceCount;
    }


    private $SpecialField1;
    public function set_SpecialField1($SpecialField1){
      $this->SpecialField1 = $SpecialField1;
    }
    public function get_SpecialField1(){
      return $this->SpecialField1;
    }


    private $SpecialField2;
    public function set_SpecialField2($SpecialField2){
      $this->SpecialField2 = $SpecialField2;
    }
    public function get_SpecialField2(){
      return $this->SpecialField2;
    }


    private $SpecialField3;
    public function set_SpecialField3($SpecialField3){
      $this->SpecialField3 = $SpecialField3;
    }
    public function get_SpecialField3(){
      return $this->SpecialField3;
    }


    private $CodAmount;
    public function set_CodAmount($CodAmount){
      $this->CodAmount = $CodAmount;
    }
    public function get_CodAmount(){
      return $this->CodAmount;
    }

    private $CodCollectionType;
    public function set_CodCollectionType($CodCollectionType){
      $this->CodCollectionType = $CodCollectionType;
    }
    public function get_CodCollectionType(){
      return $this->CodCollectionType;
    }

    private $CodBillingType;
    public function set_CodBillingType($CodBillingType){
      $this->CodBillingType = $CodBillingType;
    }
    public function get_CodBillingType(){
      return $this->CodBillingType;
    }


    private $IntegrationCode;
    public function set_IntegrationCode($IntegrationCode){
      $this->IntegrationCode = $IntegrationCode;
    }
    public function get_IntegrationCode(){
      return $this->IntegrationCode;
    }


    private $Description;
    public function set_Description($Description){
      $this->Description = $Description;
    }
    public function get_Description(){
      return $this->Description;
    }


    private $TaxNumber;
    public function set_TaxNumber($TaxNumber){
      $this->TaxNumber = $TaxNumber;
    }
    public function get_TaxNumber(){
      return $this->TaxNumber;
    }

    private $TtDocumentId;
    public function set_TtDocumentId($TtDocumentId){
      $this->TtDocumentId = $TtDocumentId;
    }
    public function get_TtDocumentId(){
      return $this->TtDocumentId;
    }


    private $TaxOffice;
    public function set_TaxOffice($TaxOffice){
      $this->TaxOffice = $TaxOffice;
    }
    public function get_TaxOffice(){
      return $this->TaxOffice;
    }

    private $PrivilegeOrder;
    public function set_PrivilegeOrder(){
      $this->PrivilegeOrder = $PrivilegeOrder;
    }
    public function get_PrivilegeOrder(){
      return $this->PrivilegeOrder;
    }


    private $Country;
    public function set_Country($Country){
      $this->Country = $Country;
    }
    public function get_Country(){
      return $this->Country;
    }


    private $CountryCode;
    public function set_CountryCode($CountryCode){
      $this->CountryCode = $CountryCode;
    }
    public function get_CountryCode(){
      return $this->CountryCode;
    }


    private $CityCode;
    public function set_CityCode($CityCode){
      $this->CityCode = $CityCode;
    }
    public function get_CityCode(){
      return $this->CityCode;
    }


    private $TownCode;
    public function set_TownCode($TownCode){
      $this->TownCode = $TownCode;
    }
    public function get_TownCode(){
      return $this->TownCode;
    }


    private $ReceiverDistrictName;
    public function set_ReceiverDistrictName($ReceiverDistrictName){
      $this->ReceiverDistrictName = $ReceiverDistrictName;
    }
    public function get_ReceiverDistrictName(){
      return $this->ReceiverDistrictName;
    }

    private $ReceiverQuarterName;
    public function set_ReceiverQuarterName($ReceiverQuarterName){
      $this->ReceiverQuarterName = $ReceiverQuarterName;
    }
    public function get_ReceiverQuarterName(){
      return $this->ReceiverQuarterName;
    }


    private $ReceiverAvenueName;
    public function set_ReceiverAvenueName($ReceiverAvenueName){
      $this->ReceiverAvenueName = $ReceiverAvenueName;
    }
    public function get_ReceiverAvenueName(){
      return $this->ReceiverAvenueName;
    }


    private $ReceiverStreetName;
    public function set_ReceiverStreetName($ReceiverStreetName){
      $this->ReceiverStreetName = $ReceiverStreetName;
    }
    public function get_ReceiverStreetName(){
      return $this->ReceiverStreetName;
    }


    private $PayorTypeCode;
    public function set_PayorTypeCode($PayorTypeCode){
      $this->PayorTypeCode = $PayorTypeCode;
    }
    public function get_PayorTypeCode(){
      return $this->PayorTypeCode;
    }


    private $IsWorldWide;
    public function set_IsWorldWide($IsWorldWide){
      $this->IsWorldWide = $IsWorldWide;
    }
    public function get_IsWorldWide(){
      return $this->IsWorldWide;
    }


    private $IsCod;
    public function set_IsCod($IsCod){
      $this->IsCod = $IsCod;
    }
    public function get_IsCod($IsCod){
      return $this->IsCod;
    }

    private $UnitID;
    public function set_UnitID($UnitID){
      $this->UnitID = $UnitID;
    }
    public function get_UnitID(){
      return $this->UnitID;
    }

    public function generate($username,$password){
      $request ="<Order>
      <UserName>".$username."</UserName>
      <Password>".$password."</Password>
      <TradingWaybillNumber>".$TradingWaybillNumber."</TradingWaybillNumber>
      <InvoiceNumber>".$InvoiceNumber."</InvoiceNumber>
      <ReceiverName>".$ReceiverName."</ReceiverName>
      <ReceiverAddress>".$ReceiverAddress."</ReceiverAddress>
      <ReceiverPhone1>".$ReceiverPhone1."</ReceiverPhone1>
      <ReceiverPhone2>".$ReceiverPhone2."</ReceiverPhone2>
      <ReceiverPhone3>".$ReceiverPhone3."</ReceiverPhone3>
      <ReceiverCityName>".$ReceiverCityName."</ReceiverCityName>
      <ReceiverTownName>".$ReceiverTownName."</ReceiverTownName>
      <VolumetricWeight>".$VolumetricWeight."</VolumetricWeight>
      <Weight>".$Weight."</Weight>
      <PieceCount>".$PieceCount."</PieceCount>
      <SpecialField1>".$SpecialField1."</SpecialField1>
      <SpecialField2>".$SpecialField2."</SpecialField2>
      <SpecialField3>".$SpecialField3."</SpecialField3>
      <CodAmount>".$CodAmount."</CodAmount>
      <CodCollectionType>".$CodCollectionType."</CodCollectionType>
      <CodBillingType>".$CodBillingType."</CodBillingType>
      <IntegrationCode>".$IntegrationCode."</IntegrationCode>
      <Description>".$Description."</Description>
      <TaxNumber>".$TaxNumber."</TaxNumber>
      <TtDocumentId>".$TtDocumentId."</TtDocumentId>
      <TaxOffice>".$TaxOffice."</TaxOffice>
      <PrivilegeOrder>".$PrivilegeOrder."</PrivilegeOrder>
      <Country>".$Country."</Country>
      <CountryCode>".$CountryCode."</CountryCode>
      <CityCode>".$CityCode."</CityCode>
      <TownCode>".$TownCode."</TownCode>
      <ReceiverDistrictName>".$ReceiverDistrictName."</ReceiverDistrictName>
      <ReceiverQuarterName>".$ReceiverQuarterName."</ReceiverQuarterName>
      <ReceiverAvenueName>".$ReceiverAvenueName."</ReceiverAvenueName>
      <ReceiverStreetName>".$ReceiverStreetName."</ReceiverStreetName>
      <PayorTypeCode>".$PayorTypeCode."</PayorTypeCode>
      <IsWorldWide>".$IsWorldWide."</IsWorldWide>
      <IsCod>".$IsCod."</IsCod>
      <UnitID>".$UnitID."</UnitID>
      <PieceDetails>
        <PieceDetail xsi:nil='true' />
        <PieceDetail xsi:nil='true' />
        </PieceDetails>
        <SenderAccountAddressId>".$SenderAccountAddressId."</SenderAccountAddressId>
        </Order>";
      }


  };

  //Multiple order
  class Orders{

    public $orders = array();
    public function check(){
      echo "check one";
    }
    public function __construct(){

      $this->orders[] = new Order();
    }
    public  function add_new_order(){$this->orders[] = new Order;}

    public function generate($username,$password){ // Generate request to send server
      $value ="<SetOrder xmlns='http://tempuri.org/'>
               <orderInfo>";
      foreach ($orders as $order) {
          $value .= $order->generate($username,$password);
      }
      $value.="</orderInfo>
      <userName>".$username."</userName>
      <password>".$password."</password>
      </SetOrder>";
      return $value;
    }
    public function response($response){
        $i = 0;
        foreach($orders as $order){
          $order->response($response->SetOrderResult->OrderResultInfo[i]);//if xml is not array will give error
          $i++;
        }
    }
};

class ArasKargo {
  private $client;
  private $username;
  private $password;
  private $adress = "http://customerservicestest.araskargo.com.tr/arascargoservice/arascargoservice.asmx?wsdl";

  public  $orders;   // To make order and get return values, you must fill the  Orders object

  public function set_username($username){
    $this->username = $username;
  }
  public function set_password($password){
    $this->password = $password;
  }

  public function __construct(){
    $client = new SoapClient("http://customerservicestest.araskargo.com.tr/arascargoservice/arascargoservice.asmx?wsdl");
    $orders = new Orders;
    echo "construc";
  }

  private $request_header ="POST /arascargoservice/arascargoservice.asmx HTTP/1.1
    Host: appls-srv.araskargo.com.tr
    Content-Type: text/xml; charset=utf-8
    Content-Length: length
    SOAPAction: 'http://tempuri.org/";

    private $request_start = "'
    <?xml version='1.0' encoding='utf-8'?>
    <soap:Envelope xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xmlns:xsd='http://www.w3.org/2001/XMLSchema' xmlns:soap='http://schemas.xmlsoap.org/soap/envelope/'>
    <soap:Body>";


  private $request_end ="</soap:Body></soap:Envelope>";

  //SetOrder
  public  function Set_Order(){ // Send the request and get returns
      $request  =  $this->request_header;
      $request .= "SetOrder";
      $request .=  $this->request_start;
      $request .=  $this->orders->generate($this->username,$this->password);
      $request .=  $this->request_end;
      $response =  $this->client->SetOrder($request);

      $response1 = str_replace("<soap:Body>", "", $response);
      $response2 = str_replace("</soap:Body>", "", $response1);
      $xml = simplexml_load_string($response2);
      $this->orders->response($xml->SetOrderResponse);

  }
  //SetOrder END


}

echo "oldu";

/**




**/








?>
