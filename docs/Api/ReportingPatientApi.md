# OpenAPI\Client\ReportingPatientApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiReportingPatientsGetCollection()**](ReportingPatientApi.md#apiReportingPatientsGetCollection) | **GET** /api/v2/reporting/patients | Retrieves the collection of ReportingPatient resources. |
| [**apiReportingPatientsGetDeprecatedCollection()**](ReportingPatientApi.md#apiReportingPatientsGetDeprecatedCollection) | **GET** /api/v2/patients | Retrieves the collection of ReportingPatient resources. |


## `apiReportingPatientsGetCollection()`

```php
apiReportingPatientsGetCollection($page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after): \OpenAPI\Client\Model\ReportingPatientPatientRead[]
```

Retrieves the collection of ReportingPatient resources.

Retrieves the collection of ReportingPatient resources.

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


$apiInstance = new OpenAPI\Client\Api\ReportingPatientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$updated_at_before = 'updated_at_before_example'; // string | 
$updated_at_strictly_before = 'updated_at_strictly_before_example'; // string | 
$updated_at_after = 'updated_at_after_example'; // string | 
$updated_at_strictly_after = 'updated_at_strictly_after_example'; // string | 

try {
    $result = $apiInstance->apiReportingPatientsGetCollection($page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingPatientApi->apiReportingPatientsGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **updated_at_before** | **string**|  | [optional] |
| **updated_at_strictly_before** | **string**|  | [optional] |
| **updated_at_after** | **string**|  | [optional] |
| **updated_at_strictly_after** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReportingPatientPatientRead[]**](../Model/ReportingPatientPatientRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiReportingPatientsGetDeprecatedCollection()`

```php
apiReportingPatientsGetDeprecatedCollection($page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after): \OpenAPI\Client\Model\ReportingPatientPatientRead[]
```

Retrieves the collection of ReportingPatient resources.

moved to /api/v2/reporting/patients

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


$apiInstance = new OpenAPI\Client\Api\ReportingPatientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$updated_at_before = 'updated_at_before_example'; // string | 
$updated_at_strictly_before = 'updated_at_strictly_before_example'; // string | 
$updated_at_after = 'updated_at_after_example'; // string | 
$updated_at_strictly_after = 'updated_at_strictly_after_example'; // string | 

try {
    $result = $apiInstance->apiReportingPatientsGetDeprecatedCollection($page, $updated_at_before, $updated_at_strictly_before, $updated_at_after, $updated_at_strictly_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingPatientApi->apiReportingPatientsGetDeprecatedCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **updated_at_before** | **string**|  | [optional] |
| **updated_at_strictly_before** | **string**|  | [optional] |
| **updated_at_after** | **string**|  | [optional] |
| **updated_at_strictly_after** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReportingPatientPatientRead[]**](../Model/ReportingPatientPatientRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
