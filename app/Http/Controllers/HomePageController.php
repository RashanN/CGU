<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Category;
use App\Models\General;
use App\Models\Link;
use App\Models\Post;


class HomePageController extends Controller
{

    public function index()
    {
        $link = Link::orderBy('name','asc')->get();
        $general = General::find(1);
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(4)->get();
        return view('mainTable.index',compact('general','link','lpost'));
    }

    public function table(Request $request)
    {
        $companies = Company::filterByRequest($request)->paginate(9);
        $link = Link::orderBy('name','asc')->get();
        $general = General::find(1);
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(4)->get();

        return view('mainTable.search', compact('companies','general','link','lpost'));
    }

    public function category(Category $category)
    {
        $companies = Company::join('category_company', 'companies.id', '=', 'category_company.company_id')
            ->where('category_id', $category->id)
            ->paginate(9);
        $link = Link::orderBy('name','asc')->get();
        $general = General::find(1);
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(4)->get();

        return view('mainTable.category', compact('companies', 'category' ,'general','link','lpost'));
    }

    public function company(Company $company)
    {
        $link = Link::orderBy('name','asc')->get();
        $general = General::find(1);
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(4)->get();
        return view('mainTable.company', compact ('company', 'general','link','lpost'));
    }

}