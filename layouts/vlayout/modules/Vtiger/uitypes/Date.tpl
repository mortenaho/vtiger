{*<!--
/*********************************************************************************
  ** The contents of this file are subject to the vtiger CRM Public License Version 1.0
   * ("License"); You may not use this file except in compliance with the License
   * The Original Code is:  vtiger CRM Open Source
   * The Initial Developer of the Original Code is vtiger.
   * Portions created by vtiger are Copyright (C) vtiger.
   * All Rights Reserved.
  *
 ********************************************************************************/
-->*}
{strip}
{assign var="FIELD_INFO" value=Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($FIELD_MODEL->getFieldInfo()))}
{assign var="SPECIAL_VALIDATOR" value=$FIELD_MODEL->getValidator()}
{assign var="dateFormat" value=$USER_MODEL->get('date_format')}
<div class="input-append row-fluid">
	<div class="span12 row-fluid date">
		{assign var=FIELD_NAME value=$FIELD_MODEL->get('name')}
		<input id="{$MODULE}_editView_fieldName_{$FIELD_NAME}" type="text" class="persian-date" name="{$FIELD_MODEL->getFieldName()}"
			type="text" value="{$FIELD_MODEL->getEditViewDisplayValue($FIELD_MODEL->get('fieldvalue'))}"      data-fieldinfo='{$FIELD_INFO}'
             {if $MODE eq 'edit' && $FIELD_NAME eq 'due_date'} data-user-changed-time="true" {/if} />
		<span class="add-on"><i class="icon-calendar"></i></span>
	</div>
</div>
{/strip}