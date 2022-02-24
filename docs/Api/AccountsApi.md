# ListcleanSwagger\Client\AccountsApi

All URIs are relative to *https://api.listclean.xyz/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountProfileGet**](AccountsApi.md#accountProfileGet) | **GET** /account/profile/ | Get account profile details
[**accountProfilePost**](AccountsApi.md#accountProfilePost) | **POST** /account/profile/ | Update account profile details


# **accountProfileGet**
> \ListcleanSwagger\Client\Model\InlineResponse2007 accountProfileGet()

Get account profile details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = ListcleanSwagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ListcleanSwagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new ListcleanSwagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->accountProfileGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountProfileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ListcleanSwagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountProfilePost**
> \ListcleanSwagger\Client\Model\ApiResponse accountProfilePost($body)

Update account profile details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = ListcleanSwagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ListcleanSwagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new ListcleanSwagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ListcleanSwagger\Client\Model\Body2(); // \ListcleanSwagger\Client\Model\Body2 | 

try {
    $result = $apiInstance->accountProfilePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountProfilePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ListcleanSwagger\Client\Model\Body2**](../Model/Body2.md)|  |

### Return type

[**\ListcleanSwagger\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

