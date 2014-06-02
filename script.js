//calling the google function load passing jquery version 1.4.2
google.load("jquery","1.4.2");
//calling
google.setOnLoadCallback(function(){
	
	
	$('button').hover(
		function(){
		 $(this).addClass('active');
		 },
		 function(){
		 $(this).removeClass('active');
		 }
		
		);
	$('button').click(function(){
		var Hustle = $("input[name=message]").val();
		$('#hustles').append("<p>"+Hustle+"</p>");
	
	
	
	});







});