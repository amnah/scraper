<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Payment */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Payments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'general_transaction_id',
            'program_year',
            'payment_publication_date',
            'submitting_applicable_manufacturer_or_applicable_gpo_name',
            'covered_recipient_type',
            'teaching_hospital_id',
            'teaching_hospital_name',
            'physician_profile_id',
            'physician_first_name',
            'physician_middle_name',
            'physician_last_name',
            'physician_name_suffix',
            'recipient_primary_business_street_address_line1',
            'recipient_primary_business_street_address_line2',
            'recipient_city',
            'recipient_state',
            'recipient_zip_code',
            'recipient_country',
            'recipient_province',
            'recipient_postal_code',
            'physician_primary_type',
            'physician_specialty',
            'physician_license_state_code1',
            'physician_license_state_code2',
            'physician_license_state_code3',
            'physician_license_state_code4',
            'physician_license_state_code5',
            'product_indicator',
            'name_of_associated_covered_drug_or_biological1',
            'name_of_associated_covered_drug_or_biological2',
            'name_of_associated_covered_drug_or_biological3',
            'name_of_associated_covered_drug_or_biological4',
            'name_of_associated_covered_drug_or_biological5',
            'ndc_of_associated_covered_drug_or_biological1',
            'ndc_of_associated_covered_drug_or_biological2',
            'ndc_of_associated_covered_drug_or_biological3',
            'ndc_of_associated_covered_drug_or_biological4',
            'ndc_of_associated_covered_drug_or_biological5',
            'name_of_associated_covered_device_or_medical_supply1',
            'name_of_associated_covered_device_or_medical_supply2',
            'name_of_associated_covered_device_or_medical_supply3',
            'name_of_associated_covered_device_or_medical_supply4',
            'name_of_associated_covered_device_or_medical_supply5',
            'applicable_manufacturer_or_applicable_gpo_making_payment_name',
            'applicable_manufacturer_or_applicable_gpo_making_payment_id',
            'applicable_manufacturer_or_applicable_gpo_making_payment_state',
            'applicable_manufacturer_or_applicable_gpo_making_payment_country',
            'dispute_status_for_publication',
            'total_amount_of_payment_usdollars',
            'date_of_payment',
            'number_of_payments_included_in_total_amount',
            'form_of_payment_or_transfer_of_value',
            'nature_of_payment_or_transfer_of_value',
            'city_of_travel',
            'state_of_travel',
            'country_of_travel',
            'physician_ownership_indicator',
            'third_party_payment_recipient_indicator',
            'name_of_third_party_entity_receiving_payment_or_transfer_of_valu',
            'charity_indicator',
            'third_party_equals_covered_recipient_indicator',
            'contextual_information',
            'delay_in_publication_of_general_payment_indicator',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
