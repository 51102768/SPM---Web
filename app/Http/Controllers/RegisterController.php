<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Hash;

class RegisterController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$input = $request->all();

        $messages = array(
            'email.required'    => 'Mời bạn điền email đầy đủ.',
            'email.unique'      => 'Email này đã tồn tại.',
            'email.email'       => 'Email không hợp lệ.',
            'fullname.required' => 'Mời bạn điền tên đầy đủ.',
            'password.required' => 'Mời bạn điền mật khẩu đầy đủ.',
            'password.min'      => 'Mật khẩu tối thiểu là :min kí tự.',
            'cpassword.required'=> 'Mời bạn điền lại mật khẩu.',
            'cpassword.min'     => 'Mật khẩu tối thiểu là :min kí tự.',
            'cpassword.same'    => 'Mật khẩu phải giống nhau',
        );




        $validator = Validator::make($request->all(), 
                        ['email'=> 'required|unique:users|email',
                        'fullname'  => 'required',
                        'password'  => 'required|min:6',
                        'cpassword' => 'required|min:6|same:password'
                        ],
                        $messages);

        if ($validator->fails()) {
            return redirect()->back()->with("registerfailed",true)->withErrors($validator->messages());
        }


        User::create([
                    "email"=>$input['email'],
                    "password"=>Hash::make($input['password']),
                    "fullname"=>$input['fullname']
        ]);


        return redirect('/')->with("message","Bạn đã đăng kí thành công!");   
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
