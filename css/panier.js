
// function visible(id){
//     if(document.getElementById(id).style.display=="none"){
//         document.getElementById(id).style.display="block"
//     }
//     else{
//         if(document.getElementById(id).style.display=="block"){
//             document.getElementById(id).style.display="none"
//         }
//     }
// }






var div;

// var pc1 = document.getElementById('pc1');
// var bgn = document.getElementById('bgn');
// var but=document.getElementById('buut')
// but.addEventListener('click', function() {
// //   pc1.classList.toggle('hide');
// // });
// // var transition = document.getElementById('pc1');
// // var target;

// function remove(s){
//     s.classList.add('hide');
//     console.log(s)
//     //s.parentNode.parentNode.parentNode.removeChild(s.parentNode.parentNode)
    
// }
var pc1 = document.getElementById('pc1');
function anime(x){
    div=x.parentNode.parentNode
    div.addEventListener('transitionend',(e) => {
        if(e.propertyName=='opacity'){
            div.nextElementSibling.remove()
            div.remove()
        }
        //
        
        //;
         //but.parentNode.parentNode.parentNode.removeChild(but.parentNode.parentNode)
         //target.parentNode.parentNode.parentNode.removeChild(s.parentNode.parentNode);
     
     });
    div.style.marginLeft="120px"
    div.style.opacity="0"
    div.style.transition='0.5s'
    
}

var but=document.getElementById("bttt")
but.addEventListener("click",()=>{
    window.location.reload()
});