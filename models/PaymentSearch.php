<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Payment;

/**
 * PaymentSearch represents the model behind the search form about `app\models\Payment`.
 */
class PaymentSearch extends Payment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at'], 'integer'],
            [['general_transaction_id', 'program_year', 'payment_publication_date', 'submitting_applicable_manufacturer_or_applicable_gpo_name', 'covered_recipient_type', 'teaching_hospital_id', 'teaching_hospital_name', 'physician_profile_id', 'physician_first_name', 'physician_middle_name', 'physician_last_name', 'physician_name_suffix', 'recipient_primary_business_street_address_line1', 'recipient_primary_business_street_address_line2', 'recipient_city', 'recipient_state', 'recipient_zip_code', 'recipient_country', 'recipient_province', 'recipient_postal_code', 'physician_primary_type', 'physician_specialty', 'physician_license_state_code1', 'physician_license_state_code2', 'physician_license_state_code3', 'physician_license_state_code4', 'physician_license_state_code5', 'product_indicator', 'name_of_associated_covered_drug_or_biological1', 'name_of_associated_covered_drug_or_biological2', 'name_of_associated_covered_drug_or_biological3', 'name_of_associated_covered_drug_or_biological4', 'name_of_associated_covered_drug_or_biological5', 'ndc_of_associated_covered_drug_or_biological1', 'ndc_of_associated_covered_drug_or_biological2', 'ndc_of_associated_covered_drug_or_biological3', 'ndc_of_associated_covered_drug_or_biological4', 'ndc_of_associated_covered_drug_or_biological5', 'name_of_associated_covered_device_or_medical_supply1', 'name_of_associated_covered_device_or_medical_supply2', 'name_of_associated_covered_device_or_medical_supply3', 'name_of_associated_covered_device_or_medical_supply4', 'name_of_associated_covered_device_or_medical_supply5', 'applicable_manufacturer_or_applicable_gpo_making_payment_name', 'applicable_manufacturer_or_applicable_gpo_making_payment_id', 'applicable_manufacturer_or_applicable_gpo_making_payment_state', 'applicable_manufacturer_or_applicable_gpo_making_payment_country', 'dispute_status_for_publication', 'total_amount_of_payment_usdollars', 'date_of_payment', 'number_of_payments_included_in_total_amount', 'form_of_payment_or_transfer_of_value', 'nature_of_payment_or_transfer_of_value', 'city_of_travel', 'state_of_travel', 'country_of_travel', 'physician_ownership_indicator', 'third_party_payment_recipient_indicator', 'name_of_third_party_entity_receiving_payment_or_transfer_of_valu', 'charity_indicator', 'third_party_equals_covered_recipient_indicator', 'contextual_information', 'delay_in_publication_of_general_payment_indicator'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Payment::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 100,
            ],
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'general_transaction_id', $this->general_transaction_id])
            ->andFilterWhere(['like', 'program_year', $this->program_year])
            ->andFilterWhere(['like', 'payment_publication_date', $this->payment_publication_date])
            ->andFilterWhere(['like', 'submitting_applicable_manufacturer_or_applicable_gpo_name', $this->submitting_applicable_manufacturer_or_applicable_gpo_name])
            ->andFilterWhere(['like', 'covered_recipient_type', $this->covered_recipient_type])
            ->andFilterWhere(['like', 'teaching_hospital_id', $this->teaching_hospital_id])
            ->andFilterWhere(['like', 'teaching_hospital_name', $this->teaching_hospital_name])
            ->andFilterWhere(['like', 'physician_profile_id', $this->physician_profile_id])
            ->andFilterWhere(['like', 'physician_first_name', $this->physician_first_name])
            ->andFilterWhere(['like', 'physician_middle_name', $this->physician_middle_name])
            ->andFilterWhere(['like', 'physician_last_name', $this->physician_last_name])
            ->andFilterWhere(['like', 'physician_name_suffix', $this->physician_name_suffix])
            ->andFilterWhere(['like', 'recipient_primary_business_street_address_line1', $this->recipient_primary_business_street_address_line1])
            ->andFilterWhere(['like', 'recipient_primary_business_street_address_line2', $this->recipient_primary_business_street_address_line2])
            ->andFilterWhere(['like', 'recipient_city', $this->recipient_city])
            ->andFilterWhere(['like', 'recipient_state', $this->recipient_state])
            ->andFilterWhere(['like', 'recipient_zip_code', $this->recipient_zip_code])
            ->andFilterWhere(['like', 'recipient_country', $this->recipient_country])
            ->andFilterWhere(['like', 'recipient_province', $this->recipient_province])
            ->andFilterWhere(['like', 'recipient_postal_code', $this->recipient_postal_code])
            ->andFilterWhere(['like', 'physician_primary_type', $this->physician_primary_type])
            ->andFilterWhere(['like', 'physician_specialty', $this->physician_specialty])
            ->andFilterWhere(['like', 'physician_license_state_code1', $this->physician_license_state_code1])
            ->andFilterWhere(['like', 'physician_license_state_code2', $this->physician_license_state_code2])
            ->andFilterWhere(['like', 'physician_license_state_code3', $this->physician_license_state_code3])
            ->andFilterWhere(['like', 'physician_license_state_code4', $this->physician_license_state_code4])
            ->andFilterWhere(['like', 'physician_license_state_code5', $this->physician_license_state_code5])
            ->andFilterWhere(['like', 'product_indicator', $this->product_indicator])
            ->andFilterWhere(['like', 'name_of_associated_covered_drug_or_biological1', $this->name_of_associated_covered_drug_or_biological1])
            ->andFilterWhere(['like', 'name_of_associated_covered_drug_or_biological2', $this->name_of_associated_covered_drug_or_biological2])
            ->andFilterWhere(['like', 'name_of_associated_covered_drug_or_biological3', $this->name_of_associated_covered_drug_or_biological3])
            ->andFilterWhere(['like', 'name_of_associated_covered_drug_or_biological4', $this->name_of_associated_covered_drug_or_biological4])
            ->andFilterWhere(['like', 'name_of_associated_covered_drug_or_biological5', $this->name_of_associated_covered_drug_or_biological5])
            ->andFilterWhere(['like', 'ndc_of_associated_covered_drug_or_biological1', $this->ndc_of_associated_covered_drug_or_biological1])
            ->andFilterWhere(['like', 'ndc_of_associated_covered_drug_or_biological2', $this->ndc_of_associated_covered_drug_or_biological2])
            ->andFilterWhere(['like', 'ndc_of_associated_covered_drug_or_biological3', $this->ndc_of_associated_covered_drug_or_biological3])
            ->andFilterWhere(['like', 'ndc_of_associated_covered_drug_or_biological4', $this->ndc_of_associated_covered_drug_or_biological4])
            ->andFilterWhere(['like', 'ndc_of_associated_covered_drug_or_biological5', $this->ndc_of_associated_covered_drug_or_biological5])
            ->andFilterWhere(['like', 'name_of_associated_covered_device_or_medical_supply1', $this->name_of_associated_covered_device_or_medical_supply1])
            ->andFilterWhere(['like', 'name_of_associated_covered_device_or_medical_supply2', $this->name_of_associated_covered_device_or_medical_supply2])
            ->andFilterWhere(['like', 'name_of_associated_covered_device_or_medical_supply3', $this->name_of_associated_covered_device_or_medical_supply3])
            ->andFilterWhere(['like', 'name_of_associated_covered_device_or_medical_supply4', $this->name_of_associated_covered_device_or_medical_supply4])
            ->andFilterWhere(['like', 'name_of_associated_covered_device_or_medical_supply5', $this->name_of_associated_covered_device_or_medical_supply5])
            ->andFilterWhere(['like', 'applicable_manufacturer_or_applicable_gpo_making_payment_name', $this->applicable_manufacturer_or_applicable_gpo_making_payment_name])
            ->andFilterWhere(['like', 'applicable_manufacturer_or_applicable_gpo_making_payment_id', $this->applicable_manufacturer_or_applicable_gpo_making_payment_id])
            ->andFilterWhere(['like', 'applicable_manufacturer_or_applicable_gpo_making_payment_state', $this->applicable_manufacturer_or_applicable_gpo_making_payment_state])
            ->andFilterWhere(['like', 'applicable_manufacturer_or_applicable_gpo_making_payment_country', $this->applicable_manufacturer_or_applicable_gpo_making_payment_country])
            ->andFilterWhere(['like', 'dispute_status_for_publication', $this->dispute_status_for_publication])
            ->andFilterWhere(['like', 'total_amount_of_payment_usdollars', $this->total_amount_of_payment_usdollars])
            ->andFilterWhere(['like', 'date_of_payment', $this->date_of_payment])
            ->andFilterWhere(['like', 'number_of_payments_included_in_total_amount', $this->number_of_payments_included_in_total_amount])
            ->andFilterWhere(['like', 'form_of_payment_or_transfer_of_value', $this->form_of_payment_or_transfer_of_value])
            ->andFilterWhere(['like', 'nature_of_payment_or_transfer_of_value', $this->nature_of_payment_or_transfer_of_value])
            ->andFilterWhere(['like', 'city_of_travel', $this->city_of_travel])
            ->andFilterWhere(['like', 'state_of_travel', $this->state_of_travel])
            ->andFilterWhere(['like', 'country_of_travel', $this->country_of_travel])
            ->andFilterWhere(['like', 'physician_ownership_indicator', $this->physician_ownership_indicator])
            ->andFilterWhere(['like', 'third_party_payment_recipient_indicator', $this->third_party_payment_recipient_indicator])
            ->andFilterWhere(['like', 'name_of_third_party_entity_receiving_payment_or_transfer_of_valu', $this->name_of_third_party_entity_receiving_payment_or_transfer_of_valu])
            ->andFilterWhere(['like', 'charity_indicator', $this->charity_indicator])
            ->andFilterWhere(['like', 'third_party_equals_covered_recipient_indicator', $this->third_party_equals_covered_recipient_indicator])
            ->andFilterWhere(['like', 'contextual_information', $this->contextual_information])
            ->andFilterWhere(['like', 'delay_in_publication_of_general_payment_indicator', $this->delay_in_publication_of_general_payment_indicator]);

        return $dataProvider;
    }
}
