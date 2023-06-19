# OpenAPI\Client\PatientEventUpdateDtoApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPatientEventUpdateDtosPostCollection()**](PatientEventUpdateDtoApi.md#apiPatientEventUpdateDtosPostCollection) | **POST** /api/v2/lab/patient-event/{uuid} | Creates a PatientEventUpdateDto resource. |


## `apiPatientEventUpdateDtosPostCollection()`

```php
apiPatientEventUpdateDtosPostCollection($uuid, $patient_event_update_dto): \OpenAPI\Client\Model\PatientEventUpdateDto
```

Creates a PatientEventUpdateDto resource.

Creates a PatientEventUpdateDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

// Configure Bearer (JWT) authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PatientEventUpdateDtoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | PatientEventUpdateDto identifier
$patient_event_update_dto = new \OpenAPI\Client\Model\PatientEventUpdateDto(); // \OpenAPI\Client\Model\PatientEventUpdateDto | The new PatientEventUpdateDto resource

try {
    $result = $apiInstance->apiPatientEventUpdateDtosPostCollection($uuid, $patient_event_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientEventUpdateDtoApi->apiPatientEventUpdateDtosPostCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| PatientEventUpdateDto identifier | |
| **patient_event_update_dto** | [**\OpenAPI\Client\Model\PatientEventUpdateDto**](../Model/PatientEventUpdateDto.md)| The new PatientEventUpdateDto resource | |

### Return type

[**\OpenAPI\Client\Model\PatientEventUpdateDto**](../Model/PatientEventUpdateDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
