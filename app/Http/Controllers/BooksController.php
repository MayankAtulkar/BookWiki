<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class BooksController extends Controller
{
    
    public function page1()
    {
        
        $url = "http://offline-news-api.herokuapp.com/stories";
        
        //  Initiate curl
        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, $url);
        // Execute
        $result = curl_exec($ch);
        // Closing
        curl_close($ch);
        
        // Will dump a beauty json :3
        $data = json_decode($result, true);
        return View('page1')->with('data', $data);
    }
    
    public function page2($id)
    {
        
        $url = "https://offline-news-api.herokuapp.com/stories";
        //  Initiate curl
        $ch  = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, $url);
        // Execute
        $result = curl_exec($ch);
        // Closing
        curl_close($ch);
        
        // Will dump a beauty json :3
        $data    = json_decode($result, true);
        $details = array();
        
        
        foreach ($data as $temp) {
            
            if ($temp['guid'] == $id) {
                $details['guid']   = $temp['guid'];
                $details['author'] = $temp['author'];
                $details['title']  = $temp['title'];
                $details['date']   = $temp['date'];
                $details['body']   = $temp['body'];
                
                return View('page2')->with('details', $details);
                
            }
        }
    }
}