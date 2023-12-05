<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectoryFiles extends Controller
{
    public function getListing(Request $request)
{
    $directory = $request->input('directory');
    
    // Perform validation and security checks on the $directory input.
    
    $listing = scandir($directory);
    
    // Filter out '.' and '..' entries and return the result
    $listing = array_diff($listing, array('..', '.'));

    return response()->json(['listing' => $listing]);
}
}
