<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Addクラス(モデル)を読み込む
use App\Add;

// Totalクラス(モデル)を読み込む
use App\Total;



class MainController extends Controller
{
    //////////////////////////////////////////////////
    // 00:ふたりの合計、Aさんの合計、Bさんの合計画面
    public function all()
    {
        // Addクラス(モデル)テーブル情報全件取得
        $totals = Total::all();

        // yenティレクトリーの中のall.blade.phpページを指定し、キー「totals」にバリュー「$totals」を渡す。
        return view('yen.all', [' totals' => $totals]);
    }



    //////////////////////////////////////////////////
    // 01:各カテゴリーの合計画面
    // category_id：１（食費）
    // category_id：２（日用品費）
    // category_id：３（娯楽費）
    // category_id：４（固定費）
    // category_id：５（その他）
    public function index()
    {
        // Addクラス(モデル)テーブル情報全件取得
        $adds = Add::all();

        // yenティレクトリーの中のindex.blade.phpページを指定し、キー「adds」にバリュー「$adds」を渡す。
        return view('yen.index', ['adds' => $adds]);
    }



    //////////////////////////////////////////////////
    // 02-1:登録画面
    public function create()
    {
        return view('yen.create');
    }

    // 02-2:登録機能
    public function store(Request $request)
    {
        // Addクラス(モデル)を$addにインスタンス化
        $add = new Add;

        // 値の用意
        // $request->priceに入ってきた値を$add->priceに入れ直す。
        $add->price = $request->price;

        // $request->category_idに入ってきた値を$add->category_idに入れ直す。
        $add->category_id = $request->category_id;

        // $request->dateに入ってきた値を$add->dateに入れ直す。
        $add->date = $request->date;

        // $request->personに入ってきた値を$add->personに入れ直す。
        $add->person = $request->person;

        // addのtimestampsは設定されているからtrue
        $add->timestamps = true;

        // インスタンスに値を設定して保存
        $add->save();

        // redirectで出力先の指定。登録したらhttp://localhost/yen/{couple_id}/{category_id}にとぶ。
        return redirect('yen/{couple_id}/{category_id}');
    }



    //////////////////////////////////////////////////
    // 03:詳細画面
    public function show($id)
    {
        // 取得したidの情報を$add変数にいれる。
        $add = Add::find($id);

        // yenティレクトリーの中のshow.blade.phpページを指定し、キー「add」にバリュー「$add」を渡す。
        return view('yen.show', ['add' => $add]);
    }



    //////////////////////////////////////////////////
    // 04-1:編集画面
    public function edit($id)
    {
        // 取得したidの情報を$add変数にいれる。
        $add = Add::find($id);

        // yenティレクトリーの中のedit.blade.phpページを指定し、キー「add」にバリュー「$add」を渡す。
        return view('yen.edit', ['add' => $add]);
    }

    // 04-2:編集機能
    // ここはidで探して持ってくる以外はstoreと同じ
    public function update(Request $request, $id)
    {
        // 取得したidの情報を$add変数にいれる。
        $add = Add::find($id);

        // 値の用意
        // $request->titleに入ってきた値を$add->titleに入れ直す。
        $add->title = $request->title;

        // $request->bodyに入ってきた値を$add->bodyに入れ直す。
        $add->body = $request->body;

        // addのtimestampsは設定されてないからfalse
        $add->timestamps = false;

        // インスタンスに値を設定して保存
        $add->save();

        // redirectで出力先の指定。編集したらhttp://localhost/yen/{couple_id}/{category_id}にとぶ。
        return redirect('yen/{couple_id}/{category_id}');
    }



    //////////////////////////////////////////////////
    // 05:削除機能
    public function destroy($id)
    {
        // 取得したidの情報を$add変数にいれる。
        $add = Add::find($id);

        // $add変数に入った情報を消す。
        $add->delete();

        // redirectで出力先の指定。削除したらhttp://localhost/yen/{couple_id}/{category_id}にとぶ。
        return redirect('yen/{couple_id}/{category_id}');
    }

}
