<?php 
//conexion a google api servive
include 'api-google/vendor/autoload.php'
putenv('GOOGLE_APPLICATION_CREDENTIALS=cargadatos-f300cc4f3bfc.json');

$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->setScopes('https://wwww.googleapis.com/auth/drive.file')



//try y catch
try
{
    //CAPTURA DE ARCHIVO
    $service = new Google_Service_Drive($client);

    $file_path =$_FILES['archivo']['tmp_name'];

    $file = new Google_Service_Drive_DriveFile();
    $file->setName($_FILES['archivo']['name']);

    
    $info = finfo_open(FILEINFO_MIME_TYPE);
    $mime_type = finfo_file($info,$file_path);

    //ruta de envio
    $file->serParents(array("1sryiuE5X4vRok0bgBmTwJNYd7ErFRf5-"));
    $file->setDescription("archivo cargado por php");
    $file->setMimeType($mime_type);

    $resultado = $service->files->create(
        $file,
        array(

            'data'=> file_get_contents($file_path),
            'mimeType'=> $mime_type,
            'uploadType'=> 'media'
        )

    );
echo '<a href="https://drive.google.com/open?id= '. $resultado->id .'" target="blank" >'.$resultado->name.'</a>'
}
catch(Google_Service_Exception $gs){
    $mensaje = json_decode($gs->getMessage());
    echo $mensaje-error->message(); 
}

?>

