
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
var b1=document.getElementById('b1')
var b2=document.getElementById('b2')
var b3=document.getElementById('b3')
var s=setInterval(walid,1000)
function walid(){
    var res=parseInt(b3.innerHTML)
res-=1
b3.innerHTML=res
if(b3.innerHTML==0){
    b3.innerHTML=59
    b2.innerHTML-=1
}
if(b2.innerHTML==0){
    b2.innerHTML=59
    b1.innerHTML-=1
}
if(b2.innerHTML==0 && b1.innerHTML==0   && b3.innerHTML==1 ){
clearInterval(s)
}
}
walid()