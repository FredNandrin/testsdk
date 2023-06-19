# # Customer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** |  | [optional]
**last_name** | **string** |  | [optional]
**email** | **string** |  | [optional]
**company** | **string** |  | [optional]
**billing_address_street** | **string** |  | [optional]
**billing_address_zip_code** | **string** |  | [optional]
**billing_address_city** | **string** |  | [optional]
**billing_address_country** | **string** |  | [optional]
**orders** | **string[]** |  | [optional] [readonly]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**uuid** | **string** |  | [optional] [readonly]
**hash_signature** | **string** | Has of relevant values to uniquely identify the Patient/Customer in order to avoid complicated indices. | [optional] [readonly]
**tenant** | **string** |  | [optional]
**full_name** | **string** |  | [optional] [readonly]
**billing_address** | **string** |  | [optional] [readonly]
**computed_hash_signature** | **string** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
