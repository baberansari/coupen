<?php

use App\Models\Category;
use App\Models\Setting;
use App\Models\Store;
use App\Models\Offer;
use \Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
// use Twilio\Rest\Client;

if (! function_exists('uploadImage')) {
    function uploadImage($file, $path, $oldFilePath = null)
    {
        $prefixFolder = 'uploads';
        if (File::exists(public_path($oldFilePath))) {
            File::delete(public_path($oldFilePath));
        }
        $filename = md5(time() . rand(1000, 9999)) . '.' . $file->extension();

        // File upload location
        $location = $prefixFolder . '/' . $path;

        // Upload file
        $file->move($location, $filename);
        return $prefixFolder . '/' . $path . '/' . $filename;
    }
}

if (! function_exists('sendEmail')) {
    function sendEmail($to, $subject, $view, $data = [])
        {
            try {
                 Mail::send($view, $data, function ($message) use ($to, $subject) {
                    $message->to($to)
                        ->subject($subject);
                });

            } catch (\Exception $e) {
                // Log the exception (optional) and set a failure message
                Log::error('Failed to send email: ' . $e->getMessage());
                $responseMessage = 'Failed to send email';
                $responseStatus = 500;
            }

        }
}

if (!function_exists('generateStars')) {
    function generateStars($avgRating) {
        // Calculate the number of full, half, and empty stars
        $fullStars = floor($avgRating); // Number of full stars
        $halfStar = ($avgRating - $fullStars) >= 0.5 ? 1 : 0; // Check for half star
        $emptyStars = 5 - $fullStars - $halfStar; // Remaining stars are empty

        // Initialize the HTML string for the stars
        $starsHtml = '';

        // Append full stars
        for ($i = 0; $i < $fullStars; $i++) {
            $starsHtml .= '<span class="star full">&#9733;</span>'; // Full star HTML
        }

        // Append half star if applicable
        if ($halfStar) {
            $starsHtml .= '<span class="star half">&#9733;</span>'; // Half star HTML
        }

        // Append empty stars
        for ($i = 0; $i < $emptyStars; $i++) {
            $starsHtml .= '<span class="star empty">&#9734;</span>'; // Empty star HTML
        }

        return $starsHtml; // Return the generated HTML
    }
}


if (! function_exists('getCategory')) {
    function getCategory()
    {
        $categories =  Category::take(7)->get();
        return $categories;
    }

}

if (! function_exists('settings')) {
    function settings()
    {
        $sett =  Setting::first();
        return $sett;
    }

}

if (! function_exists('getRelatedStoregs')) {
    function getRelatedStoregs($slug)
    {
        $store = Store::where('store_slug',$slug)->first();
        if(empty($store))
        {
            return [];
        }
        $stores = Store::where('category_id',$store->category_id)->take(5)->get();
        return $stores;
    }

}

if (! function_exists('geTopTrendingCoupen')) {
    function geTopTrendingCoupen()
    {
        $offers = Offer::with('store')->get();
        if(empty($offers))
        {
            return [];
        }
        return $offers;
    }

}

