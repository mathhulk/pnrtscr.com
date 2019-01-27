$(document).ready(function( ) {
	new ClipboardJS(".copy");
	
	$("input").val( "https://pnrtscr.com/" + Math.random( ).toString(36).substr(2, 6) );
	
	$(document).on("click", ".generate", function( ) {
		$("input").val( "https://pnrtscr.com/" + Math.random( ).toString(36).substr(2, 6) );
	});
});