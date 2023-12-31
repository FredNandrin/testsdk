# # PatientEventJsonld

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**at_context** | [**\OpenAPI\Client\Model\AvailabilitiesAvailableDayDtoJsonldContext**](AvailabilitiesAvailableDayDtoJsonldContext.md) |  | [optional]
**at_id** | **string** |  | [optional] [readonly]
**at_type** | **string** |  | [optional] [readonly]
**responsible_user** | **string** |  | [optional]
**patient_index** | **int** |  | [optional]
**test_code** | **string** |  | [optional]
**test_type** | **string** |  | [optional] [default to 'vitamin_d']
**appointment_time** | **\DateTime** |  | [optional]
**comment** | **string** |  | [optional]
**doctor_comment** | **string** |  | [optional]
**loinc** | **string** |  | [optional]
**test_result_pdf** | **string** |  | [optional]
**cabin_number** | **string** |  | [optional]
**internal_code** | **string** |  | [optional]
**location** | **string** |  | [optional]
**test_password** | **string** |  | [optional]
**number_of_access_denied_events** | **int** |  | [optional]
**is_label_printed** | **bool** |  | [optional]
**reminder_sent_at** | **\DateTime** |  | [optional]
**documents** | **string[]** |  | [optional]
**available_for_free_test_confirmed_at** | **\DateTime** |  | [optional]
**test_paid_confirmed_at** | **\DateTime** |  | [optional]
**order_product** | **string** |  | [optional]
**order_uuid** | **string** |  | [optional] [readonly]
**sent_result_date** | **\DateTime** |  | [optional]
**loinc_display** | **string** |  | [optional] [readonly]
**updated_via** | **string** |  | [optional] [default to 'unknown']
**created_via** | **string** |  | [optional] [default to 'unknown']
**validated_at** | **\DateTime** |  | [optional]
**test_workflow_type** | **string** |  | [optional] [default to 'FULL']
**patient** | **string** |  | [optional]
**probe_identifiers** | **string[]** |  | [optional]
**location_name** | **string** |  | [optional]
**results** | **string[]** |  | [optional]
**decision** | **string** |  | [optional] [default to 'unknown']
**test_start_time** | **\DateTime** |  | [optional]
**test_end_time** | **\DateTime** |  | [optional]
**status** | **string** |  | [optional]
**first_name** | **string** |  |
**last_name** | **string** |  | [optional]
**company** | **string** |  | [optional]
**email** | **string** |  |
**gender** | **string** |  | [optional]
**personal_id_number** | **string** |  | [optional]
**health_insurance_policy_number** | **string** |  | [optional]
**health_insurance_company_number** | **string** |  | [optional]
**phone_number** | **string** |  | [optional]
**date_of_birth** | **\DateTime** |  | [optional]
**address_street_and_house_number** | **string** |  | [optional]
**address_zip_code** | **string** |  | [optional]
**address_city** | **string** |  | [optional]
**address_country** | **string** |  | [optional]
**my_probatix_user_uuid** | **string** |  | [optional]
**internal_patient_comment** | **string** |  | [optional]
**age** | **int** |  | [optional]
**hash_signature** | **string** | Has of relevant values to uniquely identify the Patient/Customer in order to avoid complicated indices. | [optional] [readonly]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**uuid** | **string** |  | [optional] [readonly]
**tenant** | **string** |  | [optional]
**booking_time** | **\DateTime** | required for APIPlatform deserialization, need to rename bookingTime on Frontend to remove this. | [optional]
**test_status_started_or_finished** | **bool** |  | [optional] [readonly]
**test_ended_regularly** | **bool** |  | [optional] [readonly]
**responsible_user_uuid** | **string** |  | [optional] [readonly]
**order** | **string** |  | [optional]
**test_type_vaccination** | **bool** |  | [optional] [readonly]
**test_type_vitamin_d** | **bool** |  | [optional] [readonly]
**test_type_vital_test** | **bool** |  | [optional] [readonly]
**test_type_small_blood_count** | **bool** |  | [optional] [readonly]
**test_type_basic_blood_test** | **bool** |  | [optional] [readonly]
**label_printed** | **bool** |  | [optional] [readonly]
**checked_in** | **bool** |  | [optional] [readonly]
**product** | **string** |  | [optional] [readonly]
**product_uuid** | **string** |  | [optional] [readonly]
**product_name** | **string** |  | [optional] [readonly]
**documents_sorted_by_created_at** | [**\OpenAPI\Client\Model\CollectionJsonld**](CollectionJsonld.md) |  | [optional]
**product_gross_price** | **int** |  | [optional] [readonly]
**show_payment_status** | **bool** | used in Twig | [optional] [readonly]
**test_free** | **bool** |  | [optional] [readonly]
**appointment_time_date_format** | **string** |  | [optional] [readonly]
**test_center_location_name** | **string** |  | [optional] [readonly]
**test_center_location_address** | **string** |  | [optional] [readonly]
**test_center_location_description** | **string** |  | [optional] [readonly]
**sent_result** | **bool** |  | [optional] [readonly]
**google_maps_url_for_test_location** | **string** |  | [optional] [readonly]
**certificate_downloadable** | **bool** |  | [optional] [readonly]
**product_description** | **string** |  | [optional] [readonly]
**updated_via_unknown** | **bool** |  | [optional] [readonly]
**not_updated_via_lab_api** | **bool** |  | [optional] [readonly]
**test_workflow_lab_evaluation_only** | **bool** |  | [optional] [readonly]
**test_workflow_full** | **bool** |  | [optional] [readonly]
**laboratory_trait** | **mixed** | Helper functions to easily see of a class has a certain trait. Not optimal, but ok for now. | [optional] [readonly]
**external_id_trait** | **mixed** |  | [optional] [readonly]
**weird_positive_value_trait** | **mixed** |  | [optional] [readonly]
**result_trait** | **mixed** |  | [optional] [readonly]
**trait** | **mixed** |  | [optional] [readonly]
**method** | **mixed** |  | [optional] [readonly]
**computed_hash_signature** | **string** |  | [optional] [readonly]
**probe_identifiers_ids** | **string[]** |  | [optional] [readonly]
**roles** | **string[]** |  | [optional] [readonly]
**password** | **string** |  | [optional] [readonly]
**salt** | **string** |  | [optional] [readonly]
**username** | **string** |  | [optional] [readonly]
**user_identifier** | **string** |  | [optional] [readonly]
**result_values** | [**\OpenAPI\Client\Model\ResultValueJsonld[]**](ResultValueJsonld.md) |  | [optional] [readonly]
**decision_invalid** | **bool** | Helper functions for decision. | [optional] [readonly]
**decision_ambiguous** | **bool** |  | [optional] [readonly]
**decision_positive** | **bool** |  | [optional] [readonly]
**decision_negative** | **bool** |  | [optional] [readonly]
**decision_unknown** | **bool** |  | [optional] [readonly]
**decision_insufficient** | **bool** |  | [optional] [readonly]
**decision_optimal** | **bool** |  | [optional] [readonly]
**decision_oversupply** | **bool** |  | [optional] [readonly]
**result_value** | **string** | EO Helper functions to easily see of a class has a certain trait. Not optimal, but ok for now. | [optional]
**multiple_biomarker_result** | **bool** |  | [optional] [readonly]
**decision_from_single_result_value** | [**\OpenAPI\Client\Model\ResultValueJsonld**](ResultValueJsonld.md) |  | [optional]
**status_finished** | **bool** |  | [optional] [readonly]
**status_conducted** | **bool** |  | [optional] [readonly]
**status_cancelled** | **bool** |  | [optional] [readonly]
**status_new** | **bool** |  | [optional] [readonly]
**status_draft** | **bool** |  | [optional] [readonly]
**status_started** | **bool** |  | [optional] [readonly]
**full_name** | **string** |  | [optional] [readonly]
**underage** | **bool** |  | [optional] [readonly]
**email_address_dummy** | **bool** |  | [optional] [readonly]
**full_address** | **string** |  | [optional] [readonly]
**personal_string** | **string** |  | [optional] [readonly]
**patient_address** | **string[]** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
