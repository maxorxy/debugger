<?php
	require_once 'Debugger.interface.php';
	require_once 'DebuggerComposite.class.php';
	require_once 'DebuggerEcho.class.php';
	require_once 'DebuggerLog.class.php';
	
	$debuggerInfo = new DebuggerComposite();
	$debuggerError = new DebuggerComposite();
	
	$debuggerEcho = new DebuggerEcho();
	$debuggerInfoLog = new DebuggerLog();
	$debuggerErrorLog = new DebuggerLog();
	
	//$debuggerInfoLog->setLogFile('info.log');
	//$debuggerErrorLog->setLogFile('error.log');
	
	$debuggerInfo->addDebugger($debuggerEcho);
	$debuggerInfo->addDebugger($debuggerInfoLog);
	$debuggerError->addDebugger($debuggerEcho);
	$debuggerError->addDebugger($debuggerErrorLog);
	
	$debuggerInfo->setMessageIndicator('INFO: ');
	$debuggerError->setMessageIndicator('ERROR: ');
	
	$debuggerInfo->setMessageClassName('debugInfo');
	$debuggerError->setMessageClassName('debugError');
	
	$debuggerInfo->debug('infoMessage');
	$debuggerError->debug('errorMessage');
?>