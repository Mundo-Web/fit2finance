<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIndexRequest;
use App\Http\Requests\UpdateIndexRequest;
use App\Models\Attributes;
use App\Models\AttributesValues;
use App\Models\Faqs;
use App\Models\General;
use App\Models\Index;
use App\Models\Message;
use App\Models\Products;
use App\Models\Slider;
use App\Models\Strength;
use App\Models\Testimony;
use App\Models\Category;
use App\Models\Service;
use App\Models\Specifications;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use App\Models\AboutUs;
use App\Models\ClientLogos;
use App\Models\Blog;
use Carbon\Carbon;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Products::all();
        $categorias = Category::all();
        $destacados = Products::where('destacar', '=', 1)->where('status', '=', 1)->where('visible', '=', 1)->get();
        $descuentos = Products::where('descuento', '>', 0)->where('status', '=', 1)->where('visible', '=', 1)->get();
        $service = Service::where('status', '=', 1)->where('visible', '=', 1)->get();

        $generales = General::all()->first();
        $benefit = Strength::where('status', '=', 1)->get();
        $faqs = Faqs::where('status', '=', 1)->where('visible', '=', 1)->get();
        $testimonie = Testimony::where('status', '=', 1)->where('visible', '=', 1)->get();
        $slider = Slider::where('status', '=', 1)->where('visible', '=', 1)->get();
        $category = Category::where('status', '=', 1)->where('destacar', '=', 1)->get();

        $abouts = AboutUs::where('status', 1)->get();
        $logos = ClientLogos::all();
        $blogs = Blog::where('status', '=', true)->where('visible', '=', 1)->get();

        return view('public.index', compact('productos', 'destacados', 'descuentos', 'generales', 'benefit', 'faqs', 'testimonie', 'slider', 'categorias', 'category', 'service', 'abouts', 'logos', 'blogs'));
    }
    public function blog(Request $request)
    {
        try {
            /* $busqueda = $request->busqueda; */
            $id = $request->id;
            $filtroFecha = $request->query('fecha');

            // Datos generales
            $generales = General::all()->first();

            $categorias = Category::where('status', 1)->where('visible', 1)->select('id', 'name')->with('blogs')->get();


            $categoria = Category::where('status', 1)->where('visible', 1)->select('id', 'name')->get();

            $blogCategorias = Blog::where('status', 1)->where('visible', 1)->selectRaw('MONTHNAME(created_at) AS mes, YEAR(created_at) AS year, MIN(created_at) AS created_at')->groupBy(DB::raw('YEAR(created_at), MONTH(created_at), MONTHNAME(created_at)'))->orderByRaw('YEAR(created_at) DESC, MONTH(created_at) DESC')->get();

            if ($id == 0) {
                if ($filtroFecha) {
                    $fechaSeparada = explode('-', $filtroFecha);
                    $mesActual = $fechaSeparada[0]; // Obtener el mes
                    $anioActual = $fechaSeparada[1]; // Obtener el año

                    $blogs = Blog::where('status', 1)
                        ->where('visible', 1)
                        ->whereYear('created_at', $anioActual)
                        ->whereMonth('created_at', $mesActual)
                        ->orderBy('created_at', 'desc')
                        ->paginate(6);
                } else {
                    $blogs = Blog::where('status', 1)
                        ->where('visible', 1)
                        ->orderBy('created_at', 'desc')
                        ->paginate(6);

                    $mesActual = '00';
                    $anioActual = '00';
                }

                return view('public.blog', compact('generales', 'blogs', 'categorias', 'categoria', 'id', 'blogCategorias', 'mesActual', 'anioActual'));
            } else {
                $categoria = Category::where('status', '=', 1)->where('visible', 1)->findOrFail($id);
                $blogCategorias = Blog::where('status', 1)->where('visible', 1)->selectRaw('MONTHNAME(created_at) AS mes, YEAR(created_at) AS year, MIN(created_at) AS created_at')->groupBy(DB::raw('YEAR(created_at), MONTH(created_at), MONTHNAME(created_at)'))->orderByRaw('YEAR(created_at) DESC, MONTH(created_at) DESC')->get();

                if ($filtroFecha) {
                    $fechaSeparada = explode('-', $filtroFecha);
                    $mesActual = $fechaSeparada[0];
                    $anioActual = $fechaSeparada[1];

                    $blogs = Blog::where('status', 1)
                        ->where('visible', 1)
                        ->where('category_id', $id)
                        ->whereYear('created_at', $anioActual)
                        ->whereMonth('created_at', $mesActual)
                        ->orderBy('created_at', 'desc')
                        ->paginate(6);
                } else {
                    $blogs = Blog::where('status', 1)
                        ->where('visible', 1)
                        ->where('category_id', $id)
                        ->orderBy('created_at', 'desc')
                        ->paginate(6);
                    $mesActual = '00';
                    $anioActual = '00';
                }
            }

            return view('public.blog', compact('generales', 'blogs', 'categorias', 'categoria', 'id', 'blogCategorias', 'mesActual', 'anioActual'));
        } catch (\Throwable $th) {
        }
        /* return view('public.blog', compact('generales', 'blogs', 'totalBlogs', 'perPage', 'page', 'search', 'categorias')); */
    }
    public function publicacion($id)
    {
        $blog = Blog::findOrFail($id);
        $blogByCategories = Blog::where('category_id', $blog->category_id)->get();
        $generales = General::all()->first();

        $postAnterior = Blog::where('status', 1)->where('visible', 1)
            ->where('id', '<', $blog->id)
            ->where('category_id', $blog->category_id)
            ->orderBy('id', 'desc')
            ->first();

        $postSiguiente = Blog::where('status', 1)->where('visible', 1)
            ->where('id', '>', $blog->id)
            ->where('category_id', $blog->category_id)
            ->orderBy('id', 'asc')
            ->first();

        return view('public.publicacion', compact('generales', 'blog', 'blogByCategories', 'postSiguiente', 'postAnterior'));
    }

    public function agradecimiento()
    {
        //
        $generales = General::all()->first();
        return view('public.agradecimiento', compact('generales'));
    }
    /**
     * Show the form for creating a new resource.
     */

    public function catalogo($filtro, Request $request)
    {
        $categorias = null;
        $productos = null;

        $rangefrom = $request->query('rangefrom');
        $rangeto = $request->query('rangeto');

        try {
            $general = General::all();
            $faqs = Faqs::where('status', '=', 1)->where('visible', '=', 1)->get();

            $categorias = Category::all();

            $testimonie = Testimony::where('status', '=', 1)->where('visible', '=', 1)->get();

            if ($filtro == 0) {
                $productos = Products::all();
                $categoria = Category::all();
            } else {
                $productos = Products::where('categoria_id', '=', $filtro)->get();
                $categoria = Category::findOrFail($filtro);
            }

            if ($rangefrom !== null && $rangeto !== null) {
                // $cleanedData = $productos->toArray();
                $cleanedData = $productos->filter(function ($value) use ($rangefrom, $rangeto) {
                    if ($value['descuento'] == 0) {
                        if ($value['precio'] <= $rangeto && $value['precio'] >= $rangefrom) {
                            return $value;
                        }
                    } else {
                        if ($value['descuento'] <= $rangeto && $value['descuento'] >= $rangefrom) {
                            return $value;
                        }
                    }
                });

                $productos = $cleanedData;
            }

            return view('public.catalogo', compact('general', 'faqs', 'categorias', 'testimonie', 'filtro', 'productos', 'categoria', 'rangefrom', 'rangeto'));
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function comentario()
    {
        $general = General::all();
        return view('public.comentario', compact('general'));
    }

    public function contacto()
    {
        $general = General::all();
        return view('public.contact', compact('general'));
    }

    public function carrito()
    {
        //
        $url_env = $_ENV['APP_URL'];
        return view('public.checkout_carrito', compact('url_env'));
    }

    public function pago()
    {
        //
        $url_env = $_ENV['APP_URL'];
        return view('public.checkout_pago', compact('url_env'));
    }

    public function micuenta()
    {
        //
        return view('public.dashboard');
    }

    public function pedidos()
    {
        //
        return view('public.dashboard_order');
    }

    public function direccion()
    {
        //
        return view('public.dashboard_direccion');
    }

    public function error()
    {
        //
        return view('public.404');
    }

    public function producto(string $id)
    {
        $productos = Products::where('id', '=', $id)->get();
        $especificaciones = Specifications::where('product_id', '=', $id)->get();
        $productosConGalerias = DB::select(
            "
            SELECT products.*, galeries.*
            FROM products
            INNER JOIN galeries ON products.id = galeries.product_id
            WHERE products.id = :productId limit 5
        ",
            ['productId' => $id],
        );

        $IdProductosComplementarios = $productos->toArray();
        $IdProductosComplementarios = $IdProductosComplementarios[0]['categoria_id'];

        $ProdComplementarios = Products::where('categoria_id', '=', $IdProductosComplementarios)->get();
        $atributos = Attributes::where('status', '=', true)->get();
        $valorAtributo = AttributesValues::where('status', '=', true)->get();
        $url_env = $_ENV['APP_URL'];

        return view('public.product', compact('productos', 'atributos', 'valorAtributo', 'ProdComplementarios', 'productosConGalerias', 'especificaciones', 'url_env'));
    }

    //  --------------------------------------------
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIndexRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Index $index)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Index $index)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIndexRequest $request, Index $index)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Index $index)
    {
        //
    }

    /**
     * Save contact from blade
     */
    public function guardarContacto(Request $request)
    {
        //Del modelo
        //'full_name', 'email', 'phone', 'message', 'status', 'is_read'

        try {
            $reglasValidacion = [
                /*  'full_name' => 'required|string|max:255', */
                'email' => 'required|email|max:255',
                /* 'phone' => 'required|string|max:99999999999', */
            ];
            $mensajes = [
                'full_name.required' => 'El campo nombre es obligatorio.',
                'email.required' => 'El campo correo electrónico es obligatorio.',
                'email.email' => 'El formato del correo electrónico no es válido.',
                'email.max' => 'El campo correo electrónico no puede tener más de :max caracteres.',
                'phone.required' => 'El campo teléfono es obligatorio.',
                'phone.integer' => 'El campo teléfono debe ser un número entero.',
            ];

            $request->validate($reglasValidacion, $mensajes);
            $formlanding = Message::create($request->all());

            return response()->json(['message' => 'Mensaje enviado con exito']);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Mensaje erroneo' . $th], 400);
        }
    }
}