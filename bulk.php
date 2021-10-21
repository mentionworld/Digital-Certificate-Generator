 
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
            <li ><a href="single.php">Single</a></li>
            <li><a class="active"  href="bulk.php">Bulk</a></li>
            </div>
        </header>
        <main>
        <div class="dash-cards">
                <div class="card-single">
                <div class="activity-card ">
                        <div class="tabel-responsive ">
                            <form action="generate.php" method="post" enctype="multipart/form-data">
                                <div class="frm">
                                <div>
                                        <label for="name">Select types</label>
                                    </div>
                                    <select name="cate_id" class="form-control" id="">
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
                                    <div>
                                        <label for="name">Upload File</label>
                                    </div>
                                    <div>
                                        <input type="file" name="doc" id="" class="form-control">
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
            </body>
</html>