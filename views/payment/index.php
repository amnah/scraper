<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PaymentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Payments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if ($flash = Yii::$app->session->getFlash("Import-success")): ?>

        <div class="alert alert-success">
            <p><?= $flash ?></p>
        </div>

    <?php endif; ?>

    <p>
        <?= Html::a(Yii::t('app', 'Import next rows (4000)'), ['/scrape/import-next'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'pjax' => true,
        'bordered' => true,
        'striped' => true,
        'condensed' => true,
        'responsive' => true,
        'hover' => true,
        'panel' => [
            'heading'=>'<h3 class="panel-title">Payments</h3>',
            'showFooter' => true,

        ],


        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'general_transaction_id',
            //'program_year',
            //'payment_publication_date',
            [
                'attribute' => 'submitting_applicable_manufacturer_or_applicable_gpo_name',
                'class' => 'kartik\grid\DataColumn',
                'filterType' => GridView::FILTER_TYPEAHEAD,
                'filterWidgetOptions' => [
                    'dataset' => [
                        [
                            'remote'=> Url::to(['payment/country-list']) . '?q=%QUERY',
                            'limit' => 10
                        ],
                    ],
                    'pluginOptions' => [
                        'minLength' => 3
                    ]
                ]
            ],
            // 'covered_recipient_type',
            // 'teaching_hospital_id',
            'teaching_hospital_name',
            // 'physician_profile_id',
            'physician_first_name',
            //'physician_middle_name',
            'physician_last_name',
            // 'physician_name_suffix',
            // 'recipient_primary_business_street_address_line1',
            // 'recipient_primary_business_street_address_line2',
            // 'recipient_city',
            // 'recipient_state',
            // 'recipient_zip_code',
            // 'recipient_country',
            // 'recipient_province',
            // 'recipient_postal_code',
            // 'physician_primary_type',
            // 'physician_specialty',
            // 'physician_license_state_code1',
            // 'physician_license_state_code2',
            // 'physician_license_state_code3',
            // 'physician_license_state_code4',
            // 'physician_license_state_code5',
            // 'product_indicator',
            // 'name_of_associated_covered_drug_or_biological1',
            // 'name_of_associated_covered_drug_or_biological2',
            // 'name_of_associated_covered_drug_or_biological3',
            // 'name_of_associated_covered_drug_or_biological4',
            // 'name_of_associated_covered_drug_or_biological5',
            // 'ndc_of_associated_covered_drug_or_biological1',
            // 'ndc_of_associated_covered_drug_or_biological2',
            // 'ndc_of_associated_covered_drug_or_biological3',
            // 'ndc_of_associated_covered_drug_or_biological4',
            // 'ndc_of_associated_covered_drug_or_biological5',
            // 'name_of_associated_covered_device_or_medical_supply1',
            // 'name_of_associated_covered_device_or_medical_supply2',
            // 'name_of_associated_covered_device_or_medical_supply3',
            // 'name_of_associated_covered_device_or_medical_supply4',
            // 'name_of_associated_covered_device_or_medical_supply5',
            // 'applicable_manufacturer_or_applicable_gpo_making_payment_name',
            // 'applicable_manufacturer_or_applicable_gpo_making_payment_id',
            // 'applicable_manufacturer_or_applicable_gpo_making_payment_state',
            // 'applicable_manufacturer_or_applicable_gpo_making_payment_country',
            // 'dispute_status_for_publication',
            // 'total_amount_of_payment_usdollars',
            // 'date_of_payment',
            // 'number_of_payments_included_in_total_amount',
            // 'form_of_payment_or_transfer_of_value',
            // 'nature_of_payment_or_transfer_of_value',
            // 'city_of_travel',
            // 'state_of_travel',
            // 'country_of_travel',
            // 'physician_ownership_indicator',
            // 'third_party_payment_recipient_indicator',
            // 'name_of_third_party_entity_receiving_payment_or_transfer_of_valu',
            // 'charity_indicator',
            // 'third_party_equals_covered_recipient_indicator',
            // 'contextual_information',
            // 'delay_in_publication_of_general_payment_indicator',
            // 'created_at',
            // 'updated_at',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
