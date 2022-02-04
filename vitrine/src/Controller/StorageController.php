<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Kreait\Firebase\Storage;
use Kreait\Firebase\Auth;
use Google\Cloud\Storage\StorageClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class StorageController extends AbstractController
{


    public function __construct(Storage $storage, Auth $auth)
    {
        $this->storage = $storage;
        $this->auth = $auth;
        
    }



    /**
     * @Route("/api/storage", name="storage")
     */ 
    public function index(Request $request)
    {
        //$user = $this->auth->getUserByEmail('bburgniess@gmail.com');
        //$storageClient = $this->storage->getStorageClient();
        //dd($storageClient, $user);

         
        
        $storage = new StorageClient([
            'keyFilePath' => getcwd().'/privatekey.json',
        ]);
            
            $path = $request->files->get('file')->getPathName();
            $name = $request->files->get('file')->getClientOriginalName();
           

            //$defaultBucket = $this->storage->getBucket();

          
            $file = fopen($path, 'r');
            $tt = $path;
            $bucket = $storage->bucket('bsntest-16b9d.appspot.com');
            $object = $bucket->upload($file, [
                'name' => 'images/'.$name
            ]);

            $url = 'https://firebasestorage.googleapis.com/v0/b/bsntest-16b9d.appspot.com/o/'.$name.'?alt=media';
            
            
              
           
       //dd(printf('Uploaded %s to gs://%s/%s' . PHP_EOL, basename($path), 'tttt', $name));
           
    }
}
