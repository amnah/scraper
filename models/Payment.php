<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%payment}}".
 *
 * @property integer $id
 * @property string $physician_first_name
 * @property string $applicable_manufacturer_or_applicable_gpo_making_payment_state
 * @property string $physician_last_name
 * @property string $date_of_payment
 * @property string $contextual_information
 * @property string $form_of_payment_or_transfer_of_value
 * @property string $recipient_country
 * @property string $nature_of_payment_or_transfer_of_value
 * @property string $recipient_state
 * @property string $delay_in_publication_of_general_payment_indicator
 * @property string $recipient_primary_business_street_address_line1
 * @property string $general_transaction_id
 * @property string $physician_license_state_code1
 * @property string $covered_recipient_type
 * @property string $recipient_zip_code
 * @property string $applicable_manufacturer_or_applicable_gpo_making_payment_name
 * @property string $product_indicator
 * @property string $dispute_status_for_publication
 * @property string $recipient_city
 * @property string $third_party_payment_recipient_indicator
 * @property string $physician_specialty
 * @property string $physician_primary_type
 * @property string $applicable_manufacturer_or_applicable_gpo_making_payment_id
 * @property string $physician_profile_id
 * @property string $payment_publication_date
 * @property string $submitting_applicable_manufacturer_or_applicable_gpo_name
 * @property string $program_year
 * @property string $number_of_payments_included_in_total_amount
 * @property string $physician_ownership_indicator
 * @property string $total_amount_of_payment_usdollars
 * @property string $applicable_manufacturer_or_applicable_gpo_making_payment_country
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $recipient_primary_business_street_address_line2
 * @property string $name_of_associated_covered_device_or_medical_supply1
 * @property string $charity_indicator
 * @property string $physician_middle_name
 * @property string $third_party_equals_covered_recipient_indicator
 * @property string $country_of_travel
 * @property string $state_of_travel
 * @property string $city_of_travel
 * @property string $name_of_third_party_entity_receiving_payment_or_transfer_of_valu
 * @property string $teaching_hospital_name
 * @property string $teaching_hospital_id
 * @property string $name_of_associated_covered_drug_or_biological1
 * @property string $name_of_associated_covered_drug_or_biological2
 * @property string $ndc_of_associated_covered_drug_or_biological2
 * @property string $ndc_of_associated_covered_drug_or_biological1
 * @property string $name_of_associated_covered_drug_or_biological3
 * @property string $ndc_of_associated_covered_drug_or_biological3
 * @property string $physician_name_suffix
 * @property string $physician_license_state_code2
 * @property string $name_of_associated_covered_drug_or_biological4
 * @property string $name_of_associated_covered_drug_or_biological5
 * @property string $ndc_of_associated_covered_drug_or_biological5
 * @property string $ndc_of_associated_covered_drug_or_biological4
 * @property string $name_of_associated_covered_device_or_medical_supply2
 * @property string $name_of_associated_covered_device_or_medical_supply3
 * @property string $name_of_associated_covered_device_or_medical_supply4
 * @property string $physician_license_state_code3
 * @property string $name_of_associated_covered_device_or_medical_supply5
 */
class Payment extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%payment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['physician_first_name', 'applicable_manufacturer_or_applicable_gpo_making_payment_state', 'physician_last_name', 'date_of_payment', 'contextual_information', 'form_of_payment_or_transfer_of_value', 'recipient_country', 'nature_of_payment_or_transfer_of_value', 'recipient_state', 'delay_in_publication_of_general_payment_indicator', 'recipient_primary_business_street_address_line1', 'general_transaction_id', 'physician_license_state_code1', 'covered_recipient_type', 'recipient_zip_code', 'applicable_manufacturer_or_applicable_gpo_making_payment_name', 'product_indicator', 'dispute_status_for_publication', 'recipient_city', 'third_party_payment_recipient_indicator', 'physician_specialty', 'physician_primary_type', 'applicable_manufacturer_or_applicable_gpo_making_payment_id', 'physician_profile_id', 'payment_publication_date', 'submitting_applicable_manufacturer_or_applicable_gpo_name', 'program_year', 'number_of_payments_included_in_total_amount', 'physician_ownership_indicator', 'total_amount_of_payment_usdollars', 'applicable_manufacturer_or_applicable_gpo_making_payment_country', 'recipient_primary_business_street_address_line2', 'name_of_associated_covered_device_or_medical_supply1', 'charity_indicator', 'physician_middle_name', 'third_party_equals_covered_recipient_indicator', 'country_of_travel', 'state_of_travel', 'city_of_travel', 'name_of_third_party_entity_receiving_payment_or_transfer_of_valu', 'teaching_hospital_name', 'teaching_hospital_id', 'name_of_associated_covered_drug_or_biological1', 'name_of_associated_covered_drug_or_biological2', 'ndc_of_associated_covered_drug_or_biological2', 'ndc_of_associated_covered_drug_or_biological1', 'name_of_associated_covered_drug_or_biological3', 'ndc_of_associated_covered_drug_or_biological3', 'physician_name_suffix', 'physician_license_state_code2', 'name_of_associated_covered_drug_or_biological4', 'name_of_associated_covered_drug_or_biological5', 'ndc_of_associated_covered_drug_or_biological5', 'ndc_of_associated_covered_drug_or_biological4', 'name_of_associated_covered_device_or_medical_supply2', 'name_of_associated_covered_device_or_medical_supply3', 'name_of_associated_covered_device_or_medical_supply4', 'physician_license_state_code3', 'name_of_associated_covered_device_or_medical_supply5'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'physician_first_name' => Yii::t('app', 'Physician First Name'),
            'applicable_manufacturer_or_applicable_gpo_making_payment_state' => Yii::t('app', 'Applicable Manufacturer Or Applicable Gpo Making Payment State'),
            'physician_last_name' => Yii::t('app', 'Physician Last Name'),
            'date_of_payment' => Yii::t('app', 'Date Of Payment'),
            'contextual_information' => Yii::t('app', 'Contextual Information'),
            'form_of_payment_or_transfer_of_value' => Yii::t('app', 'Form Of Payment Or Transfer Of Value'),
            'recipient_country' => Yii::t('app', 'Recipient Country'),
            'nature_of_payment_or_transfer_of_value' => Yii::t('app', 'Nature Of Payment Or Transfer Of Value'),
            'recipient_state' => Yii::t('app', 'Recipient State'),
            'delay_in_publication_of_general_payment_indicator' => Yii::t('app', 'Delay In Publication Of General Payment Indicator'),
            'recipient_primary_business_street_address_line1' => Yii::t('app', 'Recipient Primary Business Street Address Line1'),
            'general_transaction_id' => Yii::t('app', 'General Transaction ID'),
            'physician_license_state_code1' => Yii::t('app', 'Physician License State Code1'),
            'covered_recipient_type' => Yii::t('app', 'Covered Recipient Type'),
            'recipient_zip_code' => Yii::t('app', 'Recipient Zip Code'),
            'applicable_manufacturer_or_applicable_gpo_making_payment_name' => Yii::t('app', 'Applicable Manufacturer Or Applicable Gpo Making Payment Name'),
            'product_indicator' => Yii::t('app', 'Product Indicator'),
            'dispute_status_for_publication' => Yii::t('app', 'Dispute Status For Publication'),
            'recipient_city' => Yii::t('app', 'Recipient City'),
            'third_party_payment_recipient_indicator' => Yii::t('app', 'Third Party Payment Recipient Indicator'),
            'physician_specialty' => Yii::t('app', 'Physician Specialty'),
            'physician_primary_type' => Yii::t('app', 'Physician Primary Type'),
            'applicable_manufacturer_or_applicable_gpo_making_payment_id' => Yii::t('app', 'Applicable Manufacturer Or Applicable Gpo Making Payment ID'),
            'physician_profile_id' => Yii::t('app', 'Physician Profile ID'),
            'payment_publication_date' => Yii::t('app', 'Payment Publication Date'),
            'submitting_applicable_manufacturer_or_applicable_gpo_name' => Yii::t('app', 'Submitting Applicable Manufacturer Or Applicable Gpo Name'),
            'program_year' => Yii::t('app', 'Program Year'),
            'number_of_payments_included_in_total_amount' => Yii::t('app', 'Number Of Payments Included In Total Amount'),
            'physician_ownership_indicator' => Yii::t('app', 'Physician Ownership Indicator'),
            'total_amount_of_payment_usdollars' => Yii::t('app', 'Total Amount Of Payment Usdollars'),
            'applicable_manufacturer_or_applicable_gpo_making_payment_country' => Yii::t('app', 'Applicable Manufacturer Or Applicable Gpo Making Payment Country'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'recipient_primary_business_street_address_line2' => Yii::t('app', 'Recipient Primary Business Street Address Line2'),
            'name_of_associated_covered_device_or_medical_supply1' => Yii::t('app', 'Name Of Associated Covered Device Or Medical Supply1'),
            'charity_indicator' => Yii::t('app', 'Charity Indicator'),
            'physician_middle_name' => Yii::t('app', 'Physician Middle Name'),
            'third_party_equals_covered_recipient_indicator' => Yii::t('app', 'Third Party Equals Covered Recipient Indicator'),
            'country_of_travel' => Yii::t('app', 'Country Of Travel'),
            'state_of_travel' => Yii::t('app', 'State Of Travel'),
            'city_of_travel' => Yii::t('app', 'City Of Travel'),
            'name_of_third_party_entity_receiving_payment_or_transfer_of_valu' => Yii::t('app', 'Name Of Third Party Entity Receiving Payment Or Transfer Of Valu'),
            'teaching_hospital_name' => Yii::t('app', 'Teaching Hospital Name'),
            'teaching_hospital_id' => Yii::t('app', 'Teaching Hospital ID'),
            'name_of_associated_covered_drug_or_biological1' => Yii::t('app', 'Name Of Associated Covered Drug Or Biological1'),
            'name_of_associated_covered_drug_or_biological2' => Yii::t('app', 'Name Of Associated Covered Drug Or Biological2'),
            'ndc_of_associated_covered_drug_or_biological2' => Yii::t('app', 'Ndc Of Associated Covered Drug Or Biological2'),
            'ndc_of_associated_covered_drug_or_biological1' => Yii::t('app', 'Ndc Of Associated Covered Drug Or Biological1'),
            'name_of_associated_covered_drug_or_biological3' => Yii::t('app', 'Name Of Associated Covered Drug Or Biological3'),
            'ndc_of_associated_covered_drug_or_biological3' => Yii::t('app', 'Ndc Of Associated Covered Drug Or Biological3'),
            'physician_name_suffix' => Yii::t('app', 'Physician Name Suffix'),
            'physician_license_state_code2' => Yii::t('app', 'Physician License State Code2'),
            'name_of_associated_covered_drug_or_biological4' => Yii::t('app', 'Name Of Associated Covered Drug Or Biological4'),
            'name_of_associated_covered_drug_or_biological5' => Yii::t('app', 'Name Of Associated Covered Drug Or Biological5'),
            'ndc_of_associated_covered_drug_or_biological5' => Yii::t('app', 'Ndc Of Associated Covered Drug Or Biological5'),
            'ndc_of_associated_covered_drug_or_biological4' => Yii::t('app', 'Ndc Of Associated Covered Drug Or Biological4'),
            'name_of_associated_covered_device_or_medical_supply2' => Yii::t('app', 'Name Of Associated Covered Device Or Medical Supply2'),
            'name_of_associated_covered_device_or_medical_supply3' => Yii::t('app', 'Name Of Associated Covered Device Or Medical Supply3'),
            'name_of_associated_covered_device_or_medical_supply4' => Yii::t('app', 'Name Of Associated Covered Device Or Medical Supply4'),
            'physician_license_state_code3' => Yii::t('app', 'Physician License State Code3'),
            'name_of_associated_covered_device_or_medical_supply5' => Yii::t('app', 'Name Of Associated Covered Device Or Medical Supply5'),
        ];
    }

    /**
     * Gets an array of empty attributes
     * @return array
     */
    public static function getEmptyAttributes()
    {
        static $attributes;
        if (!$attributes) {
            $model = new static();
            $attributes = $model->attributes;
        }
        return $attributes;
    }
}
