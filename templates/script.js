let arr = ['apple', 'banana', 'juice', 'orange'];
console.log('hello');

let elm = $('#mylist');
let ul = $('<ul>');
elm.append(ul);

$.each(arr, function(index, val) {
	ul.append('<li>' + val );
});
// let element = document.getElementById('mylist');

// let ul = document.createElement('ul');
// element.appendChild(ul);

// for (var i = 0; i < arr.length; i++) {
// 	let li = document.createElement('li');
// 	ul.appendChild(li);

// 	let t = document.createTextNode(arr[i]);
// 	li.appendChild(t);
// }