/*
 * Svix API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * API version: 1.1.1
 */

// Code generated by OpenAPI Generator (https://openapi-generator.tech); DO NOT EDIT.

package openapi

import (
	"encoding/json"
	"time"
)

// MessageAttemptOut struct for MessageAttemptOut
type MessageAttemptOut struct {
	// The ep's ID
	EndpointId string `json:"endpointId"`
	// The attempt's ID
	Id string `json:"id"`
	Msg *MessageOut `json:"msg,omitempty"`
	// The msg's ID
	MsgId string `json:"msgId"`
	Response string `json:"response"`
	ResponseStatusCode int32 `json:"responseStatusCode"`
	Status MessageStatus `json:"status"`
	Timestamp time.Time `json:"timestamp"`
	TriggerType MessageAttemptTriggerType `json:"triggerType"`
	Url string `json:"url"`
}

// NewMessageAttemptOut instantiates a new MessageAttemptOut object
// This constructor will assign default values to properties that have it defined,
// and makes sure properties required by API are set, but the set of arguments
// will change when the set of required properties is changed
func NewMessageAttemptOut(endpointId string, id string, msgId string, response string, responseStatusCode int32, status MessageStatus, timestamp time.Time, triggerType MessageAttemptTriggerType, url string) *MessageAttemptOut {
	this := MessageAttemptOut{}
	this.EndpointId = endpointId
	this.Id = id
	this.MsgId = msgId
	this.Response = response
	this.ResponseStatusCode = responseStatusCode
	this.Status = status
	this.Timestamp = timestamp
	this.TriggerType = triggerType
	this.Url = url
	return &this
}

// NewMessageAttemptOutWithDefaults instantiates a new MessageAttemptOut object
// This constructor will only assign default values to properties that have it defined,
// but it doesn't guarantee that properties required by API are set
func NewMessageAttemptOutWithDefaults() *MessageAttemptOut {
	this := MessageAttemptOut{}
	return &this
}

// GetEndpointId returns the EndpointId field value
func (o *MessageAttemptOut) GetEndpointId() string {
	if o == nil {
		var ret string
		return ret
	}

	return o.EndpointId
}

// GetEndpointIdOk returns a tuple with the EndpointId field value
// and a boolean to check if the value has been set.
func (o *MessageAttemptOut) GetEndpointIdOk() (*string, bool) {
	if o == nil  {
		return nil, false
	}
	return &o.EndpointId, true
}

// SetEndpointId sets field value
func (o *MessageAttemptOut) SetEndpointId(v string) {
	o.EndpointId = v
}

// GetId returns the Id field value
func (o *MessageAttemptOut) GetId() string {
	if o == nil {
		var ret string
		return ret
	}

	return o.Id
}

// GetIdOk returns a tuple with the Id field value
// and a boolean to check if the value has been set.
func (o *MessageAttemptOut) GetIdOk() (*string, bool) {
	if o == nil  {
		return nil, false
	}
	return &o.Id, true
}

// SetId sets field value
func (o *MessageAttemptOut) SetId(v string) {
	o.Id = v
}

// GetMsg returns the Msg field value if set, zero value otherwise.
func (o *MessageAttemptOut) GetMsg() MessageOut {
	if o == nil || o.Msg == nil {
		var ret MessageOut
		return ret
	}
	return *o.Msg
}

// GetMsgOk returns a tuple with the Msg field value if set, nil otherwise
// and a boolean to check if the value has been set.
func (o *MessageAttemptOut) GetMsgOk() (*MessageOut, bool) {
	if o == nil || o.Msg == nil {
		return nil, false
	}
	return o.Msg, true
}

// HasMsg returns a boolean if a field has been set.
func (o *MessageAttemptOut) HasMsg() bool {
	if o != nil && o.Msg != nil {
		return true
	}

	return false
}

// SetMsg gets a reference to the given MessageOut and assigns it to the Msg field.
func (o *MessageAttemptOut) SetMsg(v MessageOut) {
	o.Msg = &v
}

// GetMsgId returns the MsgId field value
func (o *MessageAttemptOut) GetMsgId() string {
	if o == nil {
		var ret string
		return ret
	}

	return o.MsgId
}

// GetMsgIdOk returns a tuple with the MsgId field value
// and a boolean to check if the value has been set.
func (o *MessageAttemptOut) GetMsgIdOk() (*string, bool) {
	if o == nil  {
		return nil, false
	}
	return &o.MsgId, true
}

// SetMsgId sets field value
func (o *MessageAttemptOut) SetMsgId(v string) {
	o.MsgId = v
}

// GetResponse returns the Response field value
func (o *MessageAttemptOut) GetResponse() string {
	if o == nil {
		var ret string
		return ret
	}

	return o.Response
}

// GetResponseOk returns a tuple with the Response field value
// and a boolean to check if the value has been set.
func (o *MessageAttemptOut) GetResponseOk() (*string, bool) {
	if o == nil  {
		return nil, false
	}
	return &o.Response, true
}

// SetResponse sets field value
func (o *MessageAttemptOut) SetResponse(v string) {
	o.Response = v
}

// GetResponseStatusCode returns the ResponseStatusCode field value
func (o *MessageAttemptOut) GetResponseStatusCode() int32 {
	if o == nil {
		var ret int32
		return ret
	}

	return o.ResponseStatusCode
}

// GetResponseStatusCodeOk returns a tuple with the ResponseStatusCode field value
// and a boolean to check if the value has been set.
func (o *MessageAttemptOut) GetResponseStatusCodeOk() (*int32, bool) {
	if o == nil  {
		return nil, false
	}
	return &o.ResponseStatusCode, true
}

// SetResponseStatusCode sets field value
func (o *MessageAttemptOut) SetResponseStatusCode(v int32) {
	o.ResponseStatusCode = v
}

// GetStatus returns the Status field value
func (o *MessageAttemptOut) GetStatus() MessageStatus {
	if o == nil {
		var ret MessageStatus
		return ret
	}

	return o.Status
}

// GetStatusOk returns a tuple with the Status field value
// and a boolean to check if the value has been set.
func (o *MessageAttemptOut) GetStatusOk() (*MessageStatus, bool) {
	if o == nil  {
		return nil, false
	}
	return &o.Status, true
}

// SetStatus sets field value
func (o *MessageAttemptOut) SetStatus(v MessageStatus) {
	o.Status = v
}

// GetTimestamp returns the Timestamp field value
func (o *MessageAttemptOut) GetTimestamp() time.Time {
	if o == nil {
		var ret time.Time
		return ret
	}

	return o.Timestamp
}

// GetTimestampOk returns a tuple with the Timestamp field value
// and a boolean to check if the value has been set.
func (o *MessageAttemptOut) GetTimestampOk() (*time.Time, bool) {
	if o == nil  {
		return nil, false
	}
	return &o.Timestamp, true
}

// SetTimestamp sets field value
func (o *MessageAttemptOut) SetTimestamp(v time.Time) {
	o.Timestamp = v
}

// GetTriggerType returns the TriggerType field value
func (o *MessageAttemptOut) GetTriggerType() MessageAttemptTriggerType {
	if o == nil {
		var ret MessageAttemptTriggerType
		return ret
	}

	return o.TriggerType
}

// GetTriggerTypeOk returns a tuple with the TriggerType field value
// and a boolean to check if the value has been set.
func (o *MessageAttemptOut) GetTriggerTypeOk() (*MessageAttemptTriggerType, bool) {
	if o == nil  {
		return nil, false
	}
	return &o.TriggerType, true
}

// SetTriggerType sets field value
func (o *MessageAttemptOut) SetTriggerType(v MessageAttemptTriggerType) {
	o.TriggerType = v
}

// GetUrl returns the Url field value
func (o *MessageAttemptOut) GetUrl() string {
	if o == nil {
		var ret string
		return ret
	}

	return o.Url
}

// GetUrlOk returns a tuple with the Url field value
// and a boolean to check if the value has been set.
func (o *MessageAttemptOut) GetUrlOk() (*string, bool) {
	if o == nil  {
		return nil, false
	}
	return &o.Url, true
}

// SetUrl sets field value
func (o *MessageAttemptOut) SetUrl(v string) {
	o.Url = v
}

func (o MessageAttemptOut) MarshalJSON() ([]byte, error) {
	toSerialize := map[string]interface{}{}
	if true {
		toSerialize["endpointId"] = o.EndpointId
	}
	if true {
		toSerialize["id"] = o.Id
	}
	if o.Msg != nil {
		toSerialize["msg"] = o.Msg
	}
	if true {
		toSerialize["msgId"] = o.MsgId
	}
	if true {
		toSerialize["response"] = o.Response
	}
	if true {
		toSerialize["responseStatusCode"] = o.ResponseStatusCode
	}
	if true {
		toSerialize["status"] = o.Status
	}
	if true {
		toSerialize["timestamp"] = o.Timestamp
	}
	if true {
		toSerialize["triggerType"] = o.TriggerType
	}
	if true {
		toSerialize["url"] = o.Url
	}
	return json.Marshal(toSerialize)
}

type NullableMessageAttemptOut struct {
	value *MessageAttemptOut
	isSet bool
}

func (v NullableMessageAttemptOut) Get() *MessageAttemptOut {
	return v.value
}

func (v *NullableMessageAttemptOut) Set(val *MessageAttemptOut) {
	v.value = val
	v.isSet = true
}

func (v NullableMessageAttemptOut) IsSet() bool {
	return v.isSet
}

func (v *NullableMessageAttemptOut) Unset() {
	v.value = nil
	v.isSet = false
}

func NewNullableMessageAttemptOut(val *MessageAttemptOut) *NullableMessageAttemptOut {
	return &NullableMessageAttemptOut{value: val, isSet: true}
}

func (v NullableMessageAttemptOut) MarshalJSON() ([]byte, error) {
	return json.Marshal(v.value)
}

func (v *NullableMessageAttemptOut) UnmarshalJSON(src []byte) error {
	v.isSet = true
	return json.Unmarshal(src, &v.value)
}


