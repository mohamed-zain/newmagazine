<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use App\User;
class PagesController extends Controller
{
    public function Policy()
    {
        $Data = DB::table('main_infos')->first();
        $journals = DB::table('journals')
            ->orderBy('JournalID','desc')
            ->take(3)->get();
        return view('pages.policy',compact('Data','journals'));
    }

    public function journalDetails($id)
    {
        $bid = Crypt::decryptString($id);
        $Data = DB::table('main_infos')->first();
        $journals = DB::table('journals')
            ->where('journals.JournalID',$bid)
            ->leftJoin('journalsfiles','journalsfiles.JournalID','=','journals.JournalID')
            ->leftJoin('abstractions','abstractions.JournalID','=','journals.JournalID')
            ->select('journalsfiles.*','abstractions.*','journals.*', DB::raw('journalsfiles.file as Jfile, journals.file as JCover, abstractions.file as ABfile'))
            ->first();

        $Rej = DB::table('journals')
            ->orderBy('JournalID','desc')
            ->take(3)->get();
        $studies = DB::table('studies')
            ->where('JournalID',$bid)->get();
        $magazine = DB::table('magazines')->orderBy('MagazineID','=','desc')->take(4)->get();
        //dd($studies);
        return view('pages.journalDetails',compact('journals','Data','Rej','magazine','studies'));
    }


    public function StudyDetails($id)
    {
        $bid = Crypt::decryptString($id);
        $Data = DB::table('main_infos')->first();
        $Rej = DB::table('journals')
            ->orderBy('JournalID','desc')
            ->take(3)->get();
        $studies = DB::table('studies')
            ->where('studyID',$bid)->first();
        $magazine = DB::table('magazines')->orderBy('MagazineID','=','desc')->take(4)->get();
        //dd($studies);
        return view('pages.StudyDetails',compact('Data','Rej','magazine','studies'));
    }

    public function NewUser()
    {
        $Data = DB::table('main_infos')->first();
        $journals = DB::table('magazines')
            ->orderBy('MagazineID','desc')
            ->get();
        return view('pages.NewUser',compact('Data','journals'));
    }

    public function NewRegistration()
    {
        $Data = DB::table('main_infos')->first();
        $journals = DB::table('journals')
            ->orderBy('JournalID','desc')
            ->take(3)->get();
        $magazine = DB::table('magazines')
            ->orderBy('MagazineID','desc')
            ->get();
        return view('pages.NewRegistration',compact('Data','journals','magazine'));
    }


    public function NewArbit(Request $request)
    {

        $this->validate($request, [
            'AName' => 'required',
            'Degree' => 'required',
            'University' => 'required',
            'College' => 'required',
            'Dept' => 'required',
            'country' => 'required',
            'Phone' => 'required',
            'file' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',


        ],
            $messsages = array(
                'AName.required'=>'يجب كتابة الاسم بالكامل',
                'Degree.required'=>'يجب كتابة الرتبة العلمية',
                'University.required'=>'يجب كتابة اسم الجامعة',
                'College.required'=>'يجب كتابة اسم الكلية',
                'Dept.required'=>'يجب  كتابة القسم',
                'country.required'=>'يجب كتابة اسم الدولة',
                'Phone.required'=>'يجب كتابة رقم الجوال',
                'file.required'=>'يجب إرفاق السيرة الذاتية',
            )
        );
        if ($request->hasFile('file')) {
            $path = $request->file->store('attach','public');
            DB::table('arbitrations')->insert([

                'AName' => $request->AName,
                'MagazineID' => $request->MagazineID,
                'Degree' => $request->Degree,
                'University' => $request->University,
                'College' => $request->College,
                'Dept' => $request->Dept,
                'country' => $request->country,
                'Phone' => $request->Phone,
                'file' => $path,

            ]);

        }

         User::create([
            'name' => $request->AName,
            'email' => $request->email,
            'MagazineID' => $request->MagazineID,
            'RollID' => 4,
            'password' => Hash::make($request->password),
        ]);
        \Session::flash('Flash', 'شكر لكم انضمامك معنا لقائمة المحكمين وسيتم التواصل معكم متمنين لكم مزيد من التوفيق و السداد...');
        return redirect()->back();
    }

}
