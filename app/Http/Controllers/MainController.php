<?php

namespace App\Http\Controllers;

use App\Http\Requests\UrlRequest;
use App\Models\Link;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $links_ids = session()->get('links', []);

        $links = [];

        if(!$links_ids == null){
            foreach ($links_ids as $link) {

                $links[] = Link::find($link);

            }
        }

        return view('welcome',compact('links'));
    }

    public function store(UrlRequest $request)
    {
        $shortened_links = session()->get('count', 0);

        if($shortened_links >= 3)
        {
            return abort(429);
        }

        $link = Link::where('url', $request->url)->firstOrCreate(
            [
                'url' => $request->url,
                'shortened_url' => $this->generateShortUrl(),
                'user_id'=> auth()->id()
        ]);


        $links = session()->get('links', []);

        $new_link = $link->id;

        if (!is_array($links)) {
            $links = [];
        }

        $links[] = $new_link;

        session()->put('links', $links);

        session()->put('count', $shortened_links + 1);


        return redirect('/')->with('success', 'URL Shortened Successfully');

    }


    public function show($link)
    {
        $link = Link::where('shortened_url', $link)->firstOrFail();

        $link->increment('visits');

        return redirect()->away($link->url);
    }


    public function destroy($link)
    {


        $link = Link::where('shortened_url', $link)->firstOrFail();
        $link->delete();

        $links = session()->get('links', []);
        $index = array_search($link->id, $links);
        unset($links[$index]);
        session()->put('links', $links);

        return redirect('/')->with('success', 'URL Deleted Successfully');

    }


    protected function generateShortUrl()
    {
        return substr(md5(microtime()), 0, 6);
    }
}
