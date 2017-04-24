<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BooksController extends Controller
{
    //
    public function index()
    {
    	try {
	    	
    		$books = DB::table('books')->get();
	    	
	    	return View('view', compact('books'));
    	}
    	catch (Exception $ex)
    	{
    		return $ex->getMessage();
    	}
    }
    
    public function edit($bookId)
    {
    	try {
	    	
    		$book = DB::table('books')->find($bookId);
	    	
	    	return view('edit', compact('book'));
    	}
    	catch (Exception $ex)
    	{
    		return $ex->getMessage();
    	}
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
    
    public function add(Request $request)
    {
    	if(empty($_POST))
		{
			return view('add');
		}
    	
		try {
			
			$addFields = $request->all();
    	
			var_dump($addFields);
			
			DB::table('books')->insert(
			    ['isbn' => $addFields['isbn'], 
			     'title' => $addFields['title'],
			     'subtitle' => $addFields['subtitle'] 
			    ]
			);
			
			return redirect('/');
		}
    	catch (Exception $ex)
    	{
    		return $ex->getMessage();
    	}
		
    }
    
    public function delete($bookId)
    {
    	try {
	    	
    		DB::table('books')->where('id', '=', $bookId)->delete();
    		
    		return redirect('/');
    		
    	}
    	catch (Exception $ex)
    	{
    		return $ex->getMessage();
    	}
    }
    
}
