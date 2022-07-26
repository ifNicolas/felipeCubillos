<?php

use Google\Service\AdExchangeBuyerII\Image;

include 'api-google/vendor/autoload.php';
putenv('GOOGLE_APPLICATION_CREDENTIALS=cargadatos-f300cc4f3bfc.json');

$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->setScopes('https://wwww.googleapis.com/auth/drive.file');

try
{
    $service = new Google_Service_Drive($client);
    $file_path = "logoEscuela.png";

    $file = new Google_Service_Drive_DriveFile();
    $file->setName($file_path);
    
    $file->setParents(array("1sryiuE5X4vRok0bgBmTwJNYd7ErFRf5-"));
    $file->setDescription("archivo cargado por php");
    $file->setMimeType("media/png");    
    
    $resultado = $service->files->create(
        $file,
        array(    
            'data'=> file_get_contents($file_path),
            'mimeType'=> "media/png",
            'uploadType'=> 'media'
        )
    );
    echo '<a href="https://drive.google.com/open?id'.$resultado->id.'" target ="_blank">'.$resultado->name.'</a>';
}catch(Google_Service_Exception $gs){
        $mensaje = json_decode($gs->getMessage());
        echo $mensaje->error->message(); 
} catch(Exception $e)
    {
        echo $e->getMessage()();
    }