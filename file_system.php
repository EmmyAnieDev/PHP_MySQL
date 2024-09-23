<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);


    $file = 'test.txt';

    // check if file exists
    if(!file_exists($file)){
        echo 'File does not exist.';
    } else {
        // Output the contents of the file
        echo readfile($file) . '<br />';

        // Copy the file and put in a the quotes.txt
        if(copy($file, 'quotes.txt')){
            echo '  File copied successfully! <br />';
        } else {
            echo '  Failed to copy the file. <br />';
        }

        // absolute path
        echo realpath($file)  . '<br />';

        // check file size
        echo filesize($file) . '<br />';

        // rename file
        rename($file, 'read.txt');

        // make directory
        mkdir('quotes');




        // opening a file for reading, use 'r' to indicate read only
        $handle = fopen($file, 'r');

        // read the file
        echo fread ($handle, filesize($file));
        echo fread($handle, 50);   // read just 50.

        // read a single line
        echo fgets($handle);

        // read a single character
        echo fgetc($handle);

        // write to a file. we use 'a+' to write to a file
        // Open the file in append mode ('a+')
        $handle = fopen($file, 'a+');

        if ($handle === false) {
            echo 'Failed to open the file.';
        } else {
            // Write to the file
            fwrite($handle, "\nEverything popular is wrong.");
            echo "Content written to the file successfully!";
            
            // Close the file after writing
            fclose($handle);
        }

        // delete a file
        unlink('quotes.txt');
    }



?>
