

To user Toast Object:

Append the ff codes under your master page:


    <!--Toast Object-->
    <div id="toast"></div>
	
	
	To call the object:
	
		toast(<message>);  <!-within parent-->
	or
		window.parent.toast(<message>); <!--child frame of the parent-->