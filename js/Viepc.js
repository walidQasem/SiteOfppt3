function visible(id){
    if(document.getElementById(id).style.display=="none"){
        document.getElementById(id).style.display="block"
    }
    else{
        if(document.getElementById(id).style.display=="block"){
            document.getElementById(id).style.display="none"
        }
    }
}
function change(id){
// var s=document.getElementById('pub')
img = $(".pub")
img.attr('src',id.src)
img.attr('data-magnify-src',id.src)
img.magnify()
}




$(document).ready(function() {$('.zoom').magnify();});




function walid(c,d,v){
    document.getElementById(c).style.color="red"
    document.getElementById(c).style.borderBottomColor = "red";
    document.getElementById(c).style.transition = "all 0.5s";
    document.getElementById(d).style.color="black"
    document.getElementById(v).style.color="black"
    document.getElementById(d).style.borderBottomColor = "#DCDCDC";
    document.getElementById(v).style.borderBottomColor = "#DCDCDC";
} 
document.getElementById('v2').style.display="none"
document.getElementById('v3').style.display="none"
document.getElementById('c2').onclick=function chan1(){
    document.getElementById('v11').style.display="none"
    document.getElementById('v2').style.display="block"
    document.getElementById('v3').style.display="none"
    walid("c2","c1","c3")
    
}
document.getElementById('c1').onclick=function chan2(){
    document.getElementById('v11').style.display="block"
    document.getElementById('v2').style.display="none"
    document.getElementById('v3').style.display="none"
    walid("c1","c2","c3")
}
document.getElementById('c3').onclick=function chan3(){
    document.getElementById('v11').style.display="none"
    document.getElementById('v2').style.display="none"
    document.getElementById('v3').style.display="block"
    walid("c3","c1","c2")
}
function hani(x){
var res=parseInt(x.children[0].innerHTML)
if(x.style.fontSize=="22px"){
x.children[0].innerHTML=res+1
x.style.transition='0.5s'
x.style.fontSize="26px"
}
else{
if(x.style.fontSize=="26px"){
    x.children[0].innerHTML=res-1
    x.style.fontSize="22px"
    x.style.transition='0.5s'
    }
}}
