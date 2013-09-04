<?php
	
	class DebuggerLog implements Debugger {
		/* Path To Log File */
		private $_logFile = '';
		
		/* Used Format Of Date, Default YYYY-MM-DD HH:MM:SS */
		private $_dateFormat = 'Y-m-d H:i:s';
		
		/* Method To Log A Message */
		public function debug($message) {
			if($this->isLogFileSet() == TRUE) {
				error_log($this->_prepareMessage($message), 3, $this->_logFile);
			}
		}
		
		/* Method To Set The Path To The Used Log File */
		public function setLogFile($logFile) {
			if($this->isLogFileSet() == FALSE
			   AND file_exists($logFile)
			   AND is_writable($logFile)) {
				$this->_logFile = $logFile;
			}
			
		}
		
		/* Check, If The Path To The Log File Is Already Set */
		public function isLogFileSet() {
			if($this->_logFile != '') {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		/* Change Used Format Of Date */
		public function setDateFormat($dateFormat) {
			$this->_dateFormat = $dateFormat;
		}
		
		/* Prepend The Date And Append A Newline To The Message */
		private function _prepareMessage($message) {
			$date = date($this->_dateFormat);
			$preparedMessage = $date.': '.$message.chr(13).chr(10);
			return $preparedMessage;
		}
	}
	
?>