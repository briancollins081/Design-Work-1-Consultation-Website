$(function(){
	//activate tabs
	var hash=window.location.hash;
	hash && $('ul.nav a[href="'+hash+'"]').tab('show');
	//Highlight the current nav
	$("#about a:contains('ABOUT')").parent().addClass('active');
	$("#consult a:contains('CONSULT')").parent().addClass('active');
	$("#contact a:contains('CONTACT')").parent().addClass('active');
	$("#faq a:contains('FAQ')").parent().addClass('active');
	$("#forum a:contains('FORUM')").parent().addClass('active');
	$("#home a:contains('HOME')").parent().addClass('active');
	$("#signup a:contains('SIGN UP')").parent().addClass('active');
	$("#signin a:contains('SIGN IN')").parent().addClass('active');
});