    <?php 
    
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
