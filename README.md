#Debugger

----------

### Debugger.interface.php: ###
	
- An interface which specifies just one method: *debug()*, the method you'll finally call in your script to handle a message
- **DebuggerComposite.class.php**, **DebuggerEcho.class.php** and **DebuggerLog.class.php** all implement the interface

### DebuggerComposite.class.php ###
	
- Provides two methods:
	- `debug()`, which has to be provided (because of implementing *Debugger*)and
	- `addDebugger()`, which you can use for adding another class which of course implements the interface debugger and which handles messages
		- this method just adds the assigned object to the array `$_debuggers`

### DebuggerEcho.class.php ###
	
- Class which handles Messages by echoing them
- You can configure a HTML-Classname for example to style the message echoed
- You can also add a so called *messageIndicator* which is put before every message
- You are also able to set a *standardMessage* echoed everytime, no matter which message you assigned
	- This is for example useful, if you want to handle error messages, but you don't want the normal user to see details of errors in your script

### DebuggerLog.class.php ###

- A simple class to log errors
- You can set a format of date and time put before the message to log
- You have to set a file to log of course

### debug.php ###
	
- Just a simple example for using the debugger

[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/maxorxy/debugger/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

