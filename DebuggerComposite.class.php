<?php

	class DebuggerComposite implements Debugger {
		
		protected $debuggers = array();
		private $_messageIndicator = FALSE;
		private $_messageClassName = 'debug';
		
		public function addDebugger(Debugger $debugger) {
			$this->debuggers[] = $debugger;
		}
		
		public function debug($message) {
			if($this->isMessageIndicatorSet()) {
				foreach($this->debuggers as $debugger) {
					$debugger->debug('<span class = "'.$this->_messageClassName.'">'.$this->_messageIndicator.$message.'</span>');
				}
			}
		}
		
		public function setMessageIndicator($indicator) {
			$this->_messageIndicator = $indicator;
		}
		
		public function isMessageIndicatorSet() {
			if($this->_messageIndicator !== FALSE) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		public function setMessageClassName($className) {
			$this->_messageClassName = $className;
		}
	}

?>