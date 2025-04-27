<?php
namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\fileUploadRequest;


trait fileUpload
{
    public function uploadFile(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : Str::random(25);

        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }
}



// trait fileUpload{
//     public function upload(){
//         //accept by method.  UploadedFile $uploadedFile, $folder = null, $disk = 'public/postImg', $filename = null
//         // $name = !is_null($filename) ? $filename : Str::random(25);

//         // $file = $uploadedFile->move($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
//         // return $file;
//         if ($image = $request->file('file')) {
//             //$email = Auth::user()->email;
//             $destinationPath = 'public/postImg/';
//             $profileImage =  'public/postImg/'.date('YmdHis') . "." . $image->getClientOriginalExtension();
//             $file = $image->move($destinationPath, $profileImage);
//             $data['file'] = "$profileImage";
//             return $file;
//         }
//     }
// }

