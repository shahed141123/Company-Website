<?php

use App\Models\Frontend\Order;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;
use Gloudemans\Shoppingcart\Facades\Cart;
//use NumberFormatter;


/**
 * this imageUpload function is globally upload any images
 *
 */
class Helper
{
    /**
     * generates the image path if the image path does not exist.
     */



    public static function imageDirectory()
    {
        if (!File::isDirectory(storage_path("app/public/requestImg/"))) {
            File::makeDirectory(storage_path("app/public/requestImg/", 0777, true, true));
        }
        if (!File::isDirectory(storage_path("app/public/thumb/"))) {
            File::makeDirectory(storage_path("app/public/thumb/", 0777, true, true));
        }
    }



    /**
     * upload single image
     */
    public static function singleImageUpload($mainFile, $imgPath, $reqWidth = false, $reqHeight = false)
    {
        $fileExtention    = $mainFile->getClientOriginalExtension();
        $fileOriginalName = $mainFile->getClientOriginalName();
        $file_size        = $mainFile->getSize();
        $path             = $imgPath;
        $currentTime      = Str::random(16) . time();
        $fileName         = $currentTime . '.' . $fileExtention;

        $mainFile->storeAs('public/', $fileName);
        $img = Image::make($mainFile)->resize($reqWidth, $reqHeight)->save($path . '/requestImg/' . $fileName);
        $img->resize(146, 204)->save($path . '/thumb/' . $fileName);

        $output['status']             = 1;
        $output['file_name']          = $fileName;
        $output['file_original_name'] = $fileOriginalName;
        $output['file_extention']     = $fileExtention;
        $output['file_size']          = $file_size;

        return $output;
    }


    // file uploads methods

    public static function singleFileUpload($mainFile)
    {
        $fileExtention    = $mainFile->getClientOriginalExtension();
        $fileOriginalName = $mainFile->getClientOriginalName();
        $file_size        = $mainFile->getSize();
        $currentTime      = Str::random(17);
        $fileName         = $currentTime . '.' . $fileExtention;

        $mainFile->storeAs('public/files', $fileName);

        $output['status']             = 1;
        $output['file_name']          = $fileName;
        $output['file_original_name'] = $fileOriginalName;
        $output['file_extention']     = $fileExtention;
        $output['file_size']          = $file_size;

        return $output;
    }




    public static function singleUpload($mainFile, $storagePath = '', $reqWidth = false, $reqHeight = false)
    {
        $fileExtention    = $mainFile->getClientOriginalExtension();
        $fileOriginalName = $mainFile->getClientOriginalName();
        $file_size        = $mainFile->getSize();

        $currentTime      = Str::random(17);
        $fileName         = $currentTime . '.' . $fileExtention;

        if (strpos($mainFile->getMimeType(), 'image') === 0) {
            $path = $storagePath;

            $mainFile->storeAs('public/', $fileName);
            $img = Image::make($mainFile)->resize($reqWidth, $reqHeight)->save($path . '/requestImg/' . $fileName);
            $img->resize(146, 204)->save($path . '/thumb/' . $fileName);
        } else {
            $mainFile->storeAs('public/files', $fileName);
        }

        $output['status']             = 1;
        $output['file_name']          = $fileName;
        $output['file_original_name'] = $fileOriginalName;
        $output['file_extention']     = $fileExtention;
        $output['file_size']          = $file_size;

        return $output;
    }




    // Cart Count
    public static function cartCount($user_id = '')
    {

        if (Auth::check()) {
            if ($user_id == "") $user_id = auth()->user()->id;
            return Cart::where('user_id', $user_id)->where('order_id', null)->sum('quantity');
        } else {
            return 0;
        }
    }
    // relationship cart with product
    // public function product(){
    //     return $this->hasOne('App\Models\Admin\Product','id','product_id');
    // }

    public static function getAllProductFromCart($user_id = '')
    {
        if (Auth::check()) {
            if ($user_id == "") $user_id = auth()->user()->id;
            return Cart::with('product')->where('user_id', $user_id)->where('order_id', null)->get();
        } else {
            return 0;
        }
    }
    // Total amount cart
    public static function totalCartPrice($user_id = '')
    {
        if (Auth::check()) {
            if ($user_id == "") $user_id = auth()->user()->id;
            return Cart::where('user_id', $user_id)->where('order_id', null)->sum('amount');
        } else {
            return 0;
        }
    }

    public static function generateCode()
    {
        $prefix = 'NG-';
        $date = date('dmY');
        $lastCode = Order::latest()->value('order_number');
        $lastNumber = intval(substr($lastCode, -3));
        $newNumber = $lastNumber + 1;
        $newNumberPadded = str_pad($newNumber, 3, '0', STR_PAD_LEFT);
        $code = $prefix . $date . $newNumberPadded;
        return $code;
    }


    public static function customUpload(UploadedFile $mainFile, string $uploadPath, ?int $reqWidth = null, ?int $reqHeight = null): array
    {
        // Create an empty output array
        $output = [];

        // Get the hashed file name
        $fileName = $mainFile->hashName();

        // Create the requestImg directory if it does not exist
        if (!is_dir("{$uploadPath}/requestImg")) {
            if (!mkdir("{$uploadPath}/requestImg", 0777, true)) {
                throw new Exception("Failed to create the directory: {$uploadPath}/requestImg");
            }
        }


        // Check if the uploaded file is an image
        if (strpos($mainFile->getMimeType(), 'image') === 0) {
            // Image file upload
            $mainFile->storeAs('public/', $fileName);
            $img = Image::make($mainFile)->resize($reqWidth, $reqHeight, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save("{$uploadPath}/requestImg/{$fileName}");
        } else {
            // Non-image file upload
            $mainFile->storeAs('public/files/', $fileName);
        }

        // Populate the output array with file information
        $output = [
            'status'         => 1,
            'file_name'      => $fileName,
            'file_extension' => $mainFile->getClientOriginalExtension(),
            'file_size'      => $mainFile->getSize()
        ];

        // Return the output array
        return array_map('htmlspecialchars', $output);
    }


    public static function Upload(UploadedFile $mainFile, string $uploadPath, ?int $reqWidth = null, ?int $reqHeight = null): array
    {
        // Create an empty output array
        $output = [];

        // Get the hashed file name
        $fileName = $mainFile->hashName();

        // Check if the uploaded file is an image
        if (strpos($mainFile->getMimeType(), 'image') === 0) {
            // Create the requestImg directory if it does not exist
            if (!is_dir("{$uploadPath}/requestImg")) {
                if (!mkdir("{$uploadPath}/requestImg", 0777, true)) {
                    abort(404, "Failed to create the directory: {$uploadPath}/requestImg");
                }
            }

            // Image file upload
            $mainFile->storeAs('public/', $fileName);
            $img = Image::make($mainFile);
            if ($reqWidth !== null && $reqHeight !== null) {
                $img->resize($reqWidth, $reqHeight, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $img->save("{$uploadPath}/requestImg/{$fileName}");
            }
        } else {
            // Non-image file upload
            $mainFile->storeAs('public/files/', $fileName);
        }

        // Populate the output array with file information
        $output = [
            'status'         => 1,
            'file_name'      => $fileName,
            'file_extension' => $mainFile->getClientOriginalExtension(),
            'file_size'      => $mainFile->getSize(),
            'file_type'      => $mainFile->getMimeType(),
        ];

        // Return the output array
        return array_map('htmlspecialchars', $output);
    }
}
