/* global Modernizr */
/* global $ */
/*
 	Juniper for WordPress
    Copyright (C) 2015 Plain, LLC. http://plainmade.com

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
	
	See license.txt

*/

var $ = jQuery;
$(document).ready(function(){
	
	$('#logo-image img').on('load', function(){
		if ( $(this).height > $(this).width ) {
			$(this).height = 'auto';
			$(this).width = '50%';
		}
	});
	
	$(".video").fitVids();

	$("#home-content section:visible:odd").addClass("even");
	$("#home-content section:visible:last").addClass("last");

	if(!Modernizr.svg) {
		$('img[src*="svg"]').attr('src', function() {
			return $(this).attr('src').replace('.svg', '.png');
		});
	}
	
	var $clonesocial = $('#social').clone();
	$("#jPanelMenu-menu").append($clonesocial);
	
	var $clonebackground = $('#bg-image').clone();
	$("#placeholder").append($clonebackground);
	
	var jPM = $.jPanelMenu({
		menu: '#menu',
		trigger: '.menu-trigger',
		duration: 300
	});
	jPM.on();
	
	$('.scrollup').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 600);
		return false;
	});
});