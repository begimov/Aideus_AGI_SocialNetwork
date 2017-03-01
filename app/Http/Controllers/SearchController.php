<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SearchController extends Controller
{
  public function search(Request $request)
  {
      $query = $request->input('q');

      if (!$query) {
        return back();
      }

      $results = User::where('username', 'like', "%{$query}%")
        ->orWhere('first_name', 'like', "%{$query}%")
        ->orWhere('last_name', 'like', "%{$query}%")
        ->get();

      return view('search.results', ['query' => $query, 'results' => $results]);
  }
}
