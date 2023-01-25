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
**call_acl** | [**\Delta\Voip\Model\CallAcl**](CallAcl.md) |  | [optional] 
**boss_assistant** | [**\Delta\Voip\Model\User**](User.md) |  | [optional] 
**boss_assistant_white_list** | [**\Delta\Voip\Model\MatchList**](MatchList.md) |  | [optional] 
**transformation_rule_set** | [**\Delta\Voip\Model\TransformationRuleSet**](TransformationRuleSet.md) |  | [optional] 
**language** | [**\Delta\Voip\Model\Language**](Language.md) |  | [optional] 
**terminal** | [**\Delta\Voip\Model\Terminal**](Terminal.md) |  | [optional] 
**extension** | [**\Delta\Voip\Model\Extension**](Extension.md) |  | [optional] 
**timezone** | [**\Delta\Voip\Model\Timezone**](Timezone.md) |  | [optional] 
**outgoing_ddi** | [**\Delta\Voip\Model\Ddi**](Ddi.md) |  | [optional] 
**outgoing_ddi_rule** | [**\Delta\Voip\Model\OutgoingDdiRule**](OutgoingDdiRule.md) |  | [optional] 
**voicemail_locution** | [**\Delta\Voip\Model\Locution**](Locution.md) |  | [optional] 
**location** | [**\Delta\Voip\Model\Location**](Location.md) |  | [optional] 
**pickup_group_ids** | **int[]** | Pickup group ids | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


