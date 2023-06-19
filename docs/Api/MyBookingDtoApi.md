# OpenAPI\Client\MyBookingDtoApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiApiv2myprobatixbookingDtoUuidFormatDelete()**](MyBookingDtoApi.md#apiApiv2myprobatixbookingDtoUuidFormatDelete) | **DELETE** /api/v2/myprobatix/booking-dto/{uuid} | Removes the MyBookingDto resource. |
| [**apiApiv2myprobatixbookingDtoUuidFormatGet()**](MyBookingDtoApi.md#apiApiv2myprobatixbookingDtoUuidFormatGet) | **GET** /api/v2/myprobatix/booking-dto/{uuid} | Retrieves a MyBookingDto resource. |
| [**apiApiv2myprobatixbookingDtoUuidFormatPatch()**](MyBookingDtoApi.md#apiApiv2myprobatixbookingDtoUuidFormatPatch) | **PATCH** /api/v2/myprobatix/booking-dto/{uuid} | Updates the MyBookingDto resource. |


## `apiApiv2myprobatixbookingDtoUuidFormatDelete()`

```php
apiApiv2myprobatixbookingDtoUuidFormatDelete($uuid)
```

Removes the MyBookingDto resource.

Removes the MyBookingDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MyBookingDtoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | PatientEvent UUID

try {
    $apiInstance->apiApiv2myprobatixbookingDtoUuidFormatDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling MyBookingDtoApi->apiApiv2myprobatixbookingDtoUuidFormatDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| PatientEvent UUID | |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApiv2myprobatixbookingDtoUuidFormatGet()`

```php
apiApiv2myprobatixbookingDtoUuidFormatGet($uuid): \OpenAPI\Client\Model\MyBookingDtoBookingReadReactGeolocationRead
```

Retrieves a MyBookingDto resource.

Retrieves a MyBookingDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MyBookingDtoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | PatientEvent UUID

try {
    $result = $apiInstance->apiApiv2myprobatixbookingDtoUuidFormatGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyBookingDtoApi->apiApiv2myprobatixbookingDtoUuidFormatGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| PatientEvent UUID | |

### Return type

[**\OpenAPI\Client\Model\MyBookingDtoBookingReadReactGeolocationRead**](../Model/MyBookingDtoBookingReadReactGeolocationRead.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApiv2myprobatixbookingDtoUuidFormatPatch()`

```php
apiApiv2myprobatixbookingDtoUuidFormatPatch($uuid, $my_booking_dto_booking_reschedule): \OpenAPI\Client\Model\MyBookingDtoBookingReadReact
```

Updates the MyBookingDto resource.

Updates the MyBookingDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MyBookingDtoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | PatientEvent UUID
$my_booking_dto_booking_reschedule = new \OpenAPI\Client\Model\MyBookingDtoBookingReschedule(); // \OpenAPI\Client\Model\MyBookingDtoBookingReschedule | The updated MyBookingDto resource

try {
    $result = $apiInstance->apiApiv2myprobatixbookingDtoUuidFormatPatch($uuid, $my_booking_dto_booking_reschedule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyBookingDtoApi->apiApiv2myprobatixbookingDtoUuidFormatPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| PatientEvent UUID | |
| **my_booking_dto_booking_reschedule** | [**\OpenAPI\Client\Model\MyBookingDtoBookingReschedule**](../Model/MyBookingDtoBookingReschedule.md)| The updated MyBookingDto resource | |

### Return type

[**\OpenAPI\Client\Model\MyBookingDtoBookingReadReact**](../Model/MyBookingDtoBookingReadReact.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
