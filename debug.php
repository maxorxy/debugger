<?php
	require_once 'Debugger.interface.php';
	require_once 'DebuggerComposite.class.php';
	require_once 'DebuggerEcho.class.php';
	require_once 'DebuggerLog.class.php';
	
	/* Two Types Of Messages, So Two Instances Of DebuggerComposite */
	$debuggerInfo = new DebuggerComposite();
	$debuggerError = new DebuggerComposite();
	
	/* One Instance Of DebuggerEcho For Each Type Of Messages */
	$debuggerInfoEcho = new DebuggerEcho();
	$debuggerErrorEcho = new DebuggerEcho();
	
	/* One Instance Of DebuggerLog For Each Type Of Messages */
	$debuggerInfoLog = new DebuggerLog();
	$debuggerErrorLog = new DebuggerLog();
	
	/* Add The Two Convenient Debuggers To The Info Type */
	$debuggerInfo->addDebugger($debuggerInfoEcho);
	$debuggerInfo->addDebugger($debuggerInfoLog);
	
	/* Add The Two Convenient Debuggers To The Error Type */
	$debuggerError->addDebugger($debuggerErrorEcho);
	$debuggerError->addDebugger($debuggerErrorLog);
	
	/* Set The Used Log File For Each Type Of Messages */
	//$debuggerInfoLog->setLogFile('info.log');
	//$debuggerErrorLog->setLogFile('error.log');
	
	/* Set The Indicator Of The Messages If It Is An Info Or An Error */
	$debuggerInfoEcho->setMessageIndicator('INFO: ');
	$debuggerErrorEcho->setMessageIndicator('ERROR: ');
	
	/* Set The Classname Used In The Echoed HTML */
	$debuggerInfoEcho->setMessageClassName('debugInfo');
	$debuggerErrorEcho->setMessageClassName('debugError');
	
	$debuggerErrorEcho->setStandardMessage('StandardMessage To Echo');
	
	/* One Info And One Error Message */
	$debuggerInfo->debug('infoMessage');
	$debuggerError->debug('errorMessage');
?>