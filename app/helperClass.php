<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class helperClass extends Model
{
    protected function generateRandomString($length = 20) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    protected function imageUpload($request, $folder = null) {
        $imageFile=$request->file('image');
        $name=$imageFile->getClientOriginalName();
        $explode = explode('.', $name);
        $imageName = $this->generateRandomString().'.'.end($explode);

        if($folder == null) $direction='images/';
        else $direction='images/'.$folder.'/';
        
        $request->image->move($direction, $imageName);
        $url = $direction.$imageName;
        return $url;
    }
}