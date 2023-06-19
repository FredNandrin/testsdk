# OpenAPI\Client\StatsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiStatsForTodayCollection()**](StatsApi.md#apiStatsForTodayCollection) | **GET** /api/v2/backend/dashboard/stats-for-today | Retrieves the collection of Stats resources. |


## `apiStatsForTodayCollection()`

```php
apiStatsForTodayCollection($page): \OpenAPI\Client\Model\Stats[]
```

Retrieves the collection of Stats resources.

Retrieves the collection of Stats resources.

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


$apiInstance = new OpenAPI\Client\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiStatsForTodayCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->apiStatsForTodayCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\Stats[]**](../Model/Stats.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
