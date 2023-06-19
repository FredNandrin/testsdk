# OpenAPI\Client\UpcomingAvailabilityApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiUpcomingAvailabilitiesGetCollection()**](UpcomingAvailabilityApi.md#apiUpcomingAvailabilitiesGetCollection) | **GET** /api/v2/backend/dashboard/upcoming-availability | Retrieves the collection of UpcomingAvailability resources. |
| [**apiUpcomingAvailabilitiesPerHourCollection()**](UpcomingAvailabilityApi.md#apiUpcomingAvailabilitiesPerHourCollection) | **GET** /api/v2/backend/dashboard/upcoming-availability-per-hour | Retrieves the collection of UpcomingAvailability resources. |


## `apiUpcomingAvailabilitiesGetCollection()`

```php
apiUpcomingAvailabilitiesGetCollection($page): \OpenAPI\Client\Model\UpcomingAvailability[]
```

Retrieves the collection of UpcomingAvailability resources.

Retrieves the collection of UpcomingAvailability resources.

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


$apiInstance = new OpenAPI\Client\Api\UpcomingAvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiUpcomingAvailabilitiesGetCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpcomingAvailabilityApi->apiUpcomingAvailabilitiesGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\UpcomingAvailability[]**](../Model/UpcomingAvailability.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUpcomingAvailabilitiesPerHourCollection()`

```php
apiUpcomingAvailabilitiesPerHourCollection($page): \OpenAPI\Client\Model\UpcomingAvailability[]
```

Retrieves the collection of UpcomingAvailability resources.

Retrieves the collection of UpcomingAvailability resources.

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


$apiInstance = new OpenAPI\Client\Api\UpcomingAvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiUpcomingAvailabilitiesPerHourCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpcomingAvailabilityApi->apiUpcomingAvailabilitiesPerHourCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\UpcomingAvailability[]**](../Model/UpcomingAvailability.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
