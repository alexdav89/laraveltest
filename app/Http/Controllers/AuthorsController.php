<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AuthorsController extends Controller
{

    public function index()
    {
    	$authors = DB::table('authors')->get();
    	
    	return View('viewAuthors', compact('authors'));
    }
    
    
    public function authorbooks($authorId)
    {
    	try {
    		
	    	$books = DB::table('authors')
	    			->join('book_authors', 'authors.id', '=', 'book_authors.author_id')
	    			->join('books', 'books.id', '=', 'book_authors.book_id')
	    			->select('books.*')
	    			->where('authors.id', '=', $authorId)
	    			->get();
	    	
	    	return View('view', compact('books'));
    	}
    	catch (Exception $ex)
    	{
    		return $ex->getMessage();
    	}
    }
    
}
