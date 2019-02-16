$(document).ready(function() {
	"use strict";
	//MEGA MENU
	$(".about-menu").hover(function() {
		$(".about-mm").fadeIn();
	});
	$(".about-menu").mouseleave(function() {
		$(".about-mm").fadeOut();
	});
	//MEGA MENU
	$(".admi-menu").hover(function() {
		$(".admi-mm").fadeIn();
	});
	$(".admi-menu").mouseleave(function() {
		$(".admi-mm").fadeOut();
	});
	//MEGA MENU
	$(".cour-menu").hover(function() {
		$(".cour-mm").fadeIn();
	});
	$(".cour-menu").mouseleave(function() {
		$(".cour-mm").fadeOut();
	});
	//SINGLE DROPDOWN MENU
	$(".top-drop-menu").on("click", function() {
		$(".man-drop").fadeIn();
	});
	$(".man-drop").mouseleave(function() {
		$(".man-drop").fadeOut();
	});
	$(".wed-top").mouseleave(function() {
		$(".man-drop").fadeOut();
	});

	//SEARCH BOX
	$("#sf-box").on("click", function() {
		$(".sf-list").fadeIn();
	});
	$(".sf-list").mouseleave(function() {
		$(".sf-list").fadeOut();
	});
	$(".search-top").mouseleave(function() {
		$(".sf-list").fadeOut();
	});
	$(".sdb-btn-edit").hover(function() {
		$(this).text("Click to edit my profile");
	});
	$(".sdb-btn-edit").mouseleave(function() {
		$(this).text("edit my profile");
	});
	//MOBILE MENU OPEN
	$(".ed-micon").on("click", function() {
		$(".ed-mm-inn").addClass("ed-mm-act");
	});
	//MOBILE MENU CLOSE
	$(".ed-mi-close").on("click", function() {
		$(".ed-mm-inn").removeClass("ed-mm-act");
	});

	//GOOGLE MAP IFRAME
	$(".map-container")
		.on("click", function() {
			$(this)
				.find("iframe")
				.addClass("clicked");
		})
		.on("mouseleave", function() {
			$(this)
				.find("iframe")
				.removeClass("clicked");
		});

	$("#status").fadeOut();
	$("#preloader")
		.delay(350)
		.fadeOut("slow");
	$("body")
		.delay(350)
		.css({
			overflow: "visible"
		});

	//MATERIALIZE SELECT DROPDOWN
	$("select").material_select();
	//MATERIALIZE SLIDER
	$(".slider").slider();

	//AUTO COMPLETE CITY SELECT
	$(
		"#select-city,#select-city-1,#select-city-2,#select-city-3,#select-city-4,#select-city-5.autocomplete"
	).autocomplete({
		data: {
			Darjeeling: null,
			Leh: null,
			Gangtok: null,
			Peeling: null,
			Ladhakh: null,
			Kerala: null,
			Manali: null,
			Lonavala: null,
			Jaipur: null
		},
		limit: 8, // The max amount of results that can be shown at once. Default: Infinity.
		onAutocomplete: function(val) {
			// Callback function when value is autcompleted.
		},
		minLength: 1 // The minimum length of the input for the autocomplete to start. Default: 1.
	});
	// alert("Hello");
	var searchKeyMap = {
		"Top Honeymoon Packages in India": "holiday-packages/queen-of-the-hills",
        "Top abc Honeymoon Packages in India": "holiday-packages/green-dooars",
		"Family Package": "2",
		"World Tour Package": "3",
		"Hill Stations": "4",
		"First India Hotel": "5",
		"Tour and Travel Packages": "6",
		"City Seight Seeings": "7"
	};
	$("#select-search").autocomplete({
		data: {
			"Top Honeymoon Packages in India": null,
            "Top abc Honeymoon Packages in India": null,
			"Family Package": null,
			"World Tour Package": null,
			"Hill Stations": null,
			"First India Hotel": null,
			"Tour and Travel Packages": null,
			"City Seight Seeings": null
		},
		limit: 8, // The max amount of results that can be shown at once. Default: Infinity.
		onAutocomplete: function(val) {
			val = val.trim();
			var searchSlug = searchKeyMap[val];
			window.location.href = searchSlug;
		},
		minLength: 1
	});

	//     $('#select-search,#select-search-1,#select-search-2.autocomplete').autocomplete({

	//         data:
	//         {
	//             "Top Honeymoon Packages in India": 'images/icon/7.png',
	//             "Family Package": 'images/icon/8.png',
	//             "World Tour Package": 'images/icon/9.png',
	//             "Hill Stations": 'images/icon/10.png',
	//             "First India Hotel": 'images/icon/27.png',
	//             "Tour and Travel Packages": 'images/icon/14.png',
	//             "City Seight Seeings": 'images/icon/15.png',
	//         },
	//         limit: 8, // The max amount of results that can be shown at once. Default: Infinity.
	//         onAutocomplete: function(val) {
	//             // Callback function when value is autcompleted.
	//         },
	//         minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
	//     });
});

function myFunction() {
	var input, filter, table, tr, td, i;
	input = document.getElementById("myInput");
	filter = input.value.toUpperCase();
	table = document.getElementById("myTable");
	tr = table.getElementsByTagName("tr");
	for (i = 0; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[1];
		if (td) {
			if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			} else {
				tr[i].style.display = "none";
			}
		}
	}
}

$(document).ready(function () {
    $("#book-submit").click(function () {  
    //var name = $('#xebia_name').val(); 
    var travel = new Object(); 
    travel.name = $('#name').val(); 
   	travel.email = $('#email').val(); 
    travel.number = $('#number').val(); 
    travel.fromdate = $('#fromdate').val(); 
    travel.todate = $('#todate').val(); 
    travel.selectcity = $('#selectcity').val(); 
    travel.package = $('#package').val(); 
    travel.noofadults = $('#noofadults').val(); 
    travel.noofchildrens = $('#noofchildrens').val(); 
    travel.minprice = $('#minprice').val(); 
    travel.maxprice = $('#maxprice').val(); 
    let ob = {'name':travel.name,
    'email':travel.email,
    'number':travel.number,
    'fromdate':travel.fromdate,
    'todate':travel.todate,
    'selectcity':travel.selectcity,
     'package':travel.package,
     'noofadults':travel.noofadults,
     'noofchildrens':travel.noofchildrens,
     'minprice':travel.minprice,
     'maxprice':travel.maxprice
}
console.log('ob',ob);
    // dataTravel = JSON.parse(travel);
    // let ob = {'name':'sushant','lastname':'thakur'};
    //var send_data = '{"name":'+name+',"email":'+email+' ,"number":'+number+' ,"schedule":'+schedule+' ,"course":'+course+' ,"checkbox_authorize":'+checkbox_authorize+'}';
    //var ddd = JSON.parse(send_data);
   // alert(send_data); exit();
                 $.ajax({  
                     url: 'http://learning.local/booking/email_engine',  
                     type: 'POST',  
                     contentType: "text/plain",  
                     data: ob,  
                     success: function (data, textStatus, xhr) {  
                         console.log(data);  
                          alert("Thank you for your interest in posh essentials training. We will be in touch with you shortly to follow up on your inquiry.");
                     },  
                     error: function (xhr, textStatus, errorThrown) {  
                         console.log('Error in Operation',errorThrown);  
                     }  
                 });  
             });  
         });

// //DATE PICKER
// $(function() {
//     var dateFormat = "mm/dd/yy",
//         from = $("#from,#from-1,#from-2,#from-3,#from-4,#from-5")
//         .datepicker({
//             defaultDate: "+1w",
//             changeMonth: false,
//             numberOfMonths: 1
//         })
//         .on("change", function() {
//             to.datepicker("option", "minDate", getDate(this));
//         }),
//         to = $("#to,#to-1,#to-2,#to-3,#to-4,#to-5").datepicker({
//             defaultDate: "+1w",
//             changeMonth: false,
//             numberOfMonths: 1
//         })
//         .on("change", function() {
//             from.datepicker("option", "maxDate", getDate(this));
//         });

//     function getDate(element) {
//         var date;
//         try {
//             date = $.datepicker.parseDate(dateFormat, element.value);
//         } catch (error) {
//             date = null;
//         }

//         return date;
//     }
// });
