<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Downloadables</title>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- Logo -->
    <link rel="icon" type="image/x-icon" href="https://bleepinghost.online/images/bleepinghost.png">
    
    
</head>
<body class="the-body">



<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
        
    <div class="container-fluid">
    

            <a class="navbar-brand fw-bold" href="http://bleepinghost.online/">
                <img src="http://bleepinghost.online/images/bleepinghost.png" alt="logo" height="50" class="d-inline-block">
                The Bleeping Host
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center nav-text-size" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-decoration-underline" aria-current="page" href="http://bleepinghost.online/">Back to Home</a>
                    </li>
                </ul>
            </div>
        
    </div> <!-- container-fluid -->

</nav>


    
    
    
    <h2 class="text-center display-5 fw-bold" style="margin-top: 100px;">Downloadable Files</h2>
    <hr>
    <?php

    $dir = "downloadables/";


    if(!file_exists($dir)) {

        echo "<div class=' container my-5 p-5 text-center'>";
        echo "<img height='100' src='http://bleepinghost.online/images/repair.png' alt='repair-logo'>";
        echo "<p class='text-center fw-bold fs-3'>Sorry, this page is under maintenance.</p>";
        echo "</div>";

        
        

    } else {

        $scanned_files = scandir($dir);

        $files = array_diff($scanned_files, ['.', '..']);




        
        if(count($files) <= 2) {

            echo "<div class=' container my-5 p-5'>";
            echo "<p class='text-center fw-bold fs-3'>Sheesh! No files for now!</p>";
            echo "</div>";




            


        } else {
            
                //Table row- Headers
                echo "<div class='container my-5 p-1'>";

                echo "<div class='text-start text-white fs-2 p-3 bg-dark'> $dir";
                echo "</div>";
        
        
        
        
                echo "<div class='border border-2 p-1'>";
            echo "<div class='table-responsive'>";
                echo "<table class='table table-striped table-hover '>";
                echo "<thead>";
                echo "<tr>";
        
                //the headers
                echo "<th scope='col'>File Name</th>";
                echo "<th scope='col'>Size</th>";
                echo "<th scope='col'>Last Modified</th>";
                echo "</tr>";
                echo "</thead>";
            
            
            

            // File Size Formatting
            function formatSizeUnits($bytes) {
            
                if ($bytes >= 1073741824)
                {
                    $bytes = number_format($bytes / 1073741824, 2) . ' GB';
                }
                elseif ($bytes >= 1048576)
                {
                    $bytes = number_format($bytes / 1048576, 2) . ' MB';
                }
                elseif ($bytes >= 1024)
                {
                    $bytes = number_format($bytes / 1024, 2) . ' KB';
                }
                elseif ($bytes > 1)
                {
                    $bytes = $bytes . ' bytes';
                }
                elseif ($bytes == 1)
                {
                    $bytes = $bytes . ' byte';
                }
                else
                {
                    $bytes = '0 bytes';
                }

                return $bytes;
            }


            
            



            // Start of Directory Looping

            foreach($files as $file) {
                

                
                    
                $size = filesize( $dir . $file);


                date_default_timezone_set('Asia/Manila');

                $filesize = formatSizeUnits($size);

                $time = filemtime($dir . $file);

                $lastModified = date("Y-m-d H:i:s", $time);


                    
                // echo "<a href= 'images/" . $file . " ' download> $file " . "</a> " . "Size: " . $filesize  . " Last Modified: " . $lastModified . "<br><br>" ;




                //Table row - data
                echo "<tr>";
                echo "<td>" . "<a class='lead text-danger fw-normal' href= '$dir" . $file . " ' download> $file " . "</a>" . "</td>";
                echo "<td>" . $filesize . "</td>";
                echo "<td>" . $lastModified . "</td>";
                echo "</tr>";

            }
                echo "</table>";
                echo "</div>";
                echo "</div>";
            echo "</div>";




            
        }

    }


    ?> 
    <!-- End of PHP -->
    
    

    
    









        <!-- Footer Sect -->
        <footer id="footer" style="margin-top: 500px;">
        
        <div class="container-fluid bg-dark p-4">
            
            <div class="container text-center">
                
                <div class="row justify-content-center">
                    
                    
                    <!-- Site Navigation -->
                    <div class="col-12 text-center">
                        
                        <h2 class="mb-5 text-white fs-3 fw-bold">Site Navigation</h2>
                        <a href="http://bleepinghost.online/" class="fs-5 text-white">Back to Home</a><br>
                        
                        
                    </div>
                    

                    <div class="col-12 text-white text-center" style="margin-top: 100px;">
                        
                        <h2 class="fw-bold">The Bleeping Host</h2>
                        <p class="lead">Copyright &copy; 2023. Designed by Jess Bugs</p>
                        
                    </div>



                    
                </div> <!-- row -->
                
                
                
            </div>
            
        </div>
        
        
    </footer>
    

    
    
    
    
    
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>
