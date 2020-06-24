<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Author;
use App\Feedback;
use App\User;
use App\Users;
use Illuminate\Http\Request;

class Webcontroller extends Controller
{
    public function surveyForm(){
        return view("survey");
    }
    public function saveFeedback(Request $request){
        $request->validate([
            "name"=> "required|string|min:3",
            "email"=>"required|string",
            "phone"=>"required",
            "feedback"=>"required|min:4"
        ]);
        try{
            Users::create([
                "name"=>$request->get("name"),
                "email"=>$request->get("email"),
                "phone"=>$request->get("phone"),
                "feedback"=>$request->get("feedback"),
            ]);

//            $data["message"] = "thank for your feedback";
//            notify("global","new_category",$data);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/");
    }

}
