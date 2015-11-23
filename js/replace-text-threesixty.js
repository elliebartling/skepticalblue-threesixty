jQuery(document).ready(function($) {

	$('#sidebar-ThreeSixty-blog br').each ( function () {
	    if (this.parentNode.nodeName != "P") {
	        $.each ([this.previousSibling, this.nextSibling], function () {
	            if (this.nodeType === 3) { // 3 == text
	                $(this).wrap ('<p></p>');
	            }
	        } );

	        $(this).remove (); //-- Kill the <br>
	    }
	} );
});