var wow = new WOW({
    boxClass: 'wow',
    animateClass: 'animated',
    offset:         0,
    mobile:true,
    live:true,
    callback: function(box){

},
scrollContainer:null,
resetAnimation:true,
  }
  );
  wow.init();
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if(scroll < 750){
      $('.fixed-top').css('background', 'transparent')
    }
    else{
      $('.fixed-top').css('background', 'rgba(0, 0, 147, 0.7)');
      
    }
  });
  const counters = document.querySelectorAll('.counter');
const speed = 600;
counters.forEach(counter => {
const  updateCount = ()  => {
const target = +counter.getAttribute('data-target');

const count = +counter.innerText;
const inc = target / speed;


if(count < target){
counter.innerText = Math.ceil(count + inc);

setTimeout(updateCount, 1);
}else {
count.innerText = target;

}
}

$(window).scroll(function(){
var start = $(window).scrollTop();
if (start > 800){
updateCount();
}
})
});

// Get input element
let filterInput = document.querySelector('#filterInput');

// Add event listener
filterInput.addEventListener('keyup',filterNames);

function filterNames(){
    // Get value of input
let filterValue = document.getElementById('filterInput').value.toUpperCase();
filterInput.style.backgroundColor = 'lightgrey'
    // Get names ul
    let ul = document.querySelector('#names');
    // Get lis from ul
    let li = ul.querySelectorAll('div.list-group-item');
// loop though list-group 
for(let i = 0; i < li.length ; i++){
    let a = li[i].getElementsByTagName('a')[0];
    // if  matched
if(a.innerHTML.toUpperCase().indexOf(filterValue) > -1)
{
    li[i].style.display =" ";
}
else{
    li[i].style.display ="none";
}
}

}
const requestSec = document.getElementById('l1');
const feedback = document.getElementById('feed');
let req = document.getElementById('Request');
let feed = document.getElementById('feedback');
let RName = document.getElementById('RName');
let Remail = document.getElementById('Re-mail');
let Name = document.getElementById('Name');
let E_mail = document.getElementById('e-mail');
let Rteli = document.getElementById('Rteli');
let teli = document.getElementById('teli');


requestSec.addEventListener('click',revel)
feedback.addEventListener('click',revel2)
feed.addEventListener('click',change)
Name.addEventListener('click',changeName)
RName.addEventListener('click',changeRName)
E_mail.addEventListener('click',changeEmail)
Remail.addEventListener('click',changeRemail)
req.addEventListener('click',changeReq)
teli.addEventlistener('click', changeTeli)
Rteli.addEventlistener('click', changeRteli)
function revel() {

        req.style.display = "block";
        Name.style.display = "block";
        E_mail.style.display = "block";
        teli.style.display = "block";
   let changeRequestColor = document.getElementById('calo1').style.background ="orange";
    
}
function revel2() {
    feed.style.display = "block";
    RName.style.display = "block";
    Remail.style.display = "block";
    Rteli.style.display = "block";
    let changeRequestColor = document.getElementById('calo').style.background ="orangered";
}
function change(){
  feed.style.backgroundColor = "lightgrey"
}

function changeReq(){
  req.style.backgroundColor = "lightgrey"
}
function changeName(){
  Name.style.backgroundColor = "lightgrey"
}
function changeEmail(){
  E_mail.style.backgroundColor = "lightgrey"
}
function changeRName(){
  RName.style.backgroundColor = "lightgrey"
}
function changeRemail(){
  Remail.style.backgroundColor = "lightgrey"
}
function changeTeli(){
  teli.style.backgroundColor = "lightgrey"
}
function changeRteli(){
  Rteli.style.backgroundColor = "lightgrey"
}