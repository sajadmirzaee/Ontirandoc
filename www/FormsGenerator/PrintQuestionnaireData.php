<?php
include("header.inc.php");
include("classes/FormsStruct.class.php");
include("classes/FormFields.class.php");
include("classes/FormsFlowSteps.class.php");
include("classes/FieldsItemList.class.php");
include("classes/FormUtils.class.php");
include("classes/SecurityManager.class.php");
require_once('classes/FormsFlowStepRelations.class.php');
include("classes/FormsDetailTables.class.php");
//require_once('../organization/classes/ChartServices.class.php');
HTMLBegin();
?>
<SCRIPT LANGUAGE="JavaScript1.1" SRC="FormCheck.js"></SCRIPT>

<br>
<p align=center><span id=MessageSpan name=MessageSpan></span></p>
<br>
<?
	$CurForm = new be_FormsStruct();
	$CurForm->LoadDataFromDatabase($_REQUEST["SelectedFormStructID"]);
	echo $CurForm->CreatePrintableVersion(-1, $_SESSION["PersonID"], $_REQUEST["RelatedRecordID"]);
?>
</html>