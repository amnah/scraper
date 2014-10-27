<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Payment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'general_transaction_id')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'program_year')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'payment_publication_date')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'submitting_applicable_manufacturer_or_applicable_gpo_name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'covered_recipient_type')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'teaching_hospital_id')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'teaching_hospital_name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'physician_profile_id')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'physician_first_name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'physician_middle_name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'physician_last_name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'physician_name_suffix')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'recipient_primary_business_street_address_line1')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'recipient_primary_business_street_address_line2')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'recipient_city')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'recipient_state')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'recipient_zip_code')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'recipient_country')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'physician_primary_type')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'physician_specialty')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'physician_license_state_code1')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'physician_license_state_code2')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'physician_license_state_code3')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'product_indicator')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'name_of_associated_covered_drug_or_biological1')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'name_of_associated_covered_drug_or_biological2')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'name_of_associated_covered_drug_or_biological3')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'name_of_associated_covered_drug_or_biological4')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'name_of_associated_covered_drug_or_biological5')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'ndc_of_associated_covered_drug_or_biological1')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'ndc_of_associated_covered_drug_or_biological2')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'ndc_of_associated_covered_drug_or_biological3')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'ndc_of_associated_covered_drug_or_biological4')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'ndc_of_associated_covered_drug_or_biological5')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'name_of_associated_covered_device_or_medical_supply1')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'name_of_associated_covered_device_or_medical_supply2')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'name_of_associated_covered_device_or_medical_supply3')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'name_of_associated_covered_device_or_medical_supply4')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'name_of_associated_covered_device_or_medical_supply5')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'applicable_manufacturer_or_applicable_gpo_making_payment_name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'applicable_manufacturer_or_applicable_gpo_making_payment_id')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'applicable_manufacturer_or_applicable_gpo_making_payment_state')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'applicable_manufacturer_or_applicable_gpo_making_payment_country')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'dispute_status_for_publication')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'total_amount_of_payment_usdollars')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'date_of_payment')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'number_of_payments_included_in_total_amount')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'form_of_payment_or_transfer_of_value')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'nature_of_payment_or_transfer_of_value')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'city_of_travel')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'state_of_travel')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'country_of_travel')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'physician_ownership_indicator')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'third_party_payment_recipient_indicator')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'name_of_third_party_entity_receiving_payment_or_transfer_of_valu')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'charity_indicator')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'third_party_equals_covered_recipient_indicator')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'contextual_information')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'delay_in_publication_of_general_payment_indicator')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
