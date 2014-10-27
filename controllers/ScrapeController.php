<?php

namespace app\controllers;

use Yii;
use Curl\Curl;
use app\libraries\Scraper;

class ScrapeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $curl = new Curl;
        $curl->setopt(CURLOPT_SSL_VERIFYPEER, false);
        $curl->get('https://openpaymentsdata.cms.gov/dataset/General-Payment-Data-with-Identifying-Recipient-In/hrpy-hqv8');
        //echo "<pre>";print_r($curl);echo "</pre>";
        return $this->render('index');
    }

    public function actionTest()
    {
        // NOPE DOESNT WORK
        $curl = new Curl;
        $curl->setopt(CURLOPT_SSL_VERIFYPEER, false);
        $curl->setUserAgent('Mozilla/5.0 (Windows NT 6.3; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0');
        $curl->setReferrer('https://openpaymentsdata.cms.gov/dataset/General-Payment-Data-with-Identifying-Recipient-In/hrpy-hqv8');
        $curl->setHeader('DNT', '1');
        $curl->setHeader('X-Socrata-Federation', 'Honey Badger');
        $curl->setHeader('X-App-Token', 'U29jcmF0YS0td2VraWNrYXNz0');
        $curl->setHeader('X-CSRF-Token', 'pPzz771r2FmAN7aFgSaodVUVxpQoFsF5M4gUmaFy8J0=');
        $curl->setHeader('Cookie', '_ga=GA1.3.1363491985.1413978367; _socrata_session_id=BAh7BkkiD3Nlc3Npb25faWQGOgZFRiIlYjU3NzA5MDFlYTI1ZjI1MDllMTAyMTk5YTRlMDI4Y2I%3D--862c07cc1304bf3f3307683fa6b623d372c6aa7f; socrata-csrf-token=r4QxpOTMot01hj3fxSec%2BlF2gtauhHskudLcG4PGJDQ%3D; _gat=1');
        $curl->setHeader('X-Requested-With', 'XMLHttpRequest');
        $url1 = 'https://openpaymentsdata.cms.gov/views/hrpy-hqv8.json?accessType=WEBSITE&method=opening';
        $url2 = 'https://openpaymentsdata.cms.gov/views/INLINE/rows.json?accessType=WEBSITE&method=getByIds&asHashes=true&start=1749296&length=500';
        $postPayload = json_decode('{"id":"hrpy-hqv8","name":"General Payment Data with Identifying Recipient Information – Detailed Dataset 2013 Reporting Year","description":"All general (non-research, non-ownership related) payments made to physicians  and teaching hospitals where identifying data about the recipients, such as name, address, and specialty, are included.","displayType":"table","publicationAppendEnabled":false,"columns":[{"id":170372256,"name":"General_Transaction_ID","fieldName":"general_transaction_id","position":1,"width":223,"dataTypeName":"text","tableColumnId":22158069,"format":{},"flags":null,"metadata":{}},{"id":170372257,"name":"Program_Year","fieldName":"program_year","position":2,"width":169,"dataTypeName":"number","tableColumnId":22158070,"format":{"precisionStyle":"standard","align":"right","noCommas":"true"},"flags":null,"metadata":{}},{"id":170372258,"name":"Payment_Publication_Date","fieldName":"payment_publication_date","position":3,"width":249,"dataTypeName":"calendar_date","tableColumnId":22158071,"format":{"view":"date","align":"left"},"flags":null,"metadata":{}},{"id":170372259,"name":"Submitting_Applicable_Manufacturer_or_Applicable_GPO_Name","fieldName":"submitting_applicable_manufacturer_or_applicable_gpo_name","position":4,"width":470,"dataTypeName":"text","tableColumnId":22158072,"format":{},"flags":null,"metadata":{}},{"id":170372260,"name":"Covered_Recipient_Type","fieldName":"covered_recipient_type","position":5,"width":250,"dataTypeName":"text","tableColumnId":22158073,"format":{},"flags":null,"metadata":{}},{"id":170372261,"name":"Teaching_Hospital_ID","fieldName":"teaching_hospital_id","position":6,"width":216,"dataTypeName":"text","tableColumnId":22158074,"format":{},"flags":null,"metadata":{}},{"id":170372262,"name":"Teaching_Hospital_Name","fieldName":"teaching_hospital_name","position":7,"width":253,"dataTypeName":"text","tableColumnId":22158075,"format":{},"flags":null,"metadata":{}},{"id":170372263,"name":"Physician_Profile_ID","fieldName":"physician_profile_id","position":8,"width":231,"dataTypeName":"text","tableColumnId":22158076,"format":{},"flags":null,"metadata":{}},{"id":170372264,"name":"Physician_First_Name","fieldName":"physician_first_name","position":9,"width":222,"dataTypeName":"text","tableColumnId":22158077,"format":{},"flags":null,"metadata":{}},{"id":170372265,"name":"Physician_Middle_Name","fieldName":"physician_middle_name","position":10,"width":238,"dataTypeName":"text","tableColumnId":22158078,"format":{},"flags":null,"metadata":{}},{"id":170372266,"name":"Physician_Last_Name","fieldName":"physician_last_name","position":11,"width":229,"dataTypeName":"text","tableColumnId":22158079,"format":{},"flags":null,"metadata":{}},{"id":170372267,"name":"Physician_Name_Suffix","fieldName":"physician_name_suffix","position":12,"width":233,"dataTypeName":"text","tableColumnId":22158080,"format":{},"flags":null,"metadata":{}},{"id":170372268,"name":"Recipient_Primary_Business_Street_Address_Line1","fieldName":"recipient_primary_business_street_address_line1","position":13,"width":386,"dataTypeName":"text","tableColumnId":22158081,"format":{},"flags":null,"metadata":{}},{"id":170372269,"name":"Recipient_Primary_Business_Street_Address_Line2","fieldName":"recipient_primary_business_street_address_line2","position":14,"width":387,"dataTypeName":"text","tableColumnId":22158082,"format":{},"flags":null,"metadata":{}},{"id":170372270,"name":"Recipient_City","fieldName":"recipient_city","position":15,"width":186,"dataTypeName":"text","tableColumnId":22158083,"format":{},"flags":null,"metadata":{}},{"id":170372271,"name":"Recipient_State","fieldName":"recipient_state","position":16,"width":177,"dataTypeName":"text","tableColumnId":22158084,"format":{},"flags":null,"metadata":{}},{"id":170372272,"name":"Recipient_Zip_Code","fieldName":"recipient_zip_code","position":17,"width":205,"dataTypeName":"text","tableColumnId":22158085,"format":{},"flags":null,"metadata":{}},{"id":170372273,"name":"Recipient_Country","fieldName":"recipient_country","position":18,"width":194,"dataTypeName":"text","tableColumnId":22158086,"format":{},"flags":null,"metadata":{}},{"id":170372274,"name":"Recipient_Province","fieldName":"recipient_province","position":19,"width":200,"dataTypeName":"text","tableColumnId":22158087,"format":{},"flags":null,"metadata":{}},{"id":170372275,"name":"Recipient_Postal_Code","fieldName":"recipient_postal_code","position":20,"width":229,"dataTypeName":"text","tableColumnId":22158088,"format":{},"flags":null,"metadata":{}},{"id":170372276,"name":"Physician_Primary_Type","fieldName":"physician_primary_type","position":21,"width":242,"dataTypeName":"text","tableColumnId":22158089,"format":{},"flags":null,"metadata":{}},{"id":170372277,"name":"Physician_Specialty","fieldName":"physician_specialty","position":22,"width":220,"dataTypeName":"text","tableColumnId":22158090,"format":{},"flags":null,"metadata":{}},{"id":170372278,"name":"Physician_License_State_code1","fieldName":"physician_license_state_code1","position":23,"width":278,"dataTypeName":"text","tableColumnId":22158091,"format":{},"flags":null,"metadata":{}},{"id":170372279,"name":"Physician_License_State_code2","fieldName":"physician_license_state_code2","position":24,"width":272,"dataTypeName":"text","tableColumnId":22158092,"format":{},"flags":null,"metadata":{}},{"id":170372280,"name":"Physician_License_State_code3","fieldName":"physician_license_state_code3","position":25,"width":274,"dataTypeName":"text","tableColumnId":22158093,"format":{},"flags":null,"metadata":{}},{"id":170372281,"name":"Physician_License_State_code4","fieldName":"physician_license_state_code4","position":26,"width":281,"dataTypeName":"text","tableColumnId":22158094,"format":{},"flags":null,"metadata":{}},{"id":170372282,"name":"Physician_License_State_code5","fieldName":"physician_license_state_code5","position":27,"width":279,"dataTypeName":"text","tableColumnId":22158095,"format":{},"flags":null,"metadata":{}},{"id":170372283,"name":"Product_Indicator","fieldName":"product_indicator","position":28,"width":192,"dataTypeName":"text","tableColumnId":22158096,"format":{},"flags":null,"metadata":{}},{"id":170372284,"name":"Name_of_Associated_Covered_Drug_or_Biological1","fieldName":"name_of_associated_covered_drug_or_biological1","position":29,"width":389,"dataTypeName":"text","tableColumnId":22158097,"format":{},"flags":null,"metadata":{}},{"id":170372285,"name":"Name_of_Associated_Covered_Drug_or_Biological2","fieldName":"name_of_associated_covered_drug_or_biological2","position":30,"width":400,"dataTypeName":"text","tableColumnId":22158098,"format":{},"flags":null,"metadata":{}},{"id":170372286,"name":"Name_of_Associated_Covered_Drug_or_Biological3","fieldName":"name_of_associated_covered_drug_or_biological3","position":31,"width":400,"dataTypeName":"text","tableColumnId":22158099,"format":{},"flags":null,"metadata":{}},{"id":170372287,"name":"Name_of_Associated_Covered_Drug_or_Biological4","fieldName":"name_of_associated_covered_drug_or_biological4","position":32,"width":393,"dataTypeName":"text","tableColumnId":22158100,"format":{},"flags":null,"metadata":{}},{"id":170372288,"name":"Name_of_Associated_Covered_Drug_or_Biological5","fieldName":"name_of_associated_covered_drug_or_biological5","position":33,"width":410,"dataTypeName":"text","tableColumnId":22158101,"format":{},"flags":null,"metadata":{}},{"id":170372289,"name":"NDC_of_Associated_Covered_Drug_or_Biological1","fieldName":"ndc_of_associated_covered_drug_or_biological1","position":34,"width":389,"dataTypeName":"text","tableColumnId":22158102,"format":{},"flags":null,"metadata":{}},{"id":170372290,"name":"NDC_of_Associated_Covered_Drug_or_Biological2","fieldName":"ndc_of_associated_covered_drug_or_biological2","position":35,"width":384,"dataTypeName":"text","tableColumnId":22158103,"format":{},"flags":null,"metadata":{}},{"id":170372291,"name":"NDC_of_Associated_Covered_Drug_or_Biological3","fieldName":"ndc_of_associated_covered_drug_or_biological3","position":36,"width":383,"dataTypeName":"text","tableColumnId":22158104,"format":{},"flags":null,"metadata":{}},{"id":170372292,"name":"NDC_of_Associated_Covered_Drug_or_Biological4","fieldName":"ndc_of_associated_covered_drug_or_biological4","position":37,"width":391,"dataTypeName":"text","tableColumnId":22158105,"format":{},"flags":null,"metadata":{}},{"id":170372293,"name":"NDC_of_Associated_Covered_Drug_or_Biological5","fieldName":"ndc_of_associated_covered_drug_or_biological5","position":38,"width":384,"dataTypeName":"text","tableColumnId":22158106,"format":{},"flags":null,"metadata":{}},{"id":170372294,"name":"Name_of_Associated_Covered_Device_or_Medical_Supply1","fieldName":"name_of_associated_covered_device_or_medical_supply1","position":39,"width":438,"dataTypeName":"text","tableColumnId":22158107,"format":{},"flags":null,"metadata":{}},{"id":170372295,"name":"Name_of_Associated_Covered_Device_or_Medical_Supply2","fieldName":"name_of_associated_covered_device_or_medical_supply2","position":40,"width":435,"dataTypeName":"text","tableColumnId":22158108,"format":{},"flags":null,"metadata":{}},{"id":170372296,"name":"Name_of_Associated_Covered_Device_or_Medical_Supply3","fieldName":"name_of_associated_covered_device_or_medical_supply3","position":41,"width":438,"dataTypeName":"text","tableColumnId":22158109,"format":{},"flags":null,"metadata":{}},{"id":170372297,"name":"Name_of_Associated_Covered_Device_or_Medical_Supply4","fieldName":"name_of_associated_covered_device_or_medical_supply4","position":42,"width":440,"dataTypeName":"text","tableColumnId":22158110,"format":{},"flags":null,"metadata":{}},{"id":170372298,"name":"Name_of_Associated_Covered_Device_or_Medical_Supply5","fieldName":"name_of_associated_covered_device_or_medical_supply5","position":43,"width":450,"dataTypeName":"text","tableColumnId":22158111,"format":{},"flags":null,"metadata":{}},{"id":170372299,"name":"Applicable_Manufacturer_or_Applicable_GPO_Making_Payment_Name","fieldName":"applicable_manufacturer_or_applicable_gpo_making_payment_name","position":44,"width":510,"dataTypeName":"text","tableColumnId":22158112,"format":{},"flags":null,"metadata":{}},{"id":170372300,"name":"Applicable_Manufacturer_or_Applicable_GPO_Making_Payment_ID","fieldName":"applicable_manufacturer_or_applicable_gpo_making_payment_id","position":45,"width":493,"dataTypeName":"text","tableColumnId":22158113,"format":{},"flags":null,"metadata":{}},{"id":170372301,"name":"Applicable_Manufacturer_or_Applicable_GPO_Making_Payment_State","fieldName":"applicable_manufacturer_or_applicable_gpo_making_payment_state","position":46,"width":499,"dataTypeName":"text","tableColumnId":22158114,"format":{},"flags":null,"metadata":{}},{"id":170372302,"name":"Applicable_Manufacturer_or_Applicable_GPO_Making_Payment_Country","fieldName":"applicable_manufacturer_or_applicable_gpo_making_payment_country","position":47,"width":518,"dataTypeName":"text","tableColumnId":22158115,"format":{},"flags":null,"metadata":{}},{"id":170372303,"name":"Dispute_Status_for_Publication","fieldName":"dispute_status_for_publication","position":48,"width":269,"dataTypeName":"text","tableColumnId":22158116,"format":{},"flags":null,"metadata":{}},{"id":170372304,"name":"Total_Amount_of_Payment_USDollars","fieldName":"total_amount_of_payment_usdollars","position":49,"width":322,"dataTypeName":"money","tableColumnId":22158117,"format":{},"flags":null,"metadata":{}},{"id":170372305,"name":"Date_of_Payment","fieldName":"date_of_payment","position":50,"width":199,"dataTypeName":"calendar_date","tableColumnId":22158118,"format":{"view":"date","align":"left"},"flags":null,"metadata":{}},{"id":170372306,"name":"Number_of_Payments_Included_in_Total_Amount","fieldName":"number_of_payments_included_in_total_amount","position":51,"width":384,"dataTypeName":"number","tableColumnId":22158119,"format":{},"flags":null,"metadata":{}},{"id":170372307,"name":"Form_of_Payment_or_Transfer_of_Value","fieldName":"form_of_payment_or_transfer_of_value","position":52,"width":327,"dataTypeName":"text","tableColumnId":22158120,"format":{},"flags":null,"metadata":{}},{"id":170372308,"name":"Nature_of_Payment_or_Transfer_of_Value","fieldName":"nature_of_payment_or_transfer_of_value","position":53,"width":329,"dataTypeName":"text","tableColumnId":22158121,"format":{},"flags":null,"metadata":{}},{"id":170372309,"name":"City_of_Travel","fieldName":"city_of_travel","position":54,"width":171,"dataTypeName":"text","tableColumnId":22158122,"format":{},"flags":null,"metadata":{}},{"id":170372310,"name":"State_of_Travel","fieldName":"state_of_travel","position":55,"width":182,"dataTypeName":"text","tableColumnId":22158123,"format":{},"flags":null,"metadata":{}},{"id":170372311,"name":"Country_of_Travel","fieldName":"country_of_travel","position":56,"width":188,"dataTypeName":"text","tableColumnId":22158124,"format":{},"flags":null,"metadata":{}},{"id":170372312,"name":"Physician_Ownership_Indicator","fieldName":"physician_ownership_indicator","position":57,"width":264,"dataTypeName":"text","tableColumnId":22158125,"format":{},"flags":null,"metadata":{}},{"id":170372313,"name":"Third_Party_Payment_Recipient_Indicator","fieldName":"third_party_payment_recipient_indicator","position":58,"width":324,"dataTypeName":"text","tableColumnId":22158126,"format":{},"flags":null,"metadata":{}},{"id":170372314,"name":"Name_of_Third_Party_Entity_Receiving_Payment_or_Transfer_of_Value","fieldName":"name_of_third_party_entity_receiving_payment_or_transfer_of_value","position":59,"width":503,"dataTypeName":"text","tableColumnId":22158127,"format":{},"flags":null,"metadata":{}},{"id":170372315,"name":"Charity_Indicator","fieldName":"charity_indicator","position":60,"width":178,"dataTypeName":"text","tableColumnId":22158128,"format":{},"flags":null,"metadata":{}},{"id":170372316,"name":"Third_Party_Equals_Covered_Recipient_Indicator","fieldName":"third_party_equals_covered_recipient_indicator","position":61,"width":370,"dataTypeName":"text","tableColumnId":22158129,"format":{},"flags":null,"metadata":{}},{"id":170372317,"name":"Contextual_Information","fieldName":"contextual_information","position":62,"width":217,"dataTypeName":"text","tableColumnId":22158130,"format":{},"flags":null,"metadata":{}},{"id":170372318,"name":"Delay_in_Publication_of_General_Payment_Indicator","fieldName":"delay_in_publication_of_general_payment_indicator","position":63,"width":397,"dataTypeName":"text","tableColumnId":22158131,"format":{},"flags":null,"metadata":{}}],"metadata":{"renderTypeConfig":{"visible":{"table":true}},"availableDisplayTypes":["table","fatrow","page"],"rdfSubject":"0","filterCondition":{"value":"AND","children":[{"value":"OR","type":"operator","metadata":{"tableColumnId":{"1736338":22158075},"operator":"EQUALS"}},{"value":"OR","type":"operator","metadata":{"tableColumnId":{"1736338":22158079},"operator":"EQUALS"}},{"value":"OR","type":"operator","metadata":{"tableColumnId":{"1736338":22158083},"operator":"EQUALS"}},{"value":"OR","type":"operator","metadata":{"tableColumnId":{"1736338":22158084},"operator":"EQUALS"}},{"value":"OR","type":"operator","metadata":{"tableColumnId":{"1736338":22158085},"operator":"EQUALS"}}],"type":"operator","metadata":{"unifiedVersion":2,"advanced":true}},"feature_flags":{"useSoda2":"false","disable_dataset_search_box":"true"},"jsonQuery":{}},"query":{},"flags":["default"],"originalViewId":"hrpy-hqv8","displayFormat":{}}', true);
        $curl->post($url1, $postPayload);
        echo "<pre>";print_r($curl);echo "</pre>";
        $curl->post($url2, $postPayload);
        echo "<pre>";print_r($curl);echo "</pre>";
        $curl->close();
        return $this->render('test');
    }

    /**
     * Import next set of rows
     */
    public function actionImportNext()
    {
        // import next set of rows
        $scrapeLimit = Yii::$app->params['numScrapeLimit'];
        $command = Yii::$app->db->createCommand('SELECT max(id) FROM tbl_payment');
        $maxId = $command->queryScalar();
        $numImported = Scraper::import($scrapeLimit, $maxId);

        // set flash and redirect
        $command = Yii::$app->db->createCommand('SELECT max(id) FROM tbl_payment');
        $maxId = $command->queryScalar();
        Yii::$app->session->setFlash("Import-success", "Imported $numImported rows, up to id $maxId");
        return $this->redirect(['/payment']);
    }

    public function actionAddColumns()
    {
        Scraper::addDbColumns();
        echo "------------------------------------<br/>done!";
    }
}
