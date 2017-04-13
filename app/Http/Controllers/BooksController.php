<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BooksController extends Controller
{
    //
    public function index()
    {
    	$books = DB::table('books')->get();
    	
    	return View('view', compact('books'));
    }
    
    public function edit($bookId)
    {
    	$book = DB::table('books')->find($bookId);
    	
    	return view('edit', compact('book'));
    }
    
    public function update(Request $request)
    {
    	try {
    		
    		$updateFields = $request->all();

    		DB::table('books')
            ->where('id', $updateFields['bookid'])
            ->update(array('isbn' => $updateFields['isbn'], 
           				   'title' => $updateFields['title'],
           				   'subtitle' => $updateFields['subtitle'])
            );
            
            return redirect('/');
    	}
    	catch (Exception $ex)
    	{
    		return $ex->getMessage();
    	}
    	
    }
}
