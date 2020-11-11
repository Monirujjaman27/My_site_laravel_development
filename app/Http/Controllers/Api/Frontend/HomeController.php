<?php

namespace App\Http\Controllers\Api\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\About;
use App\Models\Skill;
use App\Models\Resume;
use App\Models\Portfolio;
use App\Models\Category;
use App\Models\Testimonial;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slideritem  = Slider::all();
        $about       = About::all();
        $skill       = Skill::all();
        $resume      = Resume::all();
        $portfolio   = Portfolio::orderBy('id', 'desc')->paginate(8);
        $category    = Category::orderBy('id', 'ASC')->paginate(5);
        $catId1      = Portfolio::orderBy('id', 'desc')->paginate(8);
        $testemonial = Testimonial::all();

       
        // $categoryPost = Category::with('portfolio')->orderBy('id', 'desc')->paginate(8);

        return view('Frontend.pages.index', compact([
            'slideritem',
            'about',
            'skill',
            'resume',
            'portfolio',
            'category',
            'catId1',
            'testemonial'
            ]));
    }

  /**
     * Display and download resume of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getProtfoliobyid($id)
    {

        $catId = Portfolio::where('id', $id)->orderBy('id', 'desc')->paginate(8);
        return response()->json(array('success' => true, 'catId' => $catId));
    
    }
  /**
     * Display and download resume of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function downloadResume($file)
    {
         return response()->download('public/storage/resume/'.$file);
        
    }

    /**
     * Display contact page of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function contact()
    {
        return view('Frontend.pages.contact');
    }


    /**
     * Display about page of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function about()
    {
        return view('Frontend.pages.about');
    }


    /**
     * Display packages page of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function packages()
    {
        return view('Frontend.pages.packages');
    }
    public function packageDetails()
    {
        return view('Frontend.pages.packageDetails');
    }
      /**
     * Display code page of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function code()
    {
        return view('Frontend.pages.code');
    }
      /**
     * Display faq page of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {
        return view('Frontend.pages.faq');
    }
      /**
     * Display projects and pags of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function projects()
    {
        return view('Frontend.pages.projects');
    }




   
}