<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>contact us form</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="card-title">
                        <h2 class="text-center py-2">contact</h2>
                        <hr>
                        <?php
                            $Msg ="";
                            if(isset($_GET['error']))
                            {
                                $Msg ="fill the form";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }
                            if(isset($_GET['success']))
                            {
                                $Msg ="message has been sent";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                            
                        ?>    
                    </div>
                    <div class="card-body">
                    <form action="process.php" method="POST">
                             
                            <input type="text" name="UName"  placeholder="UserName" class="form-control mb-2"  > 
                            <input type="Email" name="Email" placeholder="Email" class="form-control mb-2">       
                                <input type="text" name="Number" placeholder="Contact number" class="form-control mb-2">         
                                    <textarea name="msg" placeholder="Message"  class="form-control mb-2"></textarea>   
                                    <button class="btn btn-success"   name="btn-send" >Send</button>         
                           
                    </form>   
                    
                </div>
            </div>
        </div>
    </div>
   
     
</body>