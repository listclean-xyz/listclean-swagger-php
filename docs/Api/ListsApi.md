# ListcleanSwagger\Client\ListsApi

All URIs are relative to *https://api.listclean.xyz/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listsGet**](ListsApi.md#listsGet) | **GET** /lists/ | Get the all list info
[**listsListIdDelete**](ListsApi.md#listsListIdDelete) | **DELETE** /lists/{list_id} | Delete the single list
[**listsListIdGet**](ListsApi.md#listsListIdGet) | **GET** /lists/{list_id} | Get the single list info


# **listsGet**
> \ListcleanSwagger\Client\Model\InlineResponse2004 listsGet()

Get the all list info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = ListcleanSwagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ListcleanSwagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new ListcleanSwagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ListcleanSwagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsListIdDelete**
> \ListcleanSwagger\Client\Model\InlineResponse2006 listsListIdDelete($list_id)

Delete the single list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = ListcleanSwagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ListcleanSwagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new ListcleanSwagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | 

try {
    $result = $apiInstance->listsListIdDelete($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**|  |

### Return type

[**\ListcleanSwagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsListIdGet**
> \ListcleanSwagger\Client\Model\InlineResponse2005 listsListIdGet($list_id)

Get the single list info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = ListcleanSwagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ListcleanSwagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new ListcleanSwagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | 

try {
    $result = $apiInstance->listsListIdGet($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsListIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**|  |

### Return type

[**\ListcleanSwagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

