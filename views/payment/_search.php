<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PaymentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'general_transaction_id') ?>

    <?= $form->field($model, 'program_year') ?>

    <?= $form->field($model, 'payment_publication_date') ?>

    <?= $form->field($model, 'submitting_applicable_manufacturer_or_applicable_gpo_name') ?>

    <?php // echo $form->field($model, 'covered_recipient_type') ?>

    <?php // echo $form->field($model, 'teaching_hospital_id') ?>

    <?php // echo $form->field($model, 'teaching_hospital_name') ?>

    <?php // echo $form->field($model, 'physician_profile_id') ?>

    <?php // echo $form->field($model, 'physician_first_name') ?>

    <?php // echo $form->field($model, 'physician_middle_name') ?>

    <?php // echo $form->field($model, 'physician_last_name') ?>

    <?php // echo $form->field($model, 'physician_name_suffix') ?>

    <?php // echo $form->field($model, 'recipient_primary_business_street_address_line1') ?>

    <?php // echo $form->field($model, 'recipient_primary_business_street_address_line2') ?>

    <?php // echo $form->field($model, 'recipient_city') ?>

    <?php // echo $form->field($model, 'recipient_state') ?>

    <?php // echo $form->field($model, 'recipient_zip_code') ?>

    <?php // echo $form->field($model, 'recipient_country') ?>

    <?php // echo $form->field($model, 'recipient_province') ?>

    <?php // echo $form->field($model, 'recipient_postal_code') ?>

    <?php // echo $form->field($model, 'physician_primary_type') ?>

    <?php // echo $form->field($model, 'physician_specialty') ?>

    <?php // echo $form->field($model, 'physician_license_state_code1') ?>

    <?php // echo $form->field($model, 'physician_license_state_code2') ?>

    <?php // echo $form->field($model, 'physician_license_state_code3') ?>

    <?php // echo $form->field($model, 'physician_license_state_code4') ?>

    <?php // echo $form->field($model, 'physician_license_state_code5') ?>

    <?php // echo $form->field($model, 'product_indicator') ?>

    <?php // echo $form->field($model, 'name_of_associated_covered_drug_or_biological1') ?>

    <?php // echo $form->field($model, 'name_of_associated_covered_drug_or_biological2') ?>

    <?php // echo $form->field($model, 'name_of_associated_covered_drug_or_biological3') ?>

    <?php // echo $form->field($model, 'name_of_associated_covered_drug_or_biological4') ?>

    <?php // echo $form->field($model, 'name_of_associated_covered_drug_or_biological5') ?>

    <?php // echo $form->field($model, 'ndc_of_associated_covered_drug_or_biological1') ?>

    <?php // echo $form->field($model, 'ndc_of_associated_covered_drug_or_biological2') ?>

    <?php // echo $form->field($model, 'ndc_of_associated_covered_drug_or_biological3') ?>

    <?php // echo $form->field($model, 'ndc_of_associated_covered_drug_or_biological4') ?>

    <?php // echo $form->field($model, 'ndc_of_associated_covered_drug_or_biological5') ?>

    <?php // echo $form->field($model, 'name_of_associated_covered_device_or_medical_supply1') ?>

    <?php // echo $form->field($model, 'name_of_associated_covered_device_or_medical_supply2') ?>

    <?php // echo $form->field($model, 'name_of_associated_covered_device_or_medical_supply3') ?>

    <?php // echo $form->field($model, 'name_of_associated_covered_device_or_medical_supply4') ?>

    <?php // echo $form->field($model, 'name_of_associated_covered_device_or_medical_supply5') ?>

    <?php // echo $form->field($model, 'applicable_manufacturer_or_applicable_gpo_making_payment_name') ?>

    <?php // echo $form->field($model, 'applicable_manufacturer_or_applicable_gpo_making_payment_id') ?>

    <?php // echo $form->field($model, 'applicable_manufacturer_or_applicable_gpo_making_payment_state') ?>

    <?php // echo $form->field($model, 'applicable_manufacturer_or_applicable_gpo_making_payment_country') ?>

    <?php // echo $form->field($model, 'dispute_status_for_publication') ?>

    <?php // echo $form->field($model, 'total_amount_of_payment_usdollars') ?>

    <?php // echo $form->field($model, 'date_of_payment') ?>

    <?php // echo $form->field($model, 'number_of_payments_included_in_total_amount') ?>

    <?php // echo $form->field($model, 'form_of_payment_or_transfer_of_value') ?>

    <?php // echo $form->field($model, 'nature_of_payment_or_transfer_of_value') ?>

    <?php // echo $form->field($model, 'city_of_travel') ?>

    <?php // echo $form->field($model, 'state_of_travel') ?>

    <?php // echo $form->field($model, 'country_of_travel') ?>

    <?php // echo $form->field($model, 'physician_ownership_indicator') ?>

    <?php // echo $form->field($model, 'third_party_payment_recipient_indicator') ?>

    <?php // echo $form->field($model, 'name_of_third_party_entity_receiving_payment_or_transfer_of_valu') ?>

    <?php // echo $form->field($model, 'charity_indicator') ?>

    <?php // echo $form->field($model, 'third_party_equals_covered_recipient_indicator') ?>

    <?php // echo $form->field($model, 'contextual_information') ?>

    <?php // echo $form->field($model, 'delay_in_publication_of_general_payment_indicator') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
