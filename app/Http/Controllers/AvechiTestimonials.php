<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class AvechiTestimonials extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check())
        {
        $testimony = DB::table('testimonials')->where('status', 'new')->orderBy('created_at', 'ASC')->paginate(15);

        if ($testimony->isEmpty())
        {
            $testimony = null;
            return view('process')->withTestimony( $testimony);
        }
        
        return view('process')->withTestimony( $testimony);
        }
        else
        {
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $ordernumber = $request->ordernumber;
        $testimony = $request->testimony;
        $rate = $request->rate;

        

        $this->validate(request(), [
            'firstname' => 'required|string|min:2|max:20',
            'lastname' => 'required|string|min:2|max:20',
            'ordernumber' => 'required|unique:testimonials|string|min:12|max:12', 
            'testimony' => 'required|string|max:400',
            'rate' => 'required|integer',
        ],
        ['ordernumber.unique'=> 'The order number has already been taken.']);

        

        

        $p = new Testimonial;
        $p->firstname = $firstname;
        $p->lastname = $lastname;
        $p->ordernumber = $ordernumber;
        $p->testimonial = $testimony;
        $p->rate = $rate;
        $p->status = 'new';
        $p->save();

        if($p->save())
        {
            return redirect('/landing')->with('status', 'Thank you for submitting your testimonial. As soon as it is validated it will be displayed here');
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return "edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $status = $request->status;
        
        $p = Testimonial::findorFail($id);
        $p->status = $status;
        $p->save();
        if($p->save())
        {
            return redirect()->back();
        }
        else
        {
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return "destroy";
    }
}
