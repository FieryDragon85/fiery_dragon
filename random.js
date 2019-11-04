"use strict";

function getrandom() {
	var obj = {};
	var mass = [];
	var start = true;
	var min = 1, max = 45;

	function get() {
		var array = [];
		var rand;
		for (var i = 0; i < 100; i++) {
			rand = min + Math.floor(Math.random() * (max + 1 - min));
			array[i] = rand;
		};
		mass = [];
		for (var i = 0; i < array.length; i++) {
			mass[i] = array[i];
		};
	};

	function find(receivedmass) {
		var count;
		for (var i = min; i <= max; i++) {
			count = 0;
			for (var j = 0; j < receivedmass.length; j++) {
				if (i == receivedmass[j]) {
					count++;
				};
			};
			if (count != 0) {
				obj['+' + i] = count;
			};
		};
	};

	function sort() {
		var objsort = {};
		function selection() {
			var number = 0;
			var keycopy = 0;
			for (var key in obj) {
				if (number <= obj[key]) {
					number = obj[key];
					keycopy = key;
				};
			};
			for (var key in obj) {
				if (key == keycopy) {
					objsort[key] = number;
					obj[key] = 0;
				};
			};
		};
		for (var key in obj) {
			selection();
		};
		obj = {};
		for (var key in objsort) {
			obj[key] = objsort[key];
		};
	};

	function CARN() { // Create Array Random Number
		mass = [];
		var temp = [];
		var number = 0;
		for (var i in obj) {
			number = obj[i];
			for (var j in obj) {
				if (number == obj[j]) {
					mass[+j] = +j;
				} else {
					break;
				};
			};
			break;
		};
		var count = 0;
		for (var i = 0; i < mass.length; i++) {
			if (isFinite(mass[i]) == true) {
				temp[count] = mass[i];
				count++;
			};
		};
		mass = [];
		for (var i = 0; i < temp.length; i++) {
			mass[i] = temp[i];
		};
	};

	function CAFN() { // Create Array Favorites Number
		if (start == true) {
			get();
			start = false;
		};
		find(mass);
		sort();
		CARN();
		var FArray = [];
		for (var counter = 0; counter < 100; counter++) {
			get();
			find(mass);
			sort();
			CARN();
			for (var n = FArray.length; n < FArray.length + mass.length; n++) {
				for (var m = 0; m < mass.length; m++) {
					FArray[n + m] = mass[m];
				};
				break;
			};
		};
		mass = [];
		for (var i = 0; i < FArray.length; i++) {
			mass[i] = FArray[i];
		};
	};

	function random(){
		for (let perform = 1; perform < 10; perform++) {
			CAFN();
			find(mass);
			sort();
			CARN();
		};

		alert(mass);
	};
	random();
};