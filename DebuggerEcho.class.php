<?php

	class DebuggerEcho implements Debugger {
		
		/* String Which Indicates The Type Of Message */
		/* Use The Method setMessageIndicator() To Set It */
		private $_messageIndicator = FALSE;
		
		/* Use For Example To Style The Messages, Default Value Is 'Debug' */
		/* Configurable By Using The Method setMessageClassName() */
		private $_messageClassName = 'debug';
		
		/* Message, echoed instead of Message assign */
		/* Configurable By Using The Method setStandardMessage() */
		/* Useful For Error Message Which A Normal User Is Not Allowed To See
		   The User Has To Know About An Error	*/
		private $_standardMessage = FALSE;
		
		/* Method To Echo A Message */
		public function debug($message) {
			if($this->isMessageIndicatorSet()) {
				echo '<span class = "debugger">
						<span class = "'.$this->_messageClassName.'">'.
							$this->_messageIndicator.
							(($this->isStandardMessageSet())?$this->_standardMessage:$message).
						'</span>
					</span>';
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
		
		/* Returns True If The Standard Message Is Set, Otherwise False */
		public function isStandardMessageSet() {
			if($this->_standardMessage !== FALSE) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
		
		/* Method To Set The Standard Message To Echo */
		public function setStandardMessage($standardMessage) {
			$this->_standardMessage = $standardMessage;
		}
	}

?>