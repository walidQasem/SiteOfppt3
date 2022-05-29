
<!--container-->


  <div class="checkout-wrap">
    <ul id="checkout-bar" class="step1">
      <li class="step1"><span><i class="bi bi-cart3 mx-2" style="font-size: 20px;"></i>Card</span></li>
      <li class="step2"><span><i class="bi bi-person-circle mx-2" style="font-size: 20px;"></i>Details</span></li>
      <li class="step3"><span><i class="bi bi-box mx-2" style="font-size: 20px;"></i>Shipping</span></li>
      <li class="step4"><span><i class="bi bi-credit-card-2-back mx-2" style="font-size: 20px;"></i>Payment</span></li>
    </ul>
  </div>
  <div class="space"></div><br><br>
  <style>
      
  </style>






 






























<style>
    .ho{
        background-image: linear-gradient(to left,rgb(255, 119, 0) , rgb(224, 111, 111));
color: white;
display: flex;
align-items: center;
justify-content: center;
    }
    #edit{
    font-size: 11px;
    color: grey;
    font-weight: bold;
    padding: 5px 10px;
    box-shadow:1px 1px 20px #D3D3D3;
    border-radius: 10px;
    margin-left: auto;
    margin-right: 30px;
    }
    #edit:hover{
        box-shadow: none;
        transition: 0.4s;
    }
    .tft{
        border: 1px solid orange;
        border-radius: 5px;
        color: orange;
     transition: 0.3s;
     font-weight: bold;
     width: 100%;
     padding: 10px;
     background-color:white;
    }
    .tft:hover{
        color: white;
        background-color:orange;
        transition: 0.3s;

    }
.checkout-wrap {
  padding: 30px 50px;
}
.low{
        font-size: 11px;
        font-weight: bold;
        height: 40px;
    }

#checkout-bar {
  position: relative;
  width: 100%;
  padding: 0;
  margin: 0 auto;
  list-style: none;
  float: left;
  clear: both;
}

#checkout-bar li {
  position: relative;
  width: 25%;
  float: left;
  text-align: center;
 
 
}

#checkout-bar li:after {
  position: relative;
  content: "";
  display: inline-block;
  width: 15px;
  height: 15px;
  top: 2.5px;
  left: 50%;
  border: 2px solid #ddd;
  background-color: #fff;
  border-radius: 100%;
  z-index: 4;
  
}


#checkout-bar li span {
  position: relative;
  display: block;
  left: 50%;
}

#checkout-bar:before,
#checkout-bar:after {
  position: absolute;
  content: "";
  top: 50%;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 5px;
  margin: auto 0;
  background-color: #c3c3c3;
  z-index: 1;
}
#checkout-bar.step1:after,
#checkout-bar.step2:after,
#checkout-bar.step3:after,
#checkout-bar.step4:after {
  width: 25%;
  background-color: orange;
  z-index: 2;
  -webkit-transition: width 2s;
  /* Safari */
  transition: width 2s;
}

#checkout-bar.step2:after {
  width: 50%;
}

#checkout-bar.step3:after {
  width: 75%;
}

#checkout-bar.step4:after {
  width: 100%;
}

button {
  border: none;
  background: none;
}







</style>

