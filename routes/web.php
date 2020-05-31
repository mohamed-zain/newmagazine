<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/******************* Main privleges *********************/

Route::get('/redirect', function () {

    /*********** Administration ***********/
    if (Auth::user()->RollID == 1) {
        return redirect('magazines');
    }

    if (Auth::user()->RollID == 5) {
        return redirect('publish_request');
    }

    if (Auth::user()->RollID == 2) {
        return redirect('SecretaryIndex');
    }

    if (Auth::user()->RollID == 4) {
        return redirect('ArbitratorIndex');
    }

});



Route::get('/', function () {
    $Data = DB::table('main_infos')->first();
    $journals = DB::table('journals')
        ->join('magazines','magazines.MagazineID','=','journals.MagazineID')
        //->leftJoin('journalsfiles','journalsfiles.JournalID','=','journals.JournalID')
        ->select("magazines.*","journals.*","magazines.MagazineID as MID","journals.JournalID as JID","journals.file as Jfile")
        ->take(4)->orderBy('journals.JournalID','desc')->get();

    $jour = DB::table('journals')->take(4)->orderBy('JournalID','desc')->get();
    $magazine = DB::table('magazines')->get();
   // dd($jour);
    return view('index',compact('Data','journals','magazine','jour'));
});

Route::get('magazine/{id}', function ($id) {
    $bid = Crypt::decryptString($id);
    $magazine = DB::table('magazines')->where('MagazineID','=',$bid)->first();
    $journals = DB::table('journals')
        ->where('MagazineID','=',$bid)
        ->orderBy('Jorder','asc')
        ->get();
    //dd($journals);
    $member = DB::table('members')->where('MagazineID','=',$bid)->get();
    return view('magazine.index',compact('magazine','journals','member'));
});

Route::get('Ajess', function () {
    //$bid = Crypt::decryptString($id);
    $magazine = DB::table('magazines')->where('Slug','=','Ajess')->first();
    $journals = DB::table('journals')
        ->where('MagazineID','=',$magazine->MagazineID)
        ->orderBy('Jorder','asc')
        ->get();
    //dd($journals);
    $member = DB::table('members')->where('MagazineID','=',$magazine->MagazineID)->get();
    return view('magazine.index',compact('magazine','journals','member'));
});

Route::get('Ajils', function () {
    //$bid = Crypt::decryptString($id);
    $magazine = DB::table('magazines')->where('Slug','=','Ajils')->first();
    $journals = DB::table('journals')
        ->where('MagazineID','=',$magazine->MagazineID)
        ->orderBy('Jorder','asc')
        ->get();
    //dd($journals);
    $member = DB::table('members')->where('MagazineID','=',$magazine->MagazineID)->get();
    return view('magazine.index',compact('magazine','journals','member'));
});

Route::get('Ajis', function () {
    //$bid = Crypt::decryptString($id);
    $magazine = DB::table('magazines')->where('Slug','=','Ajis')->first();
    $journals = DB::table('journals')
        ->where('MagazineID','=',$magazine->MagazineID)
        ->orderBy('Jorder','asc')
        ->get();
    //dd($journals);
    $member = DB::table('members')->where('MagazineID','=',$magazine->MagazineID)->get();
    return view('magazine.index',compact('magazine','journals','member'));
});

Route::get('Ajaes', function () {
   // $bid = Crypt::decryptString($id);
    $magazine = DB::table('magazines')->where('Slug','=','Ajaes')->first();
    $journals = DB::table('journals')
        ->where('MagazineID','=',$magazine->MagazineID)
        ->orderBy('Jorder','asc')
        ->get();
    //dd($journals);
    $member = DB::table('members')->where('MagazineID','=',$magazine->MagazineID)->get();
    return view('magazine.index',compact('magazine','journals','member'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Policy', 'PagesController@Policy')->name('Policy');
Route::get('/journalDetails/{id}', 'PagesController@journalDetails');
Route::get('/StudyDetails/{id}', 'PagesController@StudyDetails');
Route::get('/NewUser', 'PagesController@NewUser');
Route::get('/NewRegistration', 'PagesController@NewRegistration');
Route::post('/NewArbit', 'PagesController@NewArbit')->name('NewArbit');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});


/*****************************************************/
Route::group(['middleware' => ['auth','Arbitrator']],function(){


    Route::get('ArbitratorIndex', function () {
        Session::put("currentRoute","ArbitratorIndex");

        $research = DB::table('publish_request')
            ->join('users','users.id','=','publish_request.UserID')
            ->join('magazines','magazines.MagazineID','=','publish_request.MagazineID')
            ->where('magazines.MagazineID','=',Auth::user()->MagazineID)
            ->where('publish_request.Accept','=',1)
            ->select("magazines.*","publish_request.*","users.*","publish_request.id as ReID")
            ->get();
        $P =  DB::table('arbitrations')->where('MagazineID','=',Auth::user()->MagazineID)->get() ;

        return view('dashboard.Arbitrator.index',compact('research','P'));
    });


    Route::get('ArbitratorEdit', function () {
        Session::put("currentRoute","ArbitratorEdit");
        $research = DB::table('publish_request')
            ->join('users','users.id','=','publish_request.UserID')
            ->join('magazines','magazines.MagazineID','=','publish_request.MagazineID')
            ->where('magazines.MagazineID','=',Auth::user()->MagazineID)
            ->where('publish_request.Accept','=',3)
            ->get();
        return view('dashboard.Arbitrator.ArbitratorEdit',compact('research'));
    });

    Route::get('ArbitratorAccepted', function () {
        Session::put("currentRoute","ArbitratorEdit");
        $research = DB::table('publish_request')
            ->join('users','users.id','=','publish_request.UserID')
            ->join('magazines','magazines.MagazineID','=','publish_request.MagazineID')
            ->where('magazines.MagazineID','=',Auth::user()->MagazineID)
            ->where('publish_request.Accept','=',3)
            ->get();
        return view('dashboard.Arbitrator.Accepted',compact('research'));
    });

    Route::get('ArbitratorRejected', function () {
        Session::put("currentRoute","ArbitratorEdit");
        $research = DB::table('publish_request')
            ->join('users','users.id','=','publish_request.UserID')
            ->join('magazines','magazines.MagazineID','=','publish_request.MagazineID')
            ->where('magazines.MagazineID','=',Auth::user()->MagazineID)
            ->where('publish_request.Accept','=',5)
            ->get();
        return view('dashboard.Arbitrator.Rejected',compact('research'));
    });

    Route::post('ArbitAcceptions', function (Request $request) {

        //dd($request->all());
        /*  $validator = \Validator::make($request->all(), [
              'arbitration' => 'required',],
              $messsages = array(
                  'arbitration.required'=>'يجب اختيار المحكم ',
              )
          );

          if ($validator->fails()) {
              return redirect()->back()
                  ->withErrors($validator)
                  ->withInput();
          }*/

        $research = DB::table('publish_request')
            ->where('id','=',$request->ReID)
            ->update([
                'Accept' => 3,
            ]);
        \Session::flash('Flash', 'تم قبول البحث  ');
        return redirect()->back();
    })->name('ArbitAcceptions');

    Route::post('ArbitEdit', function (Request $request) {

        //dd($request->all());
        /*  $validator = \Validator::make($request->all(), [
              'arbitration' => 'required',],
              $messsages = array(
                  'arbitration.required'=>'يجب اختيار المحكم ',
              )
          );

          if ($validator->fails()) {
              return redirect()->back()
                  ->withErrors($validator)
                  ->withInput();
          }*/

        $research = DB::table('publish_request')
            ->where('id','=',$request->ReID)
            ->update([
                'Accept' => 4,
                'EditNote' =>$request->EditNote
            ]);
        \Session::flash('Flash', 'تم قبول البحث مع التعديل');
        return redirect()->back();
    })->name('ArbitEdit');


    Route::post('ArbitRejection', function (Request $request) {
        Session::put("currentRoute","ResearchAccepted");
        $research = DB::table('publish_request')
            ->where('id','=',$request->ReID)
            ->update([
                'Accept' => 5,
                'RejectNote' => $request->RejectNote
            ]);
        \Session::flash('Flash', 'تم رفض البحث ');
        return redirect()->back();
    })->name('ArbitRejection');

});

/*********************************************************/


/*****************************************************/
Route::group(['middleware' => ['auth','OfficerMiddleware']],function(){


      Route::get('SecretaryIndex', function () {
          Session::put("currentRoute","SecretaryIndex");

          $research = DB::table('publish_request')
              ->join('users','users.id','=','publish_request.UserID')
              ->join('magazines','magazines.MagazineID','=','publish_request.MagazineID')
              ->where('magazines.MagazineID','=',Auth::user()->MagazineID)
              ->where('publish_request.Accept','=',0)
              ->select("magazines.*","publish_request.*","users.*","publish_request.id as ReID","publish_request.fileName as Namea","publish_request.file as Fileaa")
              ->get();
            $P =  DB::table('arbitrations')->where('MagazineID','=',Auth::user()->MagazineID)->get() ;

          return view('dashboard.secretary.index',compact('research','P'));
      });

    Route::get('OurIndex', function () {
        Session::put("currentRoute","OurIndex");

        $research = DB::table('arbitrations')
            ->join('users','users.name','=','arbitrations.AName')
            ->where('arbitrations.MagazineID','=',Auth::user()->MagazineID)
            //->where('publish_request.Accept','=',0)
            //->select("magazines.*","publish_request.*","users.*","publish_request.id as ReID","publish_request.fileName as Namea","publish_request.file as Fileaa")
            ->get();
        $P =  DB::table('arbitrations')->where('MagazineID','=',Auth::user()->MagazineID)->get() ;

        return view('dashboard.secretary.OurIndex',compact('research','P'));
    });


    Route::get('ResearchAccepted', function () {
        Session::put("currentRoute","ResearchAccepted");
        $research = DB::table('publish_request')
            ->join('users','users.id','=','publish_request.UserID')
            ->join('magazines','magazines.MagazineID','=','publish_request.MagazineID')
            ->where('magazines.MagazineID','=',Auth::user()->MagazineID)
            ->where('publish_request.Accept','=',1)
            ->get();
        return view('dashboard.secretary.Accepted',compact('research'));
    });

    Route::get('ResearchRejected', function () {
        Session::put("currentRoute","ResearchAccepted");
        $research = DB::table('publish_request')
            ->join('users','users.id','=','publish_request.UserID')
            ->join('magazines','magazines.MagazineID','=','publish_request.MagazineID')
            ->where('magazines.MagazineID','=',Auth::user()->MagazineID)
            ->where('publish_request.Accept','=',2)
            ->get();
        return view('dashboard.secretary.Rejected',compact('research'));
    });

     Route::post('Acceptions', function (Request $request) {

         //dd($request->all());
       /*  $validator = \Validator::make($request->all(), [
             'arbitration' => 'required',],
             $messsages = array(
                 'arbitration.required'=>'يجب اختيار المحكم ',
             )
         );

         if ($validator->fails()) {
             return redirect()->back()
                 ->withErrors($validator)
                 ->withInput();
         }*/

         $research = DB::table('publish_request')
             ->where('id','=',$request->ReID)
             ->update([
                 'Accept' => 1,
                 'ArbitID' =>$request->arbitration
             ]);

         return "jhhh";
     })->name('Acceptions');


    Route::get('Rejection/{id}', function ($id) {
        Session::put("currentRoute","ResearchAccepted");
        $research = DB::table('publish_request')
            ->where('id','=',$id)
            ->update([
                'Accept' => 2
            ]);
        \Session::flash('Flash', 'تم رفض البحث ');
        return redirect()->back();
    });

});

/*********************************************************/


/*****************************************************/
Route::group(['middleware' => ['auth','UserMiddleware']],function(){

    Route::get('publish_request', function () {
        Session::put("currentRoute","publish_request");
        return view('dashboard.ResearcherLay.publish_request');
    });


});

/*********************************************************/
Route::group(['middleware' => ['auth','adminMiddleware']],function(){


    Route::get('/Ordering', function () {
        $maga = DB::table('magazines')->get();
        return view('dashboard.Ordering',compact('maga'));
    });

    Route::post('OrderingMaga', function (Request $request) {

        $maga = DB::table('magazines')->get();
        $jour = DB::table('journals')->where('MagazineID','=',$request->MagazineID)->get();
        //dd($jour);
        return view('dashboard.Ordering',compact('jour','maga'));
    })->name('OrderingMaga');

     Route::post('Submitorder', function (Request $request) {

          DB::table('journals')->where('JournalID','=',$request->JournalID)->update([
             'Jorder'=>$request->Jorder
         ]);
         //dd($jour);
         return redirect('Ordering');
     })->name('Submitorder');

Route::get('/dashboard', function () {
    return view('dashboard.main');
});

    Route::get('/members', function () {
        Session::put("currentRoute","members");
        return view('dashboard.members.members');
    });


Route::get('/magazines', function () {
    Session::put("currentRoute","magazines");
    return view('dashboard.magazines.magazines');
});


Route::get('/abstractions', function () {
    Session::put("currentRoute","journals");
    return view('dashboard.abstractions.abstractions');
});

    Route::get('/studies', function () {
        Session::put("currentRoute","journals");
        return view('dashboard.studies.studies');
    });

Route::get('/journals', function () {
    Session::put("currentRoute","journals");
    return view('dashboard.journals.journals');
});

Route::get('/arbitrations', function () {
    Session::put("currentRoute","arbitrations");
    return view('dashboard.arbitrations.arbitrations');
});

Route::get('/journalsfiles', function () {
    Session::put("currentRoute","journals");
    return view('dashboard.journals.journalsfiles');
});

Route::get('/researchers', function () {
    Session::put("currentRoute","researchers");
    return view('dashboard.researchers.researchers');
});


Route::get('/rolls', function () {
    Session::put("currentRoute","users");
    return view('dashboard.users.rolls');
});

Route::get('/users', function () {
    $i = Input::get('i');
    if (!isset($i))
        $i = 2;
    Session::put("currentRoute","users");
    return view('dashboard.users.users',compact('i'));
});


Route::get('/contacts', function () {
    Session::put("currentRoute","contacts");
    return view('dashboard.contacts.contacts');
});

Route::get('/main_infos', function () {
    Session::put("currentRoute","main_infos");
    return view('dashboard.main_infos.main_infos');
});

});

/****************** Routes of CRUD Tables *********************/
Route::get('/Controller/OtherTable', 'TableControl@ContentFromOtherTable');
Route::post('/Controller/uploadFile', 'TableControl@uploadFile');
Route::post('/Controller/updateTab', 'TableControl@Updating');
Route::post('/Controller/deleteTab', 'TableControl@Deleting');
Route::post('/Controller/insertTab','TableControl@insertTab');
/******************** End CRUD Tables *************************/