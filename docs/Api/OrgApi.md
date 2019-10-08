# OpenAPI\Client\OrgApi

All URIs are relative to *https://atlas.forsta.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orgBulk**](OrgApi.md#orgBulk) | **POST** /org/{id}/bulk/ | 
[**orgControllerCreate**](OrgApi.md#orgControllerCreate) | **POST** /org/{id}/controller/ | 
[**orgControllerDelete**](OrgApi.md#orgControllerDelete) | **DELETE** /org/{id}/controller/ | 
[**orgControllerUpdate**](OrgApi.md#orgControllerUpdate) | **PUT** /org/{id}/controller/ | 
[**orgCreate**](OrgApi.md#orgCreate) | **POST** /org/ | 
[**orgDelete**](OrgApi.md#orgDelete) | **DELETE** /org/{id}/ | 
[**orgList**](OrgApi.md#orgList) | **GET** /org/ | 
[**orgPartialUpdate**](OrgApi.md#orgPartialUpdate) | **PATCH** /org/{id}/ | 
[**orgPreferencesRead**](OrgApi.md#orgPreferencesRead) | **GET** /org/{id}/preferences/ | 
[**orgPreferencesUpdate**](OrgApi.md#orgPreferencesUpdate) | **PUT** /org/{id}/preferences/ | 
[**orgRead**](OrgApi.md#orgRead) | **GET** /org/{id}/ | 
[**orgUpdate**](OrgApi.md#orgUpdate) | **PUT** /org/{id}/ | 



## orgBulk

> \OpenAPI\Client\Model\OrgBulk orgBulk($id, $data)



API endpoint for Org data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$data = new \OpenAPI\Client\Model\OrgBulk(); // \OpenAPI\Client\Model\OrgBulk | 

try {
    $result = $apiInstance->orgBulk($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgApi->orgBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\OrgBulk**](../Model/OrgBulk.md)|  |

### Return type

[**\OpenAPI\Client\Model\OrgBulk**](../Model/OrgBulk.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## orgControllerCreate

> \OpenAPI\Client\Model\OrgController orgControllerCreate($id, $data)



The request data should have these, or an acceptable variation of, account values 'tenant_name', Tenant/Customer name on the directory/controller 'app_key', secret key used to establish connections to controller 'type', controller type, ie: Azure, Cobot, etc. 'client_id', app/client identifier for directory/controller service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$data = new \OpenAPI\Client\Model\OrgController(); // \OpenAPI\Client\Model\OrgController | 

try {
    $result = $apiInstance->orgControllerCreate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgApi->orgControllerCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\OrgController**](../Model/OrgController.md)|  |

### Return type

[**\OpenAPI\Client\Model\OrgController**](../Model/OrgController.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## orgControllerDelete

> orgControllerDelete($id)



The request data should have these, or an acceptable variation of, account values 'tenant_name', Tenant/Customer name on the directory/controller 'app_key', secret key used to establish connections to controller 'type', controller type, ie: Azure, Cobot, etc. 'client_id', app/client identifier for directory/controller service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->orgControllerDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling OrgApi->orgControllerDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## orgControllerUpdate

> \OpenAPI\Client\Model\OrgController orgControllerUpdate($id, $data)



The request data should have these, or an acceptable variation of, account values 'tenant_name', Tenant/Customer name on the directory/controller 'app_key', secret key used to establish connections to controller 'type', controller type, ie: Azure, Cobot, etc. 'client_id', app/client identifier for directory/controller service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$data = new \OpenAPI\Client\Model\OrgController(); // \OpenAPI\Client\Model\OrgController | 

try {
    $result = $apiInstance->orgControllerUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgApi->orgControllerUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\OrgController**](../Model/OrgController.md)|  |

### Return type

[**\OpenAPI\Client\Model\OrgController**](../Model/OrgController.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## orgCreate

> \OpenAPI\Client\Model\Org orgCreate($data)



API endpoint for Org data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \OpenAPI\Client\Model\Org(); // \OpenAPI\Client\Model\Org | 

try {
    $result = $apiInstance->orgCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgApi->orgCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\OpenAPI\Client\Model\Org**](../Model/Org.md)|  |

### Return type

[**\OpenAPI\Client\Model\Org**](../Model/Org.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## orgDelete

> orgDelete($id)



API endpoint for Org data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->orgDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling OrgApi->orgDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## orgList

> \OpenAPI\Client\Model\InlineResponse2002 orgList($ordering, $search, $page, $page_size)



API endpoint for Org data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$search = 'search_example'; // string | A search term.
$page = 56; // int | A page number within the paginated result set.
$page_size = 56; // int | Number of results to return per page.

try {
    $result = $apiInstance->orgList($ordering, $search, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgApi->orgList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ordering** | **string**| Which field to use when ordering the results. | [optional]
 **search** | **string**| A search term. | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## orgPartialUpdate

> \OpenAPI\Client\Model\Org orgPartialUpdate($id, $data)



API endpoint for Org data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$data = new \OpenAPI\Client\Model\Org(); // \OpenAPI\Client\Model\Org | 

try {
    $result = $apiInstance->orgPartialUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgApi->orgPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Org**](../Model/Org.md)|  |

### Return type

[**\OpenAPI\Client\Model\Org**](../Model/Org.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## orgPreferencesRead

> \OpenAPI\Client\Model\Org orgPreferencesRead($id)



API endpoint for Org data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->orgPreferencesRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgApi->orgPreferencesRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Org**](../Model/Org.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## orgPreferencesUpdate

> \OpenAPI\Client\Model\Org orgPreferencesUpdate($id, $data)



API endpoint for Org data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$data = new \OpenAPI\Client\Model\Org(); // \OpenAPI\Client\Model\Org | 

try {
    $result = $apiInstance->orgPreferencesUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgApi->orgPreferencesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Org**](../Model/Org.md)|  |

### Return type

[**\OpenAPI\Client\Model\Org**](../Model/Org.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## orgRead

> \OpenAPI\Client\Model\Org orgRead($id)



API endpoint for Org data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->orgRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgApi->orgRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Org**](../Model/Org.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## orgUpdate

> \OpenAPI\Client\Model\Org orgUpdate($id, $data)



API endpoint for Org data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JSON Web Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrgApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$data = new \OpenAPI\Client\Model\Org(); // \OpenAPI\Client\Model\Org | 

try {
    $result = $apiInstance->orgUpdate($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgApi->orgUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **data** | [**\OpenAPI\Client\Model\Org**](../Model/Org.md)|  |

### Return type

[**\OpenAPI\Client\Model\Org**](../Model/Org.md)

### Authorization

[JSON Web Token](../../README.md#JSON Web Token)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)
