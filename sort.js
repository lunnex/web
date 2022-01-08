var sortByNameBtn = document.getElementById('sortByName');
var sortByPriceBtn = document.getElementById('sortByPrice');
var countName = 0;
var countPrice = 0;

function sortingByName() {
	countName = countName + 1;
  var items = document.querySelectorAll('.good');

  // get all items as an array and call the sort method
  Array.from(items).sort(function(a, b) {
	  a = a.querySelector('.name').innerText.toLowerCase()
    b = b.querySelector('.name').innerText.toLowerCase()
    // get the text content
    if(countName%2 == 1){
	var c = b;
	b = a;
	a = c;
	}

    
    return (a > b) - (a < b)
  }).forEach(function(n, i) {
    n.style.order = i
  })

}

function sortingByPrice(){
	countPrice = countPrice + 1;
  var items = document.querySelectorAll('.good')
  
  Array.from(items).sort(function(a, b) {
    // using ~~ to cast the value to a number instead of a string
    a = ~~a.querySelector('.dengi').innerText.replace(/[a-zа-яё]/gi, '');
    b = ~~b.querySelector('.dengi').innerText.replace(/[a-zа-яё]/gi, '');
    if(countPrice % 2 == 1){
	var c = b;
	b = a;
	a = c;
	}
    return a - b
  }).forEach(function(n, i) {
    n.style.order = i
  })
}

sortByNameBtn.addEventListener('click', sortingByName);
sortByPriceBtn.addEventListener('click', sortingByPrice);
