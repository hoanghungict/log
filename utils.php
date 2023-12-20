    <?php 

    public function copyFile() {
           $dir = opendir($src);
            @mkdir($dst);
            while(false !== ( $file = readdir($dir)) ) {
                if (( $file != '.' ) && ( $file != '..' )) {
                    if ( is_dir($src . '/' . $file) ) {
                        recurse_copy($src . '/' . $file,$dst . '/' . $file);
                    }
                    else {
                        copy($src . '/' . $file,$dst . '/' . $file);
                    }
                }
            }
            closedir($dir);


 }


    public function renameFile() {
        
        $directory = '/xampp/htdocs/Rac/';
        $newdirectory = '/xampp/htdocs/Rac/new/';

        if ($handle = opendir($directory)) { 
            while (false !== ($fileName = readdir($handle))) {
                if ($fileName != "." && $fileName != "..") {
                     
                    $newfile = str_replace('.name.','.', $fileName );
                   
                    copy($directory . $fileName,  $newdirectory .  $newfile);
 
                }
            }
            
            closedir($handle);
        }
   
    }
