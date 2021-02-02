<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\IMDBMovies;
use App\Models\IMDBGenders;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Retorna JSON com filmes e gêneros listados a partir do banco de dados.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $movies_sql = DB::raw(/* Insira a consulta aqui */);
        $movies = DB::select($movies_sql);
        $genders_sql = DB::raw(/* Insira consulta aqui */);
        $genders = DB::select($genders_sql);

        return response()->json(
        [
           'movies' => $movies,
           'genders' => $genders
        ]);
    }

    //Retorna uma lista de filmes cadastrados na tabela i_m_d_b_movies
    public function movies()
    {
        $sql = '';
        $consulta = DB::raw(/* Insira a consulta */);
        $movies = DB::select(/* Insira a consulta */);
        return response()->json(
            $movies
        );
    }

    //Retorna detalhes do filme de $id cadastrados na tabela i_m_d_b_movies
    public function movie($id)
    {
        $sql = '';
        $consulta = DB::raw();
        $movie = DB::select(/* insira a consulta */);
        return response()->json(
            $movie
        );
    }

    //Retorna detalhes do genero de $id cadastrados na tabela i_m_d_b_genders
    public function gender($id)
    {
        $sql = '';
        $consulta = DB::raw(/* insira a consulta */);
        $gender = DB::select(/* consulta */);

        return response()->json(
            $gender
        );
    }

    //Retorna uma lista de generos cadastrados na tabela i_m_d_b_genders
    public function genders()
    {
        $sql = '';
        $consulta = DB::raw(/* insira a consulta */);
        $genders = DB::select(/* insira a consulta */);

        //retorna um JSON para o endpoint
        return response()->json(
            $genders
        );
    }

    //Este método recebe um caractere e uma string como parâmetro e retorna a substring após o caractere
    function after($inicio, $inthat) {
        if (!is_bool(strpos($inthat, $inicio)))
        return substr($inthat, strpos($inthat,$inicio)+strlen($inicio));
    }

    //Retorna os dados do candidato para a API no endpoint /about
    public function aboutMe(){

        $about = [];
        $domain = [];
        // retorna a resposta como JSON
        return response()->json(
            [
                $about,
                $domain
            ]
        );
    }
}
