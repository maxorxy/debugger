<?php

	class DebuggerEcho implements Debugger {
		public function debug($message) {
			echo '<span class = "debugger">'.$message.'</span>';
		}
	}

?>