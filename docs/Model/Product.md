# # Product

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**test_type** | **string** |  | [optional]
**default** | **bool** |  | [optional]
**test_duration_in_minutes** | **int** |  | [optional] [default to 15]
**description** | **string** |  | [optional]
**single_gross_amount** | **int** |  | [optional] [default to 1000]
**automatic_booking_confirmation** | **bool** |  | [optional] [default to true]
**automatic_results_notification** | **bool** |  | [optional] [default to true]
**url_key** | **string** |  | [optional]
**tax_percentage** | **int** |  | [optional] [default to 1900]
**loinc** | **string** |  | [optional]
**loinc_display** | **string** |  | [optional]
**visibility** | **string** |  | [optional] [default to 'PUBLIC']
**max_bookings_per_order** | **int** |  | [optional]
**minimum_patient_age** | **int** |  | [optional]
**show_comment_field_for_customers** | **bool** |  | [optional]
**is_personal_id_required** | **bool** |  | [optional]
**test_workflow_type** | **string** |  | [optional] [default to 'FULL']
**eligibility_reasons** | **string[]** |  | [optional]
**internal_code_required** | **bool** |  | [optional]
**health_insurance_policy_number_required** | **bool** |  | [optional]
**health_insurance_company_number_required** | **bool** |  | [optional]
**_locale** | **mixed** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**uuid** | **string** |  | [optional] [readonly]
**tenant** | **string** |  | [optional]
**enriched_description** | **string** |  | [optional] [readonly]
**vat_per_unit** | **int** |  | [optional] [readonly]
**single_net_amount** | **int** |  | [optional] [readonly]
**active** | **bool** |  | [optional] [readonly]
**visibility_public** | **bool** |  | [optional] [readonly]
**visibility_private** | **bool** |  | [optional] [readonly]
**visibility_archived** | **bool** |  | [optional] [readonly]
**personal_id_required** | **bool** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
