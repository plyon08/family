<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userID = \Auth::user()->sub;

        if (!empty(request(['tag']))) {
            $tag = request(['tag']);
            $recipes = Recipe::tag($tag, $userID)->orderBy('recipeName')->get();
        } else {
            $recipes = Recipe::latest()->where('userID', $userID)->get();
        }

        return view('recipe.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'recipeName' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
            'tag' => 'required'
        ]);

        $recipe = new Recipe;
        $data = $request->only($recipe->getFillable());
        $data['userID'] = \Auth::user()->sub;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public');
            $file_name = $request->file('image')->hashName();
            $data['image'] = $file_name;
        } else {
            $data['image'] = 'no-image.png';
        }

        $recipe->fill($data)->save();

        session()->flash('message', 'Recipe Saved Successfully!');

        return redirect('/recipes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        return view('recipe.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        return view('recipe.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        $this->validate(request(), [
            'recipeName' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
            'tag' => 'required'
        ]);

        $recipe = Recipe::find($recipe->id);
        $data = $request->only($recipe->getFillable());
        $data['userID'] = \Auth::user()->sub;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public');
            $file_name = $request->file('image')->hashName();
            $data['image'] = $file_name;
        } else {
            $data['image'] = $recipe->image;
        }

        $recipe->fill($data)->save();

        session()->flash('message', 'Recipe Updated Successfully!');

        return redirect('/recipes/'.$recipe->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe = Recipe::find($recipe->id);

        $recipe->delete();

        session()->flash('message', 'Recipe Deleted Successfully!');

        return redirect('/recipes');
    }
}
