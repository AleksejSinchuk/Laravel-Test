<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{
   public static function mail(){
       Mail::send(['text'=>'mail'],['name','My massege'],function ($message){
           $message->to('aleksejsincuk@gmail.com')->subject('Test mail');
           $message->from('aleksejsincuk@gmail.com','My massege');
       });
   }
}
