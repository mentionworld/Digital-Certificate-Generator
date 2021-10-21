 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title> Work Simple
    </title>
    <meta name="description" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main-content">
        <header>
            <div class="search-wrapper">
            <h1>certificate Generate</h1>
            </div>
            <div class="social-icons">
            <li><a class="active" href="single.php">Single</a></li>
            <li><a href="bulk.php">Bulk</a></li>
            </div>
        </header>
        <main>
        <div class="dash-cards">
                <div class="card-single">
                <div class="activity-card ">
                        <div class="tabel-responsive ">
                            <form action="s.generate.php" method="post" enctype="multipart/form-data">
                                <div class="frm">
                                <div>
                                        <label for="name">Select types</label>
                                    </div>
                                    <div>
                                    <select name="option" class="form-control"  onchange="change()" id="select">
                                            <option value="disable"> Select Category</option>
                                            <option value="1">Upskilling-Science</option>
                                            <option value="2">Upskilling-Commerce</option>
                                            <option value="3">Teacher's Training</option>
                                            <option value="4">Pre-School Teacher's Training</option>
                                            <option value="5">PD Camp</option>
                                            <option value="6">Parenting Workshop/Parvarish</option>
                                            <option value="7">Professionalism for Teacher's Workshop</option>
                                            <option value="8">Unnati</option>
                                            
                                        </select>
                                    </div>
                                    <div id="name">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" placeholder="Enter Name" class="form-control">
                                    </div>
                                    <div id="from">
                                        <label for="name">Institution</label>
                                        <input type="text" name="from" placeholder="Enter Institution/Organization Name" class="form-control">
                                    </div>
                                    <div id="date">
                                        <label for="name">Date</label>
                                        <input type="text" name="date" placeholder="Sep-Oct-2024 format" class="form-control">
                                    </div>
                                    
                                    
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="submit">
                                        Generate   
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
 <script>
     function change()
     {
     var Status=document.getElementById('select');
     
        if(Status.value==1 || Status.value==2 || Status.value==6 ||Status.value==7 ||Status.value==8 )
        {
            document.getElementById('from').style.display="none";
        }
        else{
            document.getElementById('from').style.display="inline";   
        }
       
     }
 </script>

            </body>
</html>