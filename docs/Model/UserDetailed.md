# UserDetailed

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | 
**lastname** | **string** |  | 
**email** | **string** |  | [optional] 
**pass** | **string** |  | [optional] 
**do_not_disturb** | **bool** |  | [default to false]
**is_boss** | **bool** |  | [default to false]
**active** | **bool** |  | [default to false]
**max_calls** | **int** |  | 
**external_ip_calls** | **string** |  | [default to '0']
**reject_call_method** | **string** |  | [default to 'rfc']
**voicemail_enabled** | **bool** |  | [default to false]
**voicemail_send_mail** | **bool** |  | [default to false]
**voicemail_attach_sound** | **bool** |  | [default to false]
**multi_contact** | **bool** |  | [default to false]
**gs_qr_code** | **bool** |  | [default to false]
**id** | **int** |  | [optional] 
**call_acl** | [**\Swagger\Client\Model\CallAcl**](CallAcl.md) |  | [optional] 
**boss_assistant** | [**\Swagger\Client\Model\User**](User.md) |  | [optional] 
**boss_assistant_white_list** | [**\Swagger\Client\Model\MatchList**](MatchList.md) |  | [optional] 
**transformation_rule_set** | [**\Swagger\Client\Model\TransformationRuleSet**](TransformationRuleSet.md) |  | [optional] 
**language** | [**\Swagger\Client\Model\Language**](Language.md) |  | [optional] 
**terminal** | [**\Swagger\Client\Model\Terminal**](Terminal.md) |  | [optional] 
**extension** | [**\Swagger\Client\Model\Extension**](Extension.md) |  | [optional] 
**timezone** | [**\Swagger\Client\Model\Timezone**](Timezone.md) |  | [optional] 
**outgoing_ddi** | [**\Swagger\Client\Model\Ddi**](Ddi.md) |  | [optional] 
**outgoing_ddi_rule** | [**\Swagger\Client\Model\OutgoingDdiRule**](OutgoingDdiRule.md) |  | [optional] 
**voicemail_locution** | [**\Swagger\Client\Model\Locution**](Locution.md) |  | [optional] 
**location** | [**\Swagger\Client\Model\Location**](Location.md) |  | [optional] 
**pickup_group_ids** | **int[]** | Pickup group ids | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


