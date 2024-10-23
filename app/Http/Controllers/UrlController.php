<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function index()
{
    $urls = Url::all();

    return view('urls.index', compact('urls'));
}

    public function create() {
        return view('urls.create');
    }
    public function store(Request $request) {
        $request->validate([
            'long_url' => 'required|url'
        ]);
    
        $shortUrl = Url::generateShortUrl();
        
        Url::create([
            'user_id' => auth()->id(),
            'long_url' => $request->long_url,
            'short_url' => $shortUrl,
            'clicks' => 0
        ]);
        $fullShortUrl = url('/') . '/' . $shortUrl;
    
        return redirect()->back()->with('success', 'URL shortened: ' . $shortUrl);
    }
    public function redirect($shortUrl) {
        $url = Url::where('short_url', $shortUrl)->firstOrFail();
        $url->increment('clicks');
        return redirect($url->long_url);
    }
    
}
