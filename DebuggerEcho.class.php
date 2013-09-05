<?php

	class DebuggerEcho implements Debugger {
		
		/* String Which Indicates The Type Of Message */
		/* Use The Method setMessageIndicator() To Set It */
		private $_messageIndicator = FALSE;
		
		/* Use For Example To Style The Messages, Default Value Is 'Debug' */
		/* Configurable By Using The Method setMessageClassName() */
		private $_messageClassName = 'debug';
		
		/* Method To Echo A Message */
		public function debug($message) {
			if($this->isMessageIndicatorSet()) {
				echo '<span class = "debugger"><span class = "'.$this->_messageClassName.'">'.$this->_messageIndicator.$message.'</span></span>';
			}
		}
		
		/* Method To Set The Indicator Of Type Of The Messages */
		public function setMessageIndicator($indicator) {
			$this->_messageIndicator = $indicator;
		}
		
		/* Returns True If The Indicator Is Set, Otherwise False */
		public function isMessageIndicatorSet() {
			if($this->_messageIndicator !== FALSE) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		/* Method To Set The Used Class In The HTML */
		public function setMessageClassName($className) {
			$this->_messageClassName = $className;
		}
	}

?>