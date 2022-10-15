<?php

namespace App\Http\Controllers;

use App\Models\Keyword;
use App\Models\SearchHistory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class FrontendController extends Controller
{
      public function index(Request $request){
         $keywords =  Keyword::orderBy('found_times','Desc')->get();
         $users =  User::get();
         $searchHistory =  SearchHistory::
         when($request->words,function ($query,$words){
              $card =  $query;
              foreach ($words as $index=>$word){
                  if($index==0){
                      $card->where('search_text', 'LIKE', "%{$word}%");

                  }else{
                      $card->orWhere('search_text', 'LIKE', "%{$word}%");
                  }
                  return $card;

             }
         })
             ->when($request->user_names,function ($query,$names){
              $card =  $query;
              foreach ($names as $index=>$name){
                  if($index==0){
                      $card->where('search_text', 'LIKE', "%{$name}%");

                  }else{
                      $card->orWhere('search_text', 'LIKE', "%{$name}%");
                  }
                  return $card;

             }
            })
             ->when($request->time_ranges,function ($query,$names){
              $card =  $query;
              foreach ($names as $index=>$name){
                  if($index==0){
                      if($name=='year'){
                          $card->whereYear('created_at', date('Y')-1);
                      }
                      elseif ($name=='week'){
                          $card ->whereBetween('created_at',
                              [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()]
                          );
                      }
                      elseif ($name=="month"){
                          $card ->WhereBetween('created_at',
                              [Carbon::now()->subMonth()->startOfMonth(), Carbon::now()->subMonth()->endOfMonth()]
                          );
                      }
                  }else{
                      if($name=='year'){
                          $card->whereYear('created_at', date('Y'));
                      }
                      elseif ($name=='week'){
                          $card ->orWhereBetween('created_at',
                              [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()]
                          );
                      }
                      elseif ($name=="month"){
                          $card ->orWhereBetween('created_at',
                              [Carbon::now()->subMonth()->startOfMonth(), Carbon::now()->subMonth()->endOfMonth()]
                          );
                      }
                  }
                  return $card;
              }
            })
              ->when($request->from_date, function ($query,$from_date){
                  return $query->where('created_at','>=',$from_date);
              })
             ->when($request->to_date, function ($query,$to_date){
                 return $query->where('created_at','<=',$to_date);
             })
             ->latest()->get();

          return Inertia::render('Welcome', [
              'canLogin' => Route::has('login'),
              'canRegister' => Route::has('register'),
              'keywords' =>$keywords,
              'users' =>$users,
              'searchHistory' =>$searchHistory,
          ]);
      }
}
