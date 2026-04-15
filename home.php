  


  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<body class="bg-secondary" onload="myFunction()">


<div class="container d-flex justify-content-center mt-5 mb-5">
    <div class="row g-3">
        <div class="col-md-12"> 
          <form action="action.php" method="POST">
            <div class="card">
                <div class="d-flex justify-content-between p-3">
                 <div class="d-flex flex-column"> <span>Pro(Billed Monthly) <i class="fa fa-caret-down"></i></span> <a href="#" class="billing">Save 20% with annual billing</a> </div>
                    <div class="mt-1"> <sup class="super-price"></sup> <span class="super-month">/Month</span> </div>
                </div>
                <hr class="mt-0 line">
                <div class="p-3">
                    <div class="d-flex justify-content-between mb-2">
                    <?php if(!empty($_POST['p_one'])) {
                              echo '<span>Total</span> <span id="p_one">' .$_POST['p_one'].'</span>';
                              echo '<input type="hidden" id="p_one" name="p_one" value="'.$_POST['p_one'].'">';
                            }

                      ?>
                     </div>
                    <div class="d-flex justify-content-between"> <span>Total Tax - 15% <i class="fa fa-clock-o"></i></span> <span id="taxId"></span></div>
                </div>
                <hr class="mt-0 line">
                <div class="p-3">
                    <div class="d-flex justify-content-between mb-2">
                     </div>
                    <div class="d-flex justify-content-between"> <span>Total Payment <i class="fa fa-clock-o"></i></span> <span id="total"></span>
                    <input type="hidden" name="grandTotal" id="total2" value=""> </div>
                </div>
                <div class="p-3"> <button class="btn btn-primary btn-block free-button">Make Payment</button>
                    <div class="text-center"> <a href="#">Have a promo code?</a> </div>
                </div>
            </div>
          </form>  
        </div>
    </div>
</div>
</body>
</html>


<script>
function myFunction() {




    var p_one = document.getElementById("p_one").textContent;
   

    if(p_one)
    {

        var res =  Math.floor(p_one * 15) / 100;

        var total = parseFloat (p_one) + parseFloat (res);

        document.getElementById("taxId").innerHTML = res;
        
        var grandTotal = total.toFixed(2);
        
        document.getElementById("total").innerHTML = grandTotal;
        document.getElementById("total2").value = grandTotal;
    }
     
//     if(p_two == "")
//     {
//         alert('field is empty')
//     }
//     else
//     {
//         var res =  Math.round(p_two * 25) / 100;
 
//          var subTotal = parseInt(p_two) + parseInt(res);
 
//          document.getElementById("total").innerHTML = subTotal;
//     }
     
//     //  else if(p_three)
//     //  {
//     //      var res =  Math.round(p_three * 25) / 100;
 
//     //      var subTotal3 = parseInt(p_three) + parseInt(res);
 
//     //      document.getElementById("total").innerHTML = subTotal3;
//     //  }
     
//     //  else if(p_four)
//     //  {
//     //      var res =  Math.round(p_four * 25) / 100;
 
//     //      var subTotal4 = parseInt(p_four) + parseInt(res);
 
//     //      document.getElementById("total").innerHTML = subTotal4;
//     //  }
//     //  else
//     //  {
//     //      console.log('errpr');
//     //  }

   
 }
</script> 