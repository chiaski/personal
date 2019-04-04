<?php       
$filename = 'words.html';
$msg = (isset($_POST['msg']) ? $_POST['msg'] : null);

    // Let's make sure the file exists and is writable first.
    if (is_writable($filename)) {

    // In our example we're opening $filename in append mode.
    // The file pointer is at the bottom of the file hence
    // that's where $somecontent will go when we fwrite() it.
    if (!$handle = fopen($filename, 'a')) {
        echo "Cannot open file ($filename)";
        exit;
    }

    // Write $somecontent to our opened file.
    if (fwrite($handle, $msg) === FALSE) {
        echo "Cannot write to file ($filename)";
        exit;
    }
header( "Location: http://chiaski.com/nice/page.php" );
die();
    echo "Success, wrote ($msg) to file ($filename)";

    fclose($handle);

    } else {
    echo "The file $filename is not writable";
    }
?>