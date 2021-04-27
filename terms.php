
        <?php include"allcss.php"; ?>

    </head>
    <body>
        <div class="wrapper">
            <!-- header start -->

            <?php include "header.php"; ?>


            <div class="breadcrumb-area mt-37 hm-4-padding">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center border-top-2">
                      <h2>Terms and Condition</h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li> Terms and Condition </li>
                        </ul>
                    </div>
                </div>
            </div>
         
            <div class="about-us-area hm-3-padding pt-30 pb-30">
                <div class="container-fluid">
                    <div class="row">
                      
                        <div class="col-lg-12">
                            <div class="about-us-details">
                             <p class="about-us-pera-mb">
                            <?php include('db.php');
                                $result = mysqli_query($con,"SELECT * FROM terms where id = 1");
                                while($row = mysqli_fetch_array($result))
                                {
                                echo ''.$row['content'].''; 
                                }
                            ?>
                        </p>
                        

                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
                    <?php include"footer.php"; ?>

        </div>
        
            <?php include"allscript.php"; ?>
