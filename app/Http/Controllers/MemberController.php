<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Carbon\Carbon;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::paginate(10);
        return view('admin.members.index', ['members'=>$members] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validation($request);

        $member = new Member();
        $member->name = $request -> name;
        $member->address = $request -> address;
        $member->phone_number = $request -> phone_number;
        $member->email = $request -> email;
        $member->gender = $request -> gender;
        $member->date_of_birth = $request -> date_of_birth;
        $member->membership_date = Carbon::now();
        $member->membership_fees = $request -> membership_fees;
        $member->occupation = $request -> occupation;
        $member->save();
        return redirect(route('members.create')) -> with( 'message', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        return view('admin.members.show', ['member' => $member ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('admin.members.edit', ['member' => $member ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $this->validation($request);

        $member->name = $request -> name;
        $member->address = $request -> address;
        $member->phone_number = $request -> phone_number;
        $member->email = $request -> email;
        $member->gender = $request -> gender;
        $member->date_of_birth = $request -> date_of_birth;
        $member->membership_fees = $request -> membership_fees;
        $member->occupation = $request -> occupation;
        $member->update();
        return redirect(route('members.index')) -> with( 'message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect(route('members.index')) -> with( 'message', 'Deleted Successfully');
    }

    public function validation(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'date_of_birth' => 'required',
            'membership_fees' => 'required',
            'occupation' => 'required',
            'address' => 'nullable'
        ]);
    }
}
