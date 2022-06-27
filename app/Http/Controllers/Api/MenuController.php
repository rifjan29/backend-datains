<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nodes = Menu::get()->toTree();

        $menus = [];
        foreach ($nodes as $node) {
            $menus[] = [
                'id' => $node->id,
                'name' => $node->name,
                'status' => $node->status,
                'source' => $node->source,
                'description' => $node->description,
                'children' => $node->children,
            ];
        };
        return $menus;
    }

    public function flatMenu()
    {
        return Menu::get()->toFlatTree();
    }

    public function show(Menu $menu)
    {
        return $menu;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = new Menu();
        $menu->create([
            'name' => $request->name,
            'status' => $request->status,
            'source' => $request->source,
            'description' => $request->description,
            'parent_id' => $request->parent_id,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Menu created',
            'data' => $request->all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $menu->update([
            'name' => $request->name,
            'status' => $request->status,
            'source' => $request->source,
            'description' => $request->description,
            'parent_id' => $request->parent_id,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Menu updated',
            'data' => $menu
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return response()->json([
            'success' => true,
            'message' => 'Menu deleted',
            'data' => $menu
        ]);
    }
}
