<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $from=$_POST['from'];
    $date=$_POST['date'];
    $value=$_POST['option'];
      header('content-type:image/jpeg');
        $font=realpath('georgia.ttf');

            if($value==1)//Up Skilling -science
            {
                 $image=imagecreatefromjpeg('temp/upskilling-science.jpg');
                 $color=imagecolorallocate($image,84,84,86);              
                if(strlen($name)>18)
                {
                    imagettftext($image,36,0,300,300,$color,$font,$name);
                }
                if(strlen($name)<=18 && strlen($name)>14)
                {
                     imagettftext($image,36,0,320,300,$color,$font,$name);
                }
               if(strlen($name)<=14 && strlen($name)>10)
                {
                     imagettftext($image,36,0,350,300,$color,$font,$name);
                }
                if(strlen($name)<=10 && strlen($name)>6)
                {
                     imagettftext($image,36,0,410,300,$color,$font,$name);
                }
                if(strlen($name)<=6)
                {
                    imagettftext($image,36,0,430,300,$color,$font,$name);
                }
                imagettftext($image,16,0,220,635,$color,$font,$date);
                imagejpeg($image,"images/Upskilling-Scie/$name.jpg");
                imagedestroy($image);
                               
            } 
                      
           if($value==2) //Upskilling Commerce
            {
                $image=imagecreatefromjpeg('temp/upskilling-commerce.jpg');
                $color=imagecolorallocate($image,84,84,86);
                            
                if(strlen($name)>18)
                {
                    imagettftext($image,36,0,300,300,$color,$font,$name);
                }
                if(strlen($name)<=18 && strlen($name)>14)
                {
                    imagettftext($image,36,0,320,300,$color,$font,$name);
                }
                if(strlen($name)<=14 && strlen($name)>10)
                {
                    imagettftext($image,36,0,350,300,$color,$font,$name);
                }
                if(strlen($name)<=10 && strlen($name)>6)
                {
                    imagettftext($image,36,0,410,300,$color,$font,$name);
                }
                if(strlen($name)<=6)
                {
                    imagettftext($image,36,0,430,300,$color,$font,$name);
                }
                            
                imagettftext($image,16,0,220,635,$color,$font,$date);
                imagejpeg($image,"images/Upskilling-Comm/$name.jpg");
                imagedestroy($image);
                            
            }
                     
            if($value==3) // Teacher training
            {
                $image=imagecreatefromjpeg('temp/teacher-training.jpg');
                $color=imagecolorallocate($image,84,84,86);          
                if(strlen($name)>18)
                {
                    imagettftext($image,36,0,300,300,$color,$font,$name);
                }
                if(strlen($name)<=18 && strlen($name)>14)
                {
                    imagettftext($image,36,0,320,300,$color,$font,$name);
                }
                if(strlen($name)<=14 && strlen($name)>10)
                {
                    imagettftext($image,36,0,350,300,$color,$font,$name);
                }
                if(strlen($name)<=10 && strlen($name)>6)
                {
                    imagettftext($image,36,0,410,300,$color,$font,$name);
                }
                if(strlen($name)<=6)
                {
                    imagettftext($image,36,0,430,300,$color,$font,$name);
                }
                if(strlen($from)>68)
                {
                    imagettftext($image,18,0,100,375,$color,$font,$from);
                }
                if(strlen($from)<=68 && strlen($from)>64)
                {    
                    imagettftext($image,18,0,160,375,$color,$font,$from);
                }
                if(strlen($from)<=64 && strlen($from)>60)
                {    
                    imagettftext($image,18,0,180,375,$color,$font,$from);
                }
                if(strlen($from)<=60 && strlen($from)>56)
                {    
                    imagettftext($image,18,0,200,375,$color,$font,$from);
                }
                if(strlen($from)<=56 && strlen($from)>52)
                {    
                    imagettftext($image,18,0,220,375,$color,$font,$from);
                }
                if(strlen($from)<=52 && strlen($from)>48)
                {    
                    imagettftext($image,18,0,240,375,$color,$font,$from);
                }
                if(strlen($from)<=48 && strlen($from)>44)
                {    
                    imagettftext($image,18,0,260,375,$color,$font,$from);
                }
                if(strlen($from)<=44 && strlen($from)>40)
                {    
                    imagettftext($image,18,0,280,375,$color,$font,$from);
                }
                if(strlen($from)<=40 && strlen($from)>36)
                {    
                    imagettftext($image,18,0,300,375,$color,$font,$from);
                }
                if(strlen($from)<=36 && strlen($from)>32)
                {    
                    imagettftext($image,18,0,320,375,$color,$font,$from);
                }
                if(strlen($from)<=32 && strlen($from)>28)
                {    
                    imagettftext($image,18,0,340,375,$color,$font,$from);
                }
                if(strlen($from)<=28 && strlen($from)>24)
                {    
                    imagettftext($image,18,0,360,375,$color,$font,$from);
                }
                if(strlen($from)<=24 && strlen($from)>20)
                {    
                    imagettftext($image,18,0,380,375,$color,$font,$from);
                }
                if(strlen($from)<=20 && strlen($from)>16)
                {    
                    imagettftext($image,18,0,400,375,$color,$font,$from);
                }
                if(strlen($from)<=16)
                {
                    imagettftext($image,18,0,420,375,$color,$font,$from);
                }
                imagettftext($image,16,0,220,635,$color,$font,$date);
                imagejpeg($image,"images/Teacher_Training/$name.jpg");
                imagedestroy($image);
                            
            }
            if($value==4) // Pre School  Teacher Training 
            {
                $image=imagecreatefromjpeg('temp/pre-school.jpg');
                $color=imagecolorallocate($image,84,84,86);                    
                if(strlen($name)>18)
                {
                    imagettftext($image,36,0,300,300,$color,$font,$name);
                }
                if(strlen($name)<=18 && strlen($name)>14)
                {
                    imagettftext($image,36,0,320,300,$color,$font,$name);
                }
                if(strlen($name)<=14 && strlen($name)>10)
                {
                    imagettftext($image,36,0,350,300,$color,$font,$name);
                }
                if(strlen($name)<=10 && strlen($name)>6)
                {
                    imagettftext($image,36,0,410,300,$color,$font,$name);
                }
                if(strlen($name)<=6)
                {
                    imagettftext($image,36,0,430,300,$color,$font,$name);
                }
                if(strlen($from)>68)
                {
                    imagettftext($image,18,0,100,375,$color,$font,$from);
                }
                if(strlen($from)<=68 && strlen($from)>64)
                {    
                    imagettftext($image,18,0,160,375,$color,$font,$from);
                }
                if(strlen($from)<=64 && strlen($from)>60)
                {    
                    imagettftext($image,18,0,180,375,$color,$font,$from);
                }
                if(strlen($from)<=60 && strlen($from)>56)
                {    
                    imagettftext($image,18,0,200,375,$color,$font,$from);
                }
                if(strlen($from)<=56 && strlen($from)>52)
                {    
                    imagettftext($image,18,0,220,375,$color,$font,$from);
                }
                if(strlen($from)<=52 && strlen($from)>48)
                {    
                    imagettftext($image,18,0,240,375,$color,$font,$from);
                }
                if(strlen($from)<=48 && strlen($from)>44)
                {    
                    imagettftext($image,18,0,260,375,$color,$font,$from);
                }
                if(strlen($from)<=44 && strlen($from)>40)
                {    
                    imagettftext($image,18,0,280,375,$color,$font,$from);
                }
                if(strlen($from)<=40 && strlen($from)>36)
                {    
                    imagettftext($image,18,0,300,375,$color,$font,$from);
                }
                if(strlen($from)<=36 && strlen($from)>32)
                {    
                    imagettftext($image,18,0,320,375,$color,$font,$from);
                }
                if(strlen($from)<=32 && strlen($from)>28)
                {    
                    imagettftext($image,18,0,340,375,$color,$font,$from);
                }
                if(strlen($from)<=28 && strlen($from)>24)
                {    
                    imagettftext($image,18,0,360,375,$color,$font,$from);
                }
                if(strlen($from)<=24 && strlen($from)>20)
                {    
                    imagettftext($image,18,0,380,375,$color,$font,$from);
                }
                if(strlen($from)<=20 && strlen($from)>16)
                {    
                    imagettftext($image,18,0,400,375,$color,$font,$from);
                }
                if(strlen($from)<=16)
                {
                    imagettftext($image,18,0,420,375,$color,$font,$from);
                }
                imagettftext($image,16,0,220,635,$color,$font,$date);                 
                imagejpeg($image,"images/Pre-School/$name.jpg");
                imagedestroy($image);
                            
            }
            if($value==5) // PD Camp
            {
                $image=imagecreatefromjpeg('temp/pd.jpg');
                $color=imagecolorallocate($image,84,84,86);            
                if(strlen($name)>18)
                {
                    imagettftext($image,36,0,300,300,$color,$font,$name);
                }
                if(strlen($name)<=18 && strlen($name)>14)
                {
                    imagettftext($image,36,0,320,300,$color,$font,$name);
                }
                if(strlen($name)<=14 && strlen($name)>10)
                {
                    imagettftext($image,36,0,350,300,$color,$font,$name);
                }
                if(strlen($name)<=10 && strlen($name)>6)
                {
                    imagettftext($image,36,0,410,300,$color,$font,$name);
                }
                if(strlen($name)<=6)
                {
                    imagettftext($image,36,0,430,300,$color,$font,$name);
                }
                if(strlen($from)>68)
                {
                    imagettftext($image,18,0,100,375,$color,$font,$from);
                }
                if(strlen($from)<=68 && strlen($from)>64)
                {    
                    imagettftext($image,18,0,160,375,$color,$font,$from);
                }
                if(strlen($from)<=64 && strlen($from)>60)
                {    
                    imagettftext($image,18,0,180,375,$color,$font,$from);
                }
                if(strlen($from)<=60 && strlen($from)>56)
                {    
                    imagettftext($image,18,0,200,375,$color,$font,$from);
                }
                if(strlen($from)<=56 && strlen($from)>52)
                {    
                    imagettftext($image,18,0,220,375,$color,$font,$from);
                }
                if(strlen($from)<=52 && strlen($from)>48)
                {    
                    imagettftext($image,18,0,240,375,$color,$font,$from);
                }
                if(strlen($from)<=48 && strlen($from)>44)
                {    
                    imagettftext($image,18,0,260,375,$color,$font,$from);
                }
                if(strlen($from)<=44 && strlen($from)>40)
                {    
                    imagettftext($image,18,0,280,375,$color,$font,$from);
                }
                if(strlen($from)<=40 && strlen($from)>36)
                {    
                    imagettftext($image,18,0,300,375,$color,$font,$from);
                }
                if(strlen($from)<=36 && strlen($from)>32)
                {    
                    imagettftext($image,18,0,320,375,$color,$font,$from);
                }
                if(strlen($from)<=32 && strlen($from)>28)
                {    
                    imagettftext($image,18,0,340,375,$color,$font,$from);
                }
                if(strlen($from)<=28 && strlen($from)>24)
                {    
                    imagettftext($image,18,0,360,375,$color,$font,$from);
                }
                if(strlen($from)<=24 && strlen($from)>20)
                {    
                    imagettftext($image,18,0,380,375,$color,$font,$from);
                }
                if(strlen($from)<=20 && strlen($from)>16)
                {    
                    imagettftext($image,18,0,400,375,$color,$font,$from);
                }
                if(strlen($from)<=16)
                {
                    imagettftext($image,18,0,420,375,$color,$font,$from);
                }                               
                imagettftext($image,16,0,220,635,$color,$font,$date);
                imagejpeg($image,"images//PD/$name.jpg");
                imagedestroy($image);
                            
            }
            if($value==6) //parvarish 
            {
                $image=imagecreatefromjpeg('temp/parvarish.jpg');
                $color=imagecolorallocate($image,84,84,86);          
                if(strlen($name)>18)
                {
                    imagettftext($image,36,0,300,300,$color,$font,$name);
                }
                if(strlen($name)<=18 && strlen($name)>14)
                {
                    imagettftext($image,36,0,320,300,$color,$font,$name);
                }
                if(strlen($name)<=14 && strlen($name)>10)
                {
                    imagettftext($image,36,0,350,300,$color,$font,$name);
                }
                if(strlen($name)<=10 && strlen($name)>6)
                {
                    imagettftext($image,36,0,410,300,$color,$font,$name);
                }
                if(strlen($name)<=6)
                {
                    imagettftext($image,36,0,430,300,$color,$font,$name);
                }        
                    imagettftext($image,16,0,220,635,$color,$font,$date);
                    imagejpeg($image,"images/Parvarish/$name.jpg");
                    imagedestroy($image);        
            }
                
            if($value==7) //Professionalism 
            {
                $image=imagecreatefromjpeg('temp/professionalism.jpg');
                $color=imagecolorallocate($image,84,84,86);
                if(strlen($name)>18)
                {
                    imagettftext($image,36,0,300,300,$color,$font,$name);
                }
                if(strlen($name)<=18 && strlen($name)>14)
                {
                    imagettftext($image,36,0,320,300,$color,$font,$name);
                }
                if(strlen($name)<=14 && strlen($name)>10)
                {
                    imagettftext($image,36,0,350,300,$color,$font,$name);
                }
                if(strlen($name)<=10 && strlen($name)>6)
                {
                    imagettftext($image,36,0,410,300,$color,$font,$name);
                }
                if(strlen($name)<=6)
                {
                    imagettftext($image,36,0,430,300,$color,$font,$name);
                }
                imagettftext($image,16,0,220,635,$color,$font,$date);
                imagejpeg($image,"images/Professionalism/$name.jpg");
                imagedestroy($image);
            }
            if($value==8) // Unnati
            {
                $image=imagecreatefromjpeg('temp/unnati.jpg');
                $color=imagecolorallocate($image,84,84,86);
                if(strlen($name)>18)
                {
                    imagettftext($image,36,0,300,300,$color,$font,$name);
                }
                if(strlen($name)<=18 && strlen($name)>14)
                {
                    imagettftext($image,36,0,320,300,$color,$font,$name);
                }
                if(strlen($name)<=14 && strlen($name)>10)
                {
                    imagettftext($image,36,0,350,300,$color,$font,$name);
                }
                if(strlen($name)<=10 && strlen($name)>6)
                {
                    imagettftext($image,36,0,410,300,$color,$font,$name);
                }
                if(strlen($name)<=6)
                {
                    imagettftext($image,36,0,430,300,$color,$font,$name);
                }
                imagettftext($image,16,0,220,635,$color,$font,$date);
                imagejpeg($image,"images/Unnati/$name.jpg");
                imagedestroy($image);
            }
            header('location:single.php');
            die();
        }
       else
        {
            echo "Pleased Upload a Xlsx File Only !!!!!!!";
        }

?>