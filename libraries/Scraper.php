<?php

namespace app\libraries;

use Curl\Curl;
use Yii;
use yii\base\Component;
use app\models\Payment;

/**
 * Class Scraper
 *
 * @package app\libraries
 */
class Scraper extends Component
{
    /**
     * Parses curl json response and converts it to usable array format
     * @param string $response
     * @return array
     */
    public static function parseResponseToArray($response)
    {
        // decode json data and iterate through rows
        $rows = json_decode($response, true);
        foreach ($rows as $i => $row) {

            // iterate through row data
            foreach ($row as $field => $value) {

                // remove unneeded meta fields
                if (in_array($field, [":meta", ":created_meta", ":updated_meta"])) {
                    unset($rows[$i][$field]);
                }
                // remove colon from used meta fields
                elseif (strpos($field, ":") === 0) {
                    $rows[$i][substr($field, 1)] = $value;
                    unset($rows[$i][$field]);
                }
            }
        }

        return $rows;
    }

    /**
     * Add db columns to payment table
     */
    public static function addDbColumns()
    {
        // taken from POST payload data in ajax call
        // https://openpaymentsdata.cms.gov/views/INLINE/rows.json?accessType=WEBSITE&method=getByIds&asHashes=true&start=0&length=50&meta=true
        $jsonText = '[{"id":170372256,"name":"General_Transaction_ID","fieldName":"general_transaction_id","position":1,"width":223,"dataTypeName":"text","tableColumnId":22158069,"format":{},"flags":null,"metadata":{}},{"id":170372257,"name":"Program_Year","fieldName":"program_year","position":2,"width":169,"dataTypeName":"number","tableColumnId":22158070,"format":{"precisionStyle":"standard","align":"right","noCommas":"true"},"flags":null,"metadata":{}},{"id":170372258,"name":"Payment_Publication_Date","fieldName":"payment_publication_date","position":3,"width":249,"dataTypeName":"calendar_date","tableColumnId":22158071,"format":{"view":"date","align":"left"},"flags":null,"metadata":{}},{"id":170372259,"name":"Submitting_Applicable_Manufacturer_or_Applicable_GPO_Name","fieldName":"submitting_applicable_manufacturer_or_applicable_gpo_name","position":4,"width":470,"dataTypeName":"text","tableColumnId":22158072,"format":{},"flags":null,"metadata":{}},{"id":170372260,"name":"Covered_Recipient_Type","fieldName":"covered_recipient_type","position":5,"width":250,"dataTypeName":"text","tableColumnId":22158073,"format":{},"flags":null,"metadata":{}},{"id":170372261,"name":"Teaching_Hospital_ID","fieldName":"teaching_hospital_id","position":6,"width":216,"dataTypeName":"text","tableColumnId":22158074,"format":{},"flags":null,"metadata":{}},{"id":170372262,"name":"Teaching_Hospital_Name","fieldName":"teaching_hospital_name","position":7,"width":253,"dataTypeName":"text","tableColumnId":22158075,"format":{},"flags":null,"metadata":{}},{"id":170372263,"name":"Physician_Profile_ID","fieldName":"physician_profile_id","position":8,"width":231,"dataTypeName":"text","tableColumnId":22158076,"format":{},"flags":null,"metadata":{}},{"id":170372264,"name":"Physician_First_Name","fieldName":"physician_first_name","position":9,"width":222,"dataTypeName":"text","tableColumnId":22158077,"format":{},"flags":null,"metadata":{}},{"id":170372265,"name":"Physician_Middle_Name","fieldName":"physician_middle_name","position":10,"width":238,"dataTypeName":"text","tableColumnId":22158078,"format":{},"flags":null,"metadata":{}},{"id":170372266,"name":"Physician_Last_Name","fieldName":"physician_last_name","position":11,"width":229,"dataTypeName":"text","tableColumnId":22158079,"format":{},"flags":null,"metadata":{}},{"id":170372267,"name":"Physician_Name_Suffix","fieldName":"physician_name_suffix","position":12,"width":233,"dataTypeName":"text","tableColumnId":22158080,"format":{},"flags":null,"metadata":{}},{"id":170372268,"name":"Recipient_Primary_Business_Street_Address_Line1","fieldName":"recipient_primary_business_street_address_line1","position":13,"width":386,"dataTypeName":"text","tableColumnId":22158081,"format":{},"flags":null,"metadata":{}},{"id":170372269,"name":"Recipient_Primary_Business_Street_Address_Line2","fieldName":"recipient_primary_business_street_address_line2","position":14,"width":387,"dataTypeName":"text","tableColumnId":22158082,"format":{},"flags":null,"metadata":{}},{"id":170372270,"name":"Recipient_City","fieldName":"recipient_city","position":15,"width":186,"dataTypeName":"text","tableColumnId":22158083,"format":{},"flags":null,"metadata":{}},{"id":170372271,"name":"Recipient_State","fieldName":"recipient_state","position":16,"width":177,"dataTypeName":"text","tableColumnId":22158084,"format":{},"flags":null,"metadata":{}},{"id":170372272,"name":"Recipient_Zip_Code","fieldName":"recipient_zip_code","position":17,"width":205,"dataTypeName":"text","tableColumnId":22158085,"format":{},"flags":null,"metadata":{}},{"id":170372273,"name":"Recipient_Country","fieldName":"recipient_country","position":18,"width":194,"dataTypeName":"text","tableColumnId":22158086,"format":{},"flags":null,"metadata":{}},{"id":170372274,"name":"Recipient_Province","fieldName":"recipient_province","position":19,"width":200,"dataTypeName":"text","tableColumnId":22158087,"format":{},"flags":null,"metadata":{}},{"id":170372275,"name":"Recipient_Postal_Code","fieldName":"recipient_postal_code","position":20,"width":229,"dataTypeName":"text","tableColumnId":22158088,"format":{},"flags":null,"metadata":{}},{"id":170372276,"name":"Physician_Primary_Type","fieldName":"physician_primary_type","position":21,"width":242,"dataTypeName":"text","tableColumnId":22158089,"format":{},"flags":null,"metadata":{}},{"id":170372277,"name":"Physician_Specialty","fieldName":"physician_specialty","position":22,"width":220,"dataTypeName":"text","tableColumnId":22158090,"format":{},"flags":null,"metadata":{}},{"id":170372278,"name":"Physician_License_State_code1","fieldName":"physician_license_state_code1","position":23,"width":278,"dataTypeName":"text","tableColumnId":22158091,"format":{},"flags":null,"metadata":{}},{"id":170372279,"name":"Physician_License_State_code2","fieldName":"physician_license_state_code2","position":24,"width":272,"dataTypeName":"text","tableColumnId":22158092,"format":{},"flags":null,"metadata":{}},{"id":170372280,"name":"Physician_License_State_code3","fieldName":"physician_license_state_code3","position":25,"width":274,"dataTypeName":"text","tableColumnId":22158093,"format":{},"flags":null,"metadata":{}},{"id":170372281,"name":"Physician_License_State_code4","fieldName":"physician_license_state_code4","position":26,"width":281,"dataTypeName":"text","tableColumnId":22158094,"format":{},"flags":null,"metadata":{}},{"id":170372282,"name":"Physician_License_State_code5","fieldName":"physician_license_state_code5","position":27,"width":279,"dataTypeName":"text","tableColumnId":22158095,"format":{},"flags":null,"metadata":{}},{"id":170372283,"name":"Product_Indicator","fieldName":"product_indicator","position":28,"width":192,"dataTypeName":"text","tableColumnId":22158096,"format":{},"flags":null,"metadata":{}},{"id":170372284,"name":"Name_of_Associated_Covered_Drug_or_Biological1","fieldName":"name_of_associated_covered_drug_or_biological1","position":29,"width":389,"dataTypeName":"text","tableColumnId":22158097,"format":{},"flags":null,"metadata":{}},{"id":170372285,"name":"Name_of_Associated_Covered_Drug_or_Biological2","fieldName":"name_of_associated_covered_drug_or_biological2","position":30,"width":400,"dataTypeName":"text","tableColumnId":22158098,"format":{},"flags":null,"metadata":{}},{"id":170372286,"name":"Name_of_Associated_Covered_Drug_or_Biological3","fieldName":"name_of_associated_covered_drug_or_biological3","position":31,"width":400,"dataTypeName":"text","tableColumnId":22158099,"format":{},"flags":null,"metadata":{}},{"id":170372287,"name":"Name_of_Associated_Covered_Drug_or_Biological4","fieldName":"name_of_associated_covered_drug_or_biological4","position":32,"width":393,"dataTypeName":"text","tableColumnId":22158100,"format":{},"flags":null,"metadata":{}},{"id":170372288,"name":"Name_of_Associated_Covered_Drug_or_Biological5","fieldName":"name_of_associated_covered_drug_or_biological5","position":33,"width":410,"dataTypeName":"text","tableColumnId":22158101,"format":{},"flags":null,"metadata":{}},{"id":170372289,"name":"NDC_of_Associated_Covered_Drug_or_Biological1","fieldName":"ndc_of_associated_covered_drug_or_biological1","position":34,"width":389,"dataTypeName":"text","tableColumnId":22158102,"format":{},"flags":null,"metadata":{}},{"id":170372290,"name":"NDC_of_Associated_Covered_Drug_or_Biological2","fieldName":"ndc_of_associated_covered_drug_or_biological2","position":35,"width":384,"dataTypeName":"text","tableColumnId":22158103,"format":{},"flags":null,"metadata":{}},{"id":170372291,"name":"NDC_of_Associated_Covered_Drug_or_Biological3","fieldName":"ndc_of_associated_covered_drug_or_biological3","position":36,"width":383,"dataTypeName":"text","tableColumnId":22158104,"format":{},"flags":null,"metadata":{}},{"id":170372292,"name":"NDC_of_Associated_Covered_Drug_or_Biological4","fieldName":"ndc_of_associated_covered_drug_or_biological4","position":37,"width":391,"dataTypeName":"text","tableColumnId":22158105,"format":{},"flags":null,"metadata":{}},{"id":170372293,"name":"NDC_of_Associated_Covered_Drug_or_Biological5","fieldName":"ndc_of_associated_covered_drug_or_biological5","position":38,"width":384,"dataTypeName":"text","tableColumnId":22158106,"format":{},"flags":null,"metadata":{}},{"id":170372294,"name":"Name_of_Associated_Covered_Device_or_Medical_Supply1","fieldName":"name_of_associated_covered_device_or_medical_supply1","position":39,"width":438,"dataTypeName":"text","tableColumnId":22158107,"format":{},"flags":null,"metadata":{}},{"id":170372295,"name":"Name_of_Associated_Covered_Device_or_Medical_Supply2","fieldName":"name_of_associated_covered_device_or_medical_supply2","position":40,"width":435,"dataTypeName":"text","tableColumnId":22158108,"format":{},"flags":null,"metadata":{}},{"id":170372296,"name":"Name_of_Associated_Covered_Device_or_Medical_Supply3","fieldName":"name_of_associated_covered_device_or_medical_supply3","position":41,"width":438,"dataTypeName":"text","tableColumnId":22158109,"format":{},"flags":null,"metadata":{}},{"id":170372297,"name":"Name_of_Associated_Covered_Device_or_Medical_Supply4","fieldName":"name_of_associated_covered_device_or_medical_supply4","position":42,"width":440,"dataTypeName":"text","tableColumnId":22158110,"format":{},"flags":null,"metadata":{}},{"id":170372298,"name":"Name_of_Associated_Covered_Device_or_Medical_Supply5","fieldName":"name_of_associated_covered_device_or_medical_supply5","position":43,"width":450,"dataTypeName":"text","tableColumnId":22158111,"format":{},"flags":null,"metadata":{}},{"id":170372299,"name":"Applicable_Manufacturer_or_Applicable_GPO_Making_Payment_Name","fieldName":"applicable_manufacturer_or_applicable_gpo_making_payment_name","position":44,"width":510,"dataTypeName":"text","tableColumnId":22158112,"format":{},"flags":null,"metadata":{}},{"id":170372300,"name":"Applicable_Manufacturer_or_Applicable_GPO_Making_Payment_ID","fieldName":"applicable_manufacturer_or_applicable_gpo_making_payment_id","position":45,"width":493,"dataTypeName":"text","tableColumnId":22158113,"format":{},"flags":null,"metadata":{}},{"id":170372301,"name":"Applicable_Manufacturer_or_Applicable_GPO_Making_Payment_State","fieldName":"applicable_manufacturer_or_applicable_gpo_making_payment_state","position":46,"width":499,"dataTypeName":"text","tableColumnId":22158114,"format":{},"flags":null,"metadata":{}},{"id":170372302,"name":"Applicable_Manufacturer_or_Applicable_GPO_Making_Payment_Country","fieldName":"applicable_manufacturer_or_applicable_gpo_making_payment_country","position":47,"width":518,"dataTypeName":"text","tableColumnId":22158115,"format":{},"flags":null,"metadata":{}},{"id":170372303,"name":"Dispute_Status_for_Publication","fieldName":"dispute_status_for_publication","position":48,"width":269,"dataTypeName":"text","tableColumnId":22158116,"format":{},"flags":null,"metadata":{}},{"id":170372304,"name":"Total_Amount_of_Payment_USDollars","fieldName":"total_amount_of_payment_usdollars","position":49,"width":322,"dataTypeName":"money","tableColumnId":22158117,"format":{},"flags":null,"metadata":{}},{"id":170372305,"name":"Date_of_Payment","fieldName":"date_of_payment","position":50,"width":199,"dataTypeName":"calendar_date","tableColumnId":22158118,"format":{"view":"date","align":"left"},"flags":null,"metadata":{}},{"id":170372306,"name":"Number_of_Payments_Included_in_Total_Amount","fieldName":"number_of_payments_included_in_total_amount","position":51,"width":384,"dataTypeName":"number","tableColumnId":22158119,"format":{},"flags":null,"metadata":{}},{"id":170372307,"name":"Form_of_Payment_or_Transfer_of_Value","fieldName":"form_of_payment_or_transfer_of_value","position":52,"width":327,"dataTypeName":"text","tableColumnId":22158120,"format":{},"flags":null,"metadata":{}},{"id":170372308,"name":"Nature_of_Payment_or_Transfer_of_Value","fieldName":"nature_of_payment_or_transfer_of_value","position":53,"width":329,"dataTypeName":"text","tableColumnId":22158121,"format":{},"flags":null,"metadata":{}},{"id":170372309,"name":"City_of_Travel","fieldName":"city_of_travel","position":54,"width":171,"dataTypeName":"text","tableColumnId":22158122,"format":{},"flags":null,"metadata":{}},{"id":170372310,"name":"State_of_Travel","fieldName":"state_of_travel","position":55,"width":182,"dataTypeName":"text","tableColumnId":22158123,"format":{},"flags":null,"metadata":{}},{"id":170372311,"name":"Country_of_Travel","fieldName":"country_of_travel","position":56,"width":188,"dataTypeName":"text","tableColumnId":22158124,"format":{},"flags":null,"metadata":{}},{"id":170372312,"name":"Physician_Ownership_Indicator","fieldName":"physician_ownership_indicator","position":57,"width":264,"dataTypeName":"text","tableColumnId":22158125,"format":{},"flags":null,"metadata":{}},{"id":170372313,"name":"Third_Party_Payment_Recipient_Indicator","fieldName":"third_party_payment_recipient_indicator","position":58,"width":324,"dataTypeName":"text","tableColumnId":22158126,"format":{},"flags":null,"metadata":{}},{"id":170372314,"name":"Name_of_Third_Party_Entity_Receiving_Payment_or_Transfer_of_Value","fieldName":"name_of_third_party_entity_receiving_payment_or_transfer_of_value","position":59,"width":503,"dataTypeName":"text","tableColumnId":22158127,"format":{},"flags":null,"metadata":{}},{"id":170372315,"name":"Charity_Indicator","fieldName":"charity_indicator","position":60,"width":178,"dataTypeName":"text","tableColumnId":22158128,"format":{},"flags":null,"metadata":{}},{"id":170372316,"name":"Third_Party_Equals_Covered_Recipient_Indicator","fieldName":"third_party_equals_covered_recipient_indicator","position":61,"width":370,"dataTypeName":"text","tableColumnId":22158129,"format":{},"flags":null,"metadata":{}},{"id":170372317,"name":"Contextual_Information","fieldName":"contextual_information","position":62,"width":217,"dataTypeName":"text","tableColumnId":22158130,"format":{},"flags":null,"metadata":{}},{"id":170372318,"name":"Delay_in_Publication_of_General_Payment_Indicator","fieldName":"delay_in_publication_of_general_payment_indicator","position":63,"width":397,"dataTypeName":"text","tableColumnId":22158131,"format":{},"flags":null,"metadata":{}}]';
        $fields = json_decode($jsonText, true);

        // build columns array
        $columns = [];
        foreach ($fields as $field) {
            $columnName = substr($field["fieldName"], 0 ,64);
            $columns[$columnName] = "string";
        }

        // add meta columns
        $metaColumns = ["id", "created_at", "updated_at"];
        foreach ($metaColumns as $metaColumn) {
            $columns[$metaColumn] = "int";
        }

        // add columns to table
        $table = Payment::tableName();
        $connection = Yii::$app->db;
        foreach ($columns as $columnName => $columnType) {

            // check for max column length 64 (mysql limit)
            $columnName = substr($columnName, 0, 64);

            // check if column already exists before adding it
            $tblSchema = $connection->getTableSchema($table, true);
            if (empty($tblSchema->columns[$columnName])) {
                $connection->createCommand()->addColumn($table, $columnName, $columnType)->execute();
                echo "adding column - $columnName<br/>";
            }
        }
    }

    /**
     * Import the next rows into db
     * @param int $numScrapeLimit
     * @param int $lastImportedId
     */
    public static function import($numScrapeLimit, $lastImportedId)
    {
        // get rows data
        $curl = new Curl;
        $curl->setopt(CURLOPT_SSL_VERIFYPEER, false);
        $curl->get('https://openpaymentsdata.cms.gov/resource/hrpy-hqv8.json?$$exclude_system_fields=false&$limit=' . $numScrapeLimit . '&$where=:id%3E' . $lastImportedId);
        $rows = static::parseResponseToArray($curl->response);

        // build rows for batch insertion
        $insertRows = [];
        foreach ($rows as $row) {

            // set empty attributes because the data we get from the json api may not contain all fields
            $insertRow = Payment::getEmptyAttributes();
            foreach ($row as $field => $value) {
                // handle 64 char limit for mysql fields
                $insertRow[substr($field, 0, 64)] = $value;
            }
            $insertRows[] = $insertRow;
        }

        // insert records, splitting the inserts into 1000 record chunks
        $connection = Yii::$app->db;
        $insertColumns = array_keys(Payment::getEmptyAttributes());
        $insertChunks = array_chunk($insertRows, 1000);
        foreach ($insertChunks as $insertChunk) {
            $connection->createCommand()->batchInsert(Payment::tableName(), $insertColumns, $insertChunk)->execute();
        }

        return count($insertRows);
    }
}
