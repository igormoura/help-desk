<?php

class WebsiteController extends \BaseController {

	protected $layout = 'login.index';

	
	/* === VIEW === */
	public function index()
	{
		$this->layout->content = View::make('login.login');
	}	
	
	public function create()
	{
		$data = array(
			'departments'	=> Department::all(),
			'priorities'	=> TicketPriority::all(),
			'types'			=> TicketType::all()
		);
		
		$this->layout->content = View::make('website.tickets.create', $data);
	}
	/* === END VIEW === */
	
	
	/* === C.R.U.D. === */
	public function store()
	{
		
		$rules = array(
			'name'			=> 'required',
			'email'			=> 'required|email', //|unique:users
			'title'     	=> 'required',
			'department_id'	=> 'required',
			'type_id'		=> 'required',
			'priority_id'	=> 'required',
			'content'		=> 'required'
		);

		$inputs = Input::all();
		array_pop($inputs);

		$validator = Validator::make(array_map('trim', $inputs), $rules);

		if ($validator->passes())
		{
            $password				= str_random(10);
			$store					= new User;
			$store->role_id			= 3;
			$store->parent_id		= 0;
			$store->name			= Input::get('name');
			$store->email			= Input::get('email');
			$store->password		= Hash::make($password);
			$store->save();	
			
			$fromEmail	= Setting::find(1)->receive_emails;	
			$toEmail	= Input::get('email');
			$subject	= trans('translate.account_was_created');
			
			$values = array(
				'user'		=> Input::get('email'),
				'password'	=> $password
			);		
			
			Mail::send('assets.emails.clients', $values, function($message) use ($fromEmail, $toEmail, $subject)
			{
				$message->from($fromEmail, trans('translate.app_name'));
				$message->to($toEmail)->subject($subject);
			});	
			
			$ticket				= new Ticket;
			$ticket->staff_id	= 1;
			$ticket->client_id	= $store->id;
			$ticket->status_id	= 0;
			$ticket->state		= 0;
			$ticket->fill(Input::all());
			$ticket->attachment = '';

            if(!empty($_FILES['attachment']['name'][0]))
            {	
				$total = count($_FILES['attachment']['name']);
				// Loop through each file
				for($i=0; $i<$total; $i++) {
					//Get the temp file path
					$tmpFilePath = $_FILES['attachment']['tmp_name'][$i];
					$info = pathinfo($_FILES['attachment']['name'][$i]);
					$base = $info['basename'];
					$newname = date('YmdHis')."_".$base;
					$target = dirname(__FILE__).'/../../public/attachments/'.$newname;
					move_uploaded_file( $_FILES['attachment']['tmp_name'][$i], $target);
					$ticket->attachment .= $newname.'|';
				}       
			}
            $ticket->save();
			
			// $staffEmails	= new UserDepartment;
			// $fromEmail		= Input::get('email');
			// $toEmail		= $staffEmails->getStaffEmailsByDepartment(Input::get('department_id'));
			// $subject		= trans('translate.new_ticket');

			// $values = array(
			// 	'title'		=> Input::get('title'),
			// 	'content'	=> Input::get('content')
			// );

			// Mail::send('assets.emails.ticket', $values, function($message) use ($fromEmail, $toEmail, $subject)
			// {
			// 	$message->from($fromEmail, trans('translate.app_name'));
			// 	$message->to($toEmail)->subject($subject);
			// });
		}
		else
		{
			return Redirect::to('guest-ticket')->with('warning', trans('translate.validation_error_messages'))->withErrors($validator)->withInput();			
		}		
		
		return Redirect::to('guest-ticket')->with('success', trans('translate.ticket_was_sent'));
	}
	/* === END C.R.U.D. === */
	
}