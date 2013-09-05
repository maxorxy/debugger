<?php

	class DebuggerComposite implements Debugger {
		
		/* Array To Store Used Debuggers */
		protected $debuggers = array();
		
		/* Method Which Assigns The Messages To Every Debugger Stored */
		public function debug($message) {
			foreach($this->debuggers as $debugger) {
				$debugger->debug($message);
			}
		}
		
		/* Method To Add Another Debugger Which Handles Messages */
		public function addDebugger(Debugger $debugger) {
			$this->debuggers[] = $debugger;
		}
	}

?>