<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Group;
use App\Models\Category;
use App\Models\Rating;
use App\Models\sub_Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GroupController extends Controller
{
    //Gropu Show view page
    public function group()
    {
        $data = Group::all();
        return view('backend.group.index')->with('data',$data);
    }

    // add-group view page
    public function add_group()
    {
        return view('backend.group.add');
    }

    // adding-group operation
    public function adding_group(Request $req)
    {
        $group = new Group();
        $group->name = $req->input('name');

        if($req->input('status') == true)
        {
            $group->status = '1';
        }
        else{
            $group->status = '0';
        }
        $group->save();

        return redirect()->back()->with('status','New Group Added Successfully!');
    }

    // editing group
    public function edit_group($id)
    {
        $data = Group::find($id);

        return view('backend.group.edit')->with('data',$data);
    }

    // updating group
    public function update_group(Request $req,$id)
    {
        $data = Group::find($id);
        $data->name = $req->input('name');

        if($req->input('status') == true)
        {
            $data->status = "1";
        }
        else{
            $data->status = '0';
        }
        $data->update();

        return redirect()->back()->with('status','Group data updated Successfully!');
    }

    function delete_group($id){
        Group::destroy($id);
        return redirect()->back()->with('status','Group data Deleted Successfully!');
    }

                            // Category Portion //

    //Category Show view page
    public function category()
    {
        $data = Category::all();
        return view('backend.category.index')->with('category',$data);

    }

     public function add_category()
    {
        $data = Group::all();
        return view('backend.category.add')->with('data',$data);
    }

    public function adding_category(Request $req)
    {
        $category = new Category();
        $category->group_id = $req->input('group_id');
        $category->name = $req->input('name');


        if($req->input('status') == true)
        {
            $category->status = '1';
        }
        else{
            $category->status = '0';
        }
        $category->save();

        return redirect()->back()->with('status','New category Added Successfully!');
    }

    // editing Category
    public function edit_category($id)
    {
        $data = Category::find($id);
        $item = Group::all();

        return view('backend.category.edit')->with('category',$data)->with('data',$item);
    }

    // updating group
    public function update_category(Request $req,$id)
    {
        $data = Category::find($id);
        $data->group_id = $req->input('group_id');
        $data->name = $req->input('name');


        if($req->input('status') == true)
        {
            $data->status = "1";
        }
        else{
            $data->status = '0';
        }
        $data->update();

        return redirect()->back()->with('status','Group data has updated Successfully!');
    }

    function delete_category($id){
        Category::destroy($id);
        return redirect()->back()->with('status','Category has Deleted Successfully!');
    }



                            // Sub_Category Portion //

    //Category Show view page
    public function sub_category()
    {
        $data = sub_Category::all();
        return view('backend.sub_category.index')->with('sub_category',$data);

    }

     public function add_sub_category()
    {
        $data = Category::all();
        return view('backend.sub_category.add')->with('data',$data);
    }

    public function adding_sub_category(Request $req)
    {
        $sub_category = new sub_Category();
        $sub_category->category_id = $req->input('category_id');
        $sub_category->name = $req->input('name');
        $sub_category->description = $req->input('description');
        $sub_category->map = $req->input('map');
        $sub_category->phone = $req->input('phone');

        if($req->hasfile('file'))
        {
            $destination = 'uploads/sub_category/'.$sub_category->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/sub_category/', $filename);

            $sub_category->photo = $filename;
        }

        if($req->input('status') == true)
        {
            $sub_category->status = '1';
        }
        else{
            $sub_category->status = '0';
        }
        $sub_category->save();

        return redirect()->back()->with('status','New sub_category Added Successfully!');
    }

    // editing sub_Category
    public function edit_sub_category($id)
    {
        $data = sub_Category::find($id);
        $item = Category::all();

        return view('backend.sub_category.edit')->with('sub_category',$data)->with('data',$item);
    }

    // updating group
    public function update_sub_category(Request $req,$id)
    {
        $data = sub_Category::find($id);
        $data->category_id = $req->input('category_id');
        $data->name = $req->input('name');
        $data->description = $req->input('description');
        $data->map = $req->input('map');
        $data->phone = $req->input('phone');
        if($req->hasfile('file'))
        {
            $destination = 'uploads/sub_category/'.$data->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/sub_category/', $filename);

            $data->photo = $filename;
        }
        if($req->input('status') == true)
        {
            $data->status = "1";
        }
        else{
            $data->status = '0';
        }
        $data->update();

        return redirect()->back()->with('status','Group data has updated Successfully!');
    }

    function delete_sub_category($id){
        sub_Category::destroy($id);
        return redirect()->back()->with('status','sub_Category has Deleted Successfully!');
    }




    public function show_sub($id)
    {
        $category = Category::find($id);
        $subcat = sub_Category::where('category_id','=',$category->id)->get();
        $amb = User::where('city','=',$category->id)->where('roll_as','=','vendor')->get();

        return view('frontend.home')->with('subcat',$subcat)->with('amb',$amb)->with('cat',$category);
    }


    public function product($id)
    {
        $product = sub_Category::find($id);
        $review = Rating::where('pro_id','=',$product->id)->get();

        return view('frontend.product')->with('data',$product)->with('rev',$review);

    }

    public function product2($id)
    {
        $product = User::find($id);
        $review = Rating::where('pro_id','=',$product->id)->get();

        return view('frontend.product2')->with('data',$product)->with('rev',$review);

    }

    public function ratings(Request $req)
    {
        $ratings = new Rating();
        $ratings->user_id = $req->input('user_id');
        $ratings->pro_id = $req->input('pro_id');
        $ratings->ratings = $req->input('ratings');
        $ratings->review = $req->input('review');

        $ratings->save();

        return redirect()->back()->with('status','Review Added Successfully!');


    }

    public function ratings2(Request $req)
    {
        $ratings = new Rating();
        $ratings->user_id = $req->input('user_id');
        $ratings->pro_id = $req->input('pro_id');
        $ratings->ratings = $req->input('ratings');
        $ratings->review = $req->input('review');

        $ratings->save();

        return redirect()->back()->with('status','Review Added Successfully!');


    }

    public function book(Request $req){
        $book = new Book();
        $book->user_id = $req->input('user_id');
        $book->amb_id = $req->input('amb_id');
        $book->address = $req->input('address');
        $book->date = $req->input('date');
        $book->time = $req->input('time');

        $book->save();

        return redirect()->back()->with('status','Booked Successfully!');

    }

}