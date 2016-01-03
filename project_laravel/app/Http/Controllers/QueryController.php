<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class QueryController extends Controller {

	public function search(Request $request)
	{
   	// Gets the query string from our form submission 
    $query = Request::input('search');
    // Returns an array of articles that have the query string located somewhere within 
    // our articles titles. Paginates them so we can break up lots of search results.
  	$tenbenh = DB::table('tbl_chuandoan')->where('trieuchung', 'LIKE', '%' . $query . '%')->paginate(10);
        
	// returns a view and passes the view the list of articles and the original query.
    return view('search.search', compact('tenbenh', 'query'));
 	}
}
