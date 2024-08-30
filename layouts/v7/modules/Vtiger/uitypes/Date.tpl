{*<!--
/*********************************************************************************
  ** The contents of this file are subject to the vtiger CRM Public License Version 1.0
   * ("License"); You may not use this file except in compliance with the License
   * The Original Code is: vtiger CRM Open Source
   * The Initial Developer of the Original Code is vtiger.
   * Portions created by vtiger are Copyright (C) vtiger.
   * All Rights Reserved.
  *
 ********************************************************************************/
-->*}
{strip}
{assign var="FIELD_INFO" value=$FIELD_MODEL->getFieldInfo()}

{if (!$FIELD_NAME)}
  {assign var="FIELD_NAME" value=$FIELD_MODEL->getFieldName()}
{/if}
<div class="input-group inputElement" style="margin-bottom: 3px">
<input id="{$MODULE}_editView_fieldName_{$FIELD_NAME}" type="text" class="persian-date form-control " data-fieldname="{$FIELD_NAME}"   name="{$FIELD_NAME}"
    value="{$FIELD_MODEL->getEditViewDisplayValue($FIELD_MODEL->get('fieldvalue'))}"
    {if $MODE eq 'edit' && $FIELD_NAME eq 'due_date'} data-user-changed-time="true" {/if}
/>
<span class="input-group-addon"><i class="fa fa-calendar "></i></span>
</div>
{/strip}
