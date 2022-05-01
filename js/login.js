var input=document.querySelectorAll('input')
input[0].addEventListener("keyup",veri)
function veri(){
    var patr=/^[1-9]*[a-z]+[1-9]*@gmail.com$/
    var res=patr.test(input[0].value)
    if(res == true){
        input[0].style.borderColor="green"
    }
    else{
        if(input[0].value==""){
            input[0].style.borderColor="#DCDCDC"
        }
        else{
            input[0].style.borderColor="red"
        }
        }  
    }
        


var ayn1=document.getElementById('wina')
ayn1.addEventListener('click',function(){
if(input[1].type=='password'){
    input[1].type='text'
    ayn1.setAttribute("src","image/nas3.png")
}
else{
    input[1].type='password'
    ayn1.setAttribute("src","image/3wina.png")
}
})