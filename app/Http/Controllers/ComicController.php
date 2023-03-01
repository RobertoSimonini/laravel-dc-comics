<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $dc_comics = [
            ['text' => 'Characters',        'url' => '#',        'current' => false,],
            ['text' => 'Comics',        'url' => '#',        'current' => true,],
            ['text' => 'Movies',        'url' => '#',        'current' => false,],
            ['text' => 'TV',        'url' => '#',        'current' => false,],
            ['text' => 'Games',        'url' => '#',        'current' => false,],
            ['text' => 'Collectibles',        'url' => '#',        'current' => false,],
            ['text' => 'Videos',        'url' => '#',        'current' => false,],
            ['text' => 'Fans',        'url' => '#',        'current' => false,],
            ['text' => 'News',        'url' => '#',        'current' => false,],
            ['text' => 'Shop',        'url' => '#',        'current' => false,]
        ];

        $terms = [
            'Terms of use',
            'Privacy policy',
            'Ad choices',
            'Advertising',
            'Jobs',
            'Subs',
            'Talent Workshop',
            'Cpsc certificates',
            'Ratings',
            'Shop help',
            'Contact us'
        ];

        $sites = [
            'DC',
            'MAD magazine',
            'DC kids',
            'DC universe',
            'DC Power Visa'
        ];

        $cards = Comic::all();

        return view('comics.index', compact('cards', 'dc_comics', 'terms', 'sites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $comic = new Comic();

        $comic->fill($data);

        $comic->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $dc_comics = [
            ['text' => 'Characters',        'url' => '#',        'current' => false,],
            ['text' => 'Comics',        'url' => '#',        'current' => true,],
            ['text' => 'Movies',        'url' => '#',        'current' => false,],
            ['text' => 'TV',        'url' => '#',        'current' => false,],
            ['text' => 'Games',        'url' => '#',        'current' => false,],
            ['text' => 'Collectibles',        'url' => '#',        'current' => false,],
            ['text' => 'Videos',        'url' => '#',        'current' => false,],
            ['text' => 'Fans',        'url' => '#',        'current' => false,],
            ['text' => 'News',        'url' => '#',        'current' => false,],
            ['text' => 'Shop',        'url' => '#',        'current' => false,]
        ];

        $terms = [
            'Terms of use',
            'Privacy policy',
            'Ad choices',
            'Advertising',
            'Jobs',
            'Subs',
            'Talent Workshop',
            'Cpsc certificates',
            'Ratings',
            'Shop help',
            'Contact us'
        ];

        $sites = [
            'DC',
            'MAD magazine',
            'DC kids',
            'DC universe',
            'DC Power Visa'
        ];

        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic', 'dc_comics', 'terms', 'sites'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
