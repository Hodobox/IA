<!DOCTYPE html>
<html lang="en">

<head>

  
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Šachový Klub Banská Štiavnica</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Šachový Klub Banská Štiavnica</div>
    <div class="address-bar">Adresa 1 2 3, Banská Štiavnica</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
                    
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li>
                    <form name="login" method="post" action="login.php" class="loginform">
                    <span class="smalltext"> Meno: </span> <input type="text" name="username" class="loginform"><br>
                    <span class="smalltext"> Heslo: </span> <input type="password" name="password"  class = "loginform"><br>
                    <input type = "submit" name = "Login" class = "loginform" value="Login">
                    </form>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Galéria</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="img/slide-2.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <p>This is a great place to introduce your company or project and describe what you do.</p>
                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Naši Hráči</strong>
                    </h2>
                    <hr>
                </div>
               

                 <!--<div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/hrac1.jpg" alt="">
                    <h3>Peter Gurský
                        <small>1800</small>
                    </h3>
                </div> -->
               <!-- <table>
                    
                <tr> -->
                
                <?php
                    $found_image = "false";
                    require "database.php";
                    $id = 1;
                    $ok = 1;
                    do
                    {
                        $found_image = false;
                        $stmt = $dbc->prepare("SELECT * FROM members WHERE id = :id");
                        $stmt->execute(array(':id' => $id));
                        $data = $stmt->fetch(PDO::FETCH_ASSOC);

                        $found_image = json_encode($data);
                        //echo $found_image . "<br\>";
                        //if($id==2) echo $data['secondname'];
                        if($found_image != "false")
                        {
                            //if($id % 3 == 1 && $id != 1) echo "</tr><tr>";
                            echo " <td> <div class=\"col-sm-4 text-center\"> <img class=\"img-responsive\" src=\"img/" . $data['imgname'] . "\" alt=\"\">         <h3>" . $data['firstname'] . " " . $data['secondname'] . "<small>" . $data['elo'] . " </small> </h3> </div></td>";
                        }
                        $id = $id + 1;


                    } while($found_image != "false")

                ?>
               <!-- </tr>
                </table> -->
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy;</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>