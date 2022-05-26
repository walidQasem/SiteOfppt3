// var aside=document.getElementById('aside') ; 
// var filter=document.getElementById('filt') ; 
// aside.style.position="absolute"
// var body=document.querySelector('body')
// aside.style.right="100%"
// filter.addEventListener('click',()=>{
//     if(aside.style.right=="100%"){
//         aside.style.transition="1s"
//         aside.style.right="41%"
//         aside.style.transition="1s"
//         aside.style.position="absolute"
//         enableScroll()

        
//     }
//     else{
//         aside.style.position="relative"
//         aside.style.transition="1s"
//         aside.style.right="100%"
//         aside.style.transition="1s"
//         aside.style.position="absolute"
       
        
//     }
    
// })
var liste=document.querySelector('.bi-list-task');
var grid=document.querySelector('.bi-grid');
var ch=document.querySelectorAll('.ckli') ;
var hr=document.querySelectorAll('.hrex')

liste.addEventListener('click',function(){
    liste.classList.add("sty")
    grid.classList.remove("sty")

    for(var i = 0 ; i < ch.length;i++){
        ch[i].removeAttribute('class')
        ch[i].children[0].classList.add('d-flex')
        ch[i].children[0].classList.add('flex-row')  
        ch[i].children[0].children[0].style.width="180px"
        for(var j= 0 ; j<hr.length;j++){
            hr[j].style.display='block'
        }
   
       
    }
})
grid.addEventListener('click',girdex);
function girdex(){
    grid.classList.add("sty")
    liste.classList.remove("sty")
    for(var i = 0 ; i < ch.length;i++){
      
        ch[i].children[0].removeAttribute('class')
       
        ch[i].classList.add('col-6')
        ch[i].classList.add('col-lg-3')
        ch[i].classList.add('col-sm-6')
        ch[i].classList.add('col-md-6')
        ch[i].classList.add('ckli')
       
      
        for(var j= 0 ; j<hr.length;j++){
            hr[j].style.display='none'
        }
    }
        
    }

var rewex=document.querySelector('.rowix')

function removex(){
    for(var i = 0 ; i < ch.length;i++){
        ch[i].remove()}
}
var input=document.querySelectorAll("input")
var rn=document.getElementById("lan")
var rn1=document.getElementById("ran")
function febo(x){
    document.getElementById('lan').innerHTML=x.value*9+'$'
}
function  rejox(x){

document.getElementById('ran').innerHTML=x.value*10+'$'

}


function afficher(){
    removex()
    for(var i = 0 ; i < ch.length;i++){
        var s1=ch[i].children[0].children[1].children[2].children[0].innerHTML
        if(rn1.innerHTML<s1 && rn.innerHTML>s1){
            rewex.append(ch[i])
            //ch[i].classList.add("col-sm")
            //ch[i].classList.add("col-sm-6")
        
        }

    }

}










var inputLeft = document.getElementById("input-left");
var inputRight = document.getElementById("input-right");

var thumbLeft = document.querySelector(".slider > .thumb.left");
var thumbRight = document.querySelector(".slider > .thumb.right");
var range = document.querySelector(".slider > .range");

function setLeftValue() {
	var _this = inputLeft,
		min = parseInt(_this.min),
		max = parseInt(_this.max);

	_this.value = Math.min(parseInt(_this.value), parseInt(inputRight.value) - 1);

	var percent = ((_this.value - min) / (max - min)) * 100;

	thumbLeft.style.left = percent + "%";
	range.style.left = percent + "%";
}
setLeftValue();

function setRightValue() {
	var _this = inputRight,
		min = parseInt(_this.min),
		max = parseInt(_this.max);

	_this.value = Math.max(parseInt(_this.value), parseInt(inputLeft.value) + 1);

	var percent = ((_this.value - min) / (max - min)) * 100;

	thumbRight.style.right = (100 - percent) + "%";
	range.style.right = (100 - percent) + "%";
}
setRightValue();

inputLeft.addEventListener("input", setLeftValue);
inputRight.addEventListener("input", setRightValue);

inputLeft.addEventListener("mouseover", function() {
	thumbLeft.classList.add("hover");
});
inputLeft.addEventListener("mouseout", function() {
	thumbLeft.classList.remove("hover");
});
inputLeft.addEventListener("mousedown", function() {
	thumbLeft.classList.add("active");
});
inputLeft.addEventListener("mouseup", function() {
	thumbLeft.classList.remove("active");
});

inputRight.addEventListener("mouseover", function() {
	thumbRight.classList.add("hover");
});
inputRight.addEventListener("mouseout", function() {
	thumbRight.classList.remove("hover");
});
inputRight.addEventListener("mousedown", function() {
	thumbRight.classList.add("active");
});
inputRight.addEventListener("mouseup", function() {
	thumbRight.classList.remove("active");
});
