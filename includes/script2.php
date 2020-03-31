<?php 
session_start();

 if(!isset($_POST['next2'])){
        header("Location: ../index.php");
        exit();
    }else if(!isset($_SESSION['p_name'])){
        header("Location: ../index.php");
        exit();
    }else{
        $p_name = $_SESSION['p_name'];
        if(file_exists("../../$p_name")){
            header("Location: ../index.php?Project_alredy_exists");
            exit();
        }elseif(!isset($_POST['html']) && !isset($_POST['css']) && !isset($_POST['js']) && !isset($_POST['jquery']) && !isset($_POST['php']) && !isset($_POST['wp']) ){
            header("Location: ../index.php?no_technology_choosen");
            exit();
        }else{

            if(isset($_POST['html']) && isset($_POST['js']) && isset($_POST['php']) && isset($_POST['jquery']) && isset($_POST['css'])){

                #Varijable
                $html = $_POST['html'];
                $js = $_POST['js'];
                $jquery = $_POST['jquery'];
                $php= $_POST['php'];
                $css = $_POST['css'];

                #---map creation

                if(isset($_SESSION['dis'])){
                    $dis = $_SESSION['dis'];
                    mkdir("../../$p_name",0777,true);
                    $h=fopen("../../$p_name/dis.txt", 'x');
                    fwrite($h,$dis);
                }

                #---read 

                #html
                $rh5=fopen("../templates/htmlcssjsjqphp.txt" , 'r');
                $redt5= fread($rh5,filesize("../templates/htmlcssjsjqphp.txt"));
                fclose($rh5);

                #jquery
                $rhjq=fopen("../templates/jq.txt" , 'r');
                $redtjq= fread($rhjq,filesize("../templates/jq.txt"));
                fclose($rhjq);

                #css
                $rhcss=fopen("../templates/css.txt" , 'r');
                $redtcss= fread($rhcss,filesize("../templates/css.txt"));
                fclose($rhcss);

                #---write 

                #html
                $h5= fopen("../../$p_name/index.php", 'x');
                fwrite($h5,$redt5);

                #jq
                mkdir("../../$p_name/js",0777,true);
                $hjq= fopen("../../$p_name/js/jquery.js", 'x');
                fwrite($hjq,$redtjq);

                #js
                mkdir("../../$p_name/js",0777,true);
                fopen("../../$p_name/js/app.js", 'x');
                
                #css
                mkdir("../../$p_name/css",0777,true);
                $hcss= fopen("../../$p_name/css/stil.css", 'x');
                fwrite($hcss,$redtcss);

                #redirect

                header("Location: ../site3.php");
                exit();
            }

            if(isset($_POST['html']) && isset($_POST['js']) && isset($_POST['php']) && isset($_POST['jquery'])){

                #Varijable
                $html = $_POST['html'];
                $js = $_POST['js'];
                $jquery = $_POST['jquery'];
                $php= $_POST['php'];

                #---map creation

                if(isset($_SESSION['dis'])){
                    $dis = $_SESSION['dis'];
                    mkdir("../../$p_name",0777,true);
                    $h=fopen("../../$p_name/dis.txt", 'x');
                    fwrite($h,$dis);
                }

                #---read 

                #html
                $rh5=fopen("../templates/htmljsjqphp.txt" , 'r');
                $redt5= fread($rh5,filesize("../templates/htmljsjqphp.txt"));
                fclose($rh5);

                #jquery
                $rhjq=fopen("../templates/jq.txt" , 'r');
                $redtjq= fread($rhjq,filesize("../templates/jq.txt"));
                fclose($rhjq);

                

                #---write 

                #html
                $h5= fopen("../../$p_name/index.php", 'x');
                fwrite($h5,$redt5);

                #jq
                mkdir("../../$p_name/js",0777,true);
                $hjq= fopen("../../$p_name/js/jquery.js", 'x');
                fwrite($hjq,$redtjq);

                #js
                mkdir("../../$p_name/js",0777,true);
                fopen("../../$p_name/js/app.js", 'x');
                

                #redirect

                header("Location: ../site3.php");
                exit();
            }

            if(isset($_POST['html']) && isset($_POST['css']) && isset($_POST['php']) && isset($_POST['jquery'])){

                #Varijable
                $html = $_POST['html'];
                $css = $_POST['css'];
                $jquery = $_POST['jquery'];
                $php= $_POST['php'];

                #---map creation

                if(isset($_SESSION['dis'])){
                    $dis = $_SESSION['dis'];
                    mkdir("../../$p_name",0777,true);
                    $h=fopen("../../$p_name/dis.txt", 'x');
                    fwrite($h,$dis);
                }

                #---read 

                #html
                $rh5=fopen("../templates/htmlcssjqphp.txt" , 'r');
                $redt5= fread($rh5,filesize("../templates/htmlcssjqphp.txt"));
                fclose($rh5);

                #jquery
                $rhjq=fopen("../templates/jq.txt" , 'r');
                $redtjq= fread($rhjq,filesize("../templates/jq.txt"));
                fclose($rhjq);

                #css
                $rhcss=fopen("../templates/css.txt" , 'r');
                $redtcss= fread($rhcss,filesize("../templates/css.txt"));
                fclose($rhcss);

                #---write 

                #html
                $h5= fopen("../../$p_name/index.php", 'x');
                fwrite($h5,$redt5);

                #jq
                mkdir("../../$p_name/js",0777,true);
                $hjq= fopen("../../$p_name/js/jquery.js", 'x');
                fwrite($hjq,$redtjq);

                #css
                mkdir("../../$p_name/css",0777,true);
                $hcss= fopen("../../$p_name/css/stil.css", 'x');
                fwrite($hcss,$redtcss);
                
                

                #redirect

                header("Location: ../site3.php");
                exit();
            }

            if(isset($_POST['html']) && isset($_POST['css']) && isset($_POST['js']) && isset($_POST['php'])){

                #Varijable
                $html = $_POST['html'];
                $php = $_POST['php'];
                $css = $_POST['css'];
                $js= $_POST['js'];

                #---map creation

                if(isset($_SESSION['dis'])){
                    $dis = $_SESSION['dis'];
                    mkdir("../../$p_name",0777,true);
                    $h=fopen("../../$p_name/dis.txt", 'x');
                    fwrite($h,$dis);
                }

                #---read 

                #html
                $rh5=fopen("../templates/htmlcssjsphp.txt" , 'r');
                $redt5= fread($rh5,filesize("../templates/htmlcssjsphp.txt"));
                fclose($rh5);

                
                #css
                $rhcss=fopen("../templates/css.txt" , 'r');
                $redtcss= fread($rhcss,filesize("../templates/css.txt"));
                fclose($rhcss);

                #---write 

                #html
                $h5= fopen("../../$p_name/index.php", 'x');
                fwrite($h5,$redt5);

                #js
                mkdir("../../$p_name/js",0777,true);
                fopen("../../$p_name/js/app.js", 'x');

                #css
                mkdir("../../$p_name/css",0777,true);
                $hcss= fopen("../../$p_name/css/stil.css", 'x');
                fwrite($hcss,$redtcss);
                
                

                #redirect

                header("Location: ../site3.php");
                exit();
            }

            if(isset($_POST['html']) && isset($_POST['css']) && isset($_POST['js']) && isset($_POST['jquery'])){

                #Varijable
                $html = $_POST['html'];
                $php = $_POST['php'];
                $jquery = $_POST['jquery'];
                $js= $_POST['js'];

                #---map creation

                if(isset($_SESSION['dis'])){
                    $dis = $_SESSION['dis'];
                    mkdir("../../$p_name",0777,true);
                    $h=fopen("../../$p_name/dis.txt", 'x');
                    fwrite($h,$dis);
                }

                #---read 

                #html
                $rh5=fopen("../templates/htmlcssjsjq.txt" , 'r');
                $redt5= fread($rh5,filesize("../templates/htmlcssjsjq.txt"));
                fclose($rh5);

                #jquery
                $rhjq=fopen("../templates/jq.txt" , 'r');
                $redtjq= fread($rhjq,filesize("../templates/jq.txt"));
                fclose($rhjq);

                #css
                $rhcss=fopen("../templates/css.txt" , 'r');
                $redtcss= fread($rhcss,filesize("../templates/css.txt"));
                fclose($rhcss);

                #---write 

                #html
                $h5= fopen("../../$p_name/index.html", 'x');
                fwrite($h5,$redt5);

                #jq
                mkdir("../../$p_name/js",0777,true);
                $hjq= fopen("../../$p_name/js/jquery.js", 'x');
                fwrite($hjq,$redtjq);

                #js
                mkdir("../../$p_name/js",0777,true);
                fopen("../../$p_name/js/app.js", 'x');

                #css
                mkdir("../../$p_name/css",0777,true);
                $hcss= fopen("../../$p_name/css/stil.css", 'x');
                fwrite($hcss,$redtcss);
                
                

                #redirect

                header("Location: ../site3.php");
                exit();
            }

            if(isset($_POST['html']) && isset($_POST['php']) && isset($_POST['jquery'])){

                #Varijable
                $html = $_POST['html'];
                $php = $_POST['php'];
                $jquery = $_POST['jquery'];

                #---map creation

                if(isset($_SESSION['dis'])){
                    $dis = $_SESSION['dis'];
                    mkdir("../../$p_name",0777,true);
                    $h=fopen("../../$p_name/dis.txt", 'x');
                    fwrite($h,$dis);
                }

                #---read 

                #html
                $rh5=fopen("../templates/htmljqphp.txt" , 'r');
                $redt5= fread($rh5,filesize("../templates/htmljqphp.txt"));
                fclose($rh5);

                #jquery
                $rhjq=fopen("../templates/jq.txt" , 'r');
                $redtjq= fread($rhjq,filesize("../templates/jq.txt"));
                fclose($rhjq);

                #---write 

                #html
                $h5= fopen("../../$p_name/index.php", 'x');
                fwrite($h5,$redt5);

                #jq
                mkdir("../../$p_name/js",0777,true);
                $hjq= fopen("../../$p_name/js/jquery.js", 'x');
                fwrite($hjq,$redtjq);

                #redirect

                header("Location: ../site3.php");
                exit();
            }

            if(isset($_POST['html']) && isset($_POST['js']) && isset($_POST['php'])){

                #Varijable
                $html = $_POST['html'];
                $js = $_POST['js'];
                $php = $_POST['php'];

                #---map creation

                if(isset($_SESSION['dis'])){
                    $dis = $_SESSION['dis'];
                    mkdir("../../$p_name",0777,true);
                    $h=fopen("../../$p_name/dis.txt", 'x');
                    fwrite($h,$dis);
                }

                #---read 

                #html
                $rh5=fopen("../templates/htmljsphp.txt" , 'r');
                $redt5= fread($rh5,filesize("../templates/htmljsphp.txt"));
                fclose($rh5);


                #---write 

                #html
                $h5= fopen("../../$p_name/index.php", 'x');
                fwrite($h5,$redt5);

                #js
                mkdir("../../$p_name/js",0777,true);
                fopen("../../$p_name/js/app.js", 'x');

                #redirect

                header("Location: ../site3.php");
                exit();
            }

            if(isset($_POST['html']) && isset($_POST['js']) && isset($_POST['jquery'])){

                #Varijable
                $html = $_POST['html'];
                $js = $_POST['js'];
                $jquery = $_POST['jquery'];

                #---map creation

                if(isset($_SESSION['dis'])){
                    $dis = $_SESSION['dis'];
                    mkdir("../../$p_name",0777,true);
                    $h=fopen("../../$p_name/dis.txt", 'x');
                    fwrite($h,$dis);
                }

                #---read 

                #html
                $rh5=fopen("../templates/htmljsjq.txt" , 'r');
                $redt5= fread($rh5,filesize("../templates/htmljsjq.txt"));
                fclose($rh5);

                #jquery
                $rhjq=fopen("../templates/jq.txt" , 'r');
                $redtjq= fread($rhjq,filesize("../templates/jq.txt"));
                fclose($rhjq);

                #---write 

                #html
                $h5= fopen("../../$p_name/index.html", 'x');
                fwrite($h5,$redt5);

                #jq
                mkdir("../../$p_name/js",0777,true);
                $hjq= fopen("../../$p_name/js/jquery.js", 'x');
                fwrite($hjq,$redtjq);

                #js
                mkdir("../../$p_name/js",0777,true);
                fopen("../../$p_name/js/app.js", 'x');

                #redirect

                header("Location: ../site3.php");
                exit();
            }

            if(isset($_POST['html']) && isset($_POST['css']) && isset($_POST['php'])){

                #Varijable
                $html = $_POST['html'];
                $php = $_POST['php'];
                $css = $_POST['css'];

                #---map creation

                if(isset($_SESSION['dis'])){
                    $dis = $_SESSION['dis'];
                    mkdir("../../$p_name",0777,true);
                    $h=fopen("../../$p_name/dis.txt", 'x');
                    fwrite($h,$dis);
                }

                #---read 

                #html
                $rh5=fopen("../templates/htmlcssphp.txt" , 'r');
                $redt5= fread($rh5,filesize("../templates/htmlcssphp.txt"));
                fclose($rh5);

                #css
                $rhcss=fopen("../templates/css.txt" , 'r');
                $redtcss= fread($rhcss,filesize("../templates/css.txt"));
                fclose($rhcss);


                #---write 

                #html
                $h5= fopen("../../$p_name/index.php", 'x');
                fwrite($h5,$redt5);

                #css
                mkdir("../../$p_name/css",0777,true);
                $hcss= fopen("../../$p_name/css/stil.css", 'x');
                fwrite($hcss,$redtcss);

                

                #redirect

                header("Location: ../site3.php");
                exit();
            }

            if(isset($_POST['html']) && isset($_POST['css']) && isset($_POST['jquery'])){

                #Varijable
                $html = $_POST['html'];
                $php = $_POST['php'];
                $jquery = $_POST['jquery'];

                #---map creation

                if(isset($_SESSION['dis'])){
                    $dis = $_SESSION['dis'];
                    mkdir("../../$p_name",0777,true);
                    $h=fopen("../../$p_name/dis.txt", 'x');
                    fwrite($h,$dis);
                }

                #---read 

                #html
                $rh5=fopen("../templates/htmlcssjq.txt" , 'r');
                $redt5= fread($rh5,filesize("../templates/htmlcssjq.txt"));
                fclose($rh5);

                #css
                $rhcss=fopen("../templates/css.txt" , 'r');
                $redtcss= fread($rhcss,filesize("../templates/css.txt"));
                fclose($rhcss);


                #---write 

                #html
                $h5= fopen("../../$p_name/index.html", 'x');
                fwrite($h5,$redt5);

                #jq
                mkdir("../../$p_name/js",0777,true);
                fopen("../../$p_name/js/jquery.js", 'x');

                #css
                mkdir("../../$p_name/css",0777,true);
                $hcss= fopen("../../$p_name/css/stil.css", 'x');
                fwrite($hcss,$redtcss);

                

                #redirect

                header("Location: ../site3.php");
                exit();
            }

            if(isset($_POST['html']) && isset($_POST['css']) && isset($_POST['js'])){

                #Varijable
                $html = $_POST['html'];
                $php = $_POST['php'];
                $js = $_POST['js'];

                #---map creation

                if(isset($_SESSION['dis'])){
                    $dis = $_SESSION['dis'];
                    mkdir("../../$p_name",0777,true);
                    $h=fopen("../../$p_name/dis.txt", 'x');
                    fwrite($h,$dis);
                }

                #---read 

                #html
                $rh5=fopen("../templates/htmlcssjs.txt" , 'r');
                $redt5= fread($rh5,filesize("../templates/htmlcssjs.txt"));
                fclose($rh5);

                #css
                $rhcss=fopen("../templates/css.txt" , 'r');
                $redtcss= fread($rhcss,filesize("../templates/css.txt"));
                fclose($rhcss);


                #---write 

                #html
                $h5= fopen("../../$p_name/index.html", 'x');
                fwrite($h5,$redt5);

                #js
                mkdir("../../$p_name/js",0777,true);
                fopen("../../$p_name/js/app.js", 'x');

                #css
                mkdir("../../$p_name/css",0777,true);
                $hcss= fopen("../../$p_name/css/stil.css", 'x');
                fwrite($hcss,$redtcss);

                

                #redirect

                header("Location: ../site3.php");
                exit();
            }

            if(isset($_POST['html']) && isset($_POST['php'])){

                #Varijable
                $html = $_POST['html'];
                $php = $_POST['php'];

                #---map creation

                if(isset($_SESSION['dis'])){
                    $dis = $_SESSION['dis'];
                    mkdir("../../$p_name",0777,true);
                    $h=fopen("../../$p_name/dis.txt", 'x');
                    fwrite($h,$dis);
                }

                #---read 

                #html
                $rh5=fopen("../templates/htmlphp.txt" , 'r');
                $redt5= fread($rh5,filesize("../templates/htmlphp.txt"));
                fclose($rh5);


                #---write 

                #html
                $h5= fopen("../../$p_name/index.php", 'x');
                fwrite($h5,$redt5);

                

                #redirect

                header("Location: ../site3.php");
                exit();
            }

            if(isset($_POST['html']) && isset($_POST['jquery'])){

                #Varijable
                $html = $_POST['html'];
                $jquery = $_POST['jquery'];

                #---map creation

                if(isset($_SESSION['dis'])){
                    $dis = $_SESSION['dis'];
                    mkdir("../../$p_name",0777,true);
                    $h=fopen("../../$p_name/dis.txt", 'x');
                    fwrite($h,$dis);
                }

                #---read 

                #html
                $rh4=fopen("../templates/htmljq.txt" , 'r');
                $redt4= fread($rh4,filesize("../templates/htmljq.txt"));
                fclose($rh4);


                #---write 

                #html
                $h4= fopen("../../$p_name/index.html", 'x');
                fwrite($h4,$redt4);

                #js
                mkdir("../../$p_name/js",0777,true);
                fopen("../../$p_name/js/jquery.js", 'x');
                

                #redirect

                header("Location: ../site3.php");
                exit();
            }
            

            if(isset($_POST['html']) && isset($_POST['js'])){

                #Varijable
                $html = $_POST['html'];
                $js = $_POST['js'];

                #---map creation

                if(isset($_SESSION['dis'])){
                    $dis = $_SESSION['dis'];
                    mkdir("../../$p_name",0777,true);
                    $h=fopen("../../$p_name/dis.txt", 'x');
                    fwrite($h,$dis);
                }

                #---read 

                #html
                $rh3=fopen("../templates/htmljs.txt" , 'r');
                $redt3= fread($rh3,filesize("../templates/htmljs.txt"));
                fclose($rh3);


                #---write 

                #html
                $h3= fopen("../../$p_name/index.html", 'x');
                fwrite($h3,$redt3);

                #js
                mkdir("../../$p_name/js",0777,true);
                fopen("../../$p_name/js/app.js", 'x');
                

                #redirect

                header("Location: ../site3.php");
                exit();
            }

            if(isset($_POST['html']) && isset($_POST['css'])){

                #Varijable
                $html = $_POST['html'];
                $css = $_POST['css'];

                #---map creation

                if(isset($_SESSION['dis'])){
                    $dis = $_SESSION['dis'];
                    mkdir("../../$p_name",0777,true);
                    $h=fopen("../../$p_name/dis.txt", 'x');
                    fwrite($h,$dis);
                }

                #---read 

                #html
                $rh2=fopen("../templates/htmlcss.txt" , 'r');
                $redt2= fread($rh2,filesize("../templates/htmlcss.txt"));
                fclose($rh2);

                #css
                $rhcss=fopen("../templates/css.txt" , 'r');
                $redtcss= fread($rhcss,filesize("../templates/css.txt"));
                fclose($rhcss);

                #---write 

                #html
                $h2= fopen("../../$p_name/index.html", 'x');
                fwrite($h2,$redt2);

                #css
                mkdir("../../$p_name/css",0777,true);
                $hcss= fopen("../../$p_name/css/stil.css", 'x');
                fwrite($hcss,$redtcss);

                #redirect

                header("Location: ../site3.php");
                exit();
            }

            if(isset($_POST['html']) && isset($_POST['wp'])){

                #redirect

                header("Location: ../site2.php?this_two_cannot_be_combined");
                exit();

            } 
            if(isset($_POST['php']) && isset($_POST['wp'])){

                #redirect

                header("Location: ../site2.php?this_two_cannot_be_combined");
                exit();

            }
            if(isset($_POST['html'])){

                #varijable
                $html = $_POST['html'];

                 #---map creation

                if(isset($_SESSION['dis'])){
                    $dis = $_SESSION['dis'];
                    mkdir("../../$p_name",0777,true);
                    $h=fopen("../../$p_name/dis.txt", 'x');
                    fwrite($h,$dis);
                }

                #read
                $rh=fopen("../templates/html.txt" , 'r');
                $redt= fread($rh,filesize("../templates/html.txt"));
                fclose($rh);
                
                #write
                $h1= fopen("../../$p_name/index.html", 'x');
                fwrite($h1,$redt);

                #redirect

                header("Location: ../site3.php");
                exit();

            }else if(isset($_POST['css'])){

                #varijable
                $css = $_POST['css'];

                #redirect

                header("Location: ../site2.php?css_cant_be_on_her_own");
                exit();

            }else if(isset($_POST['js'])){

                #varijable
                $css = $_POST['js'];

                #redirect

                header("Location: ../site2.php?js_cant_be_on_her_own");
                exit();

            }else if(isset($_POST['jquery'])){

                #varijable
                $jquery = $_POST['jquery'];

                #redirect

                header("Location: ../site2.php?jquery_cant_be_on_her_own");
                exit();

            }else if(isset($_POST['php'])){

                #varijable
                $php = $_POST['php'];

                #---map creation

                if(isset($_SESSION['dis'])){
                    $dis = $_SESSION['dis'];
                    mkdir("../../$p_name",0777,true);
                    $h=fopen("../../$p_name/dis.txt", 'x');
                    fwrite($h,$dis);
                }

                #read
                $rhphp=fopen("../templates/php.txt" , 'r');
                $redtphp= fread($rhphp,filesize("../templates/php.txt"));
                fclose($rhphp);
                 
                #write
                $hphp= fopen("../../$p_name/index.php", 'x');
                fwrite($hphp,$redtphp);

                #redirect

                header("Location: ../site3.php");
                exit();

            }else if(isset($_POST['wp'])){

                #varijable
                $wp = $_POST['wp'];

                #---map creation

                if(isset($_SESSION['dis'])){
                    $dis = $_SESSION['dis'];
                    mkdir("../../$p_name",0777,true);
                    $h=fopen("../../$p_name/dis.txt", 'x');
                    fwrite($h,$dis);
                }

                #copying files

                custom_copy("../templates/wordpress","../../$p_name");

                #redirect

                header("Location: ../site3.php");
                exit();
            }
        }
    }

    function custom_copy($src, $dst) {  
  
        // open the source directory 
        $dir = opendir($src);  
      
        // Make the destination directory if not exist 
        @mkdir($dst);  
      
        // Loop through the files in source directory 
        while( $file = readdir($dir) ) {  
      
            if (( $file != '.' ) && ( $file != '..' )) {  
                if ( is_dir($src . '/' . $file) )  
                {  
      
                    // Recursively calling custom copy function 
                    // for sub directory  
                    custom_copy($src . '/' . $file, $dst . '/' . $file);  
      
                }  
                else {  
                    copy($src . '/' . $file, $dst . '/' . $file);  
                }  
            }  
        }  
      
        closedir($dir); 
    }