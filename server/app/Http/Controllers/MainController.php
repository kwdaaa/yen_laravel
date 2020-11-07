<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Addクラス(モデル)を読み込む
use App\Add;

// Totalクラス(モデル)を読み込む
use App\Total;

// Categoryクラス(モデル)を読み込む
use App\Category;

// Coupleクラス(モデル)を読み込む
use App\Couple;


class MainController extends Controller
{
    //////////////////////////////////////////////////
    // 00:ふたりの合計、Aさんの合計、Bさんの合計画面
    public function both()
    {
        $id = 1;
        // Coupleテーブル(モデル)$idの情報取得
        $couple = Couple::find($id);

        return view('yen.both', ['couple' => $couple]);
    }



    //////////////////////////////////////////////////
    // 01:各カテゴリーの合計画面
    // category_id：１（食費）
    // category_id：２（日用品費）
    // category_id：３（娯楽費）
    // category_id：４（固定費）
    // category_id：５（その他）
    public function index($id, $category_id)
    {
        // Coupleテーブル(モデル)$idの情報取得
        $couple = Couple::find($id);

        // couple_id($i)に該当するTotalテーブル(モデル)の情報を取得
        // $i = 1 だったら、Totalテーブルの「カラム名：couple_id」が「1」の情報だけ取得
        $foods_person1 = Add::where('couple_id', $id)->where('category_id', 1)->where('person', 1)->get();
        $foods_person2 = Add::where('couple_id', $id)->where('category_id', 1)->where('person', 0)->get();

        $dailies_person1 = Add::where('couple_id', $id)->where('category_id', 2)->where('person', 1)->get();
        $dailies_person2 = Add::where('couple_id', $id)->where('category_id', 2)->where('person', 0)->get();

        $leisures_person1 = Add::where('couple_id', $id)->where('category_id', 3)->where('person', 1)->get();
        $leisures_person2 = Add::where('couple_id', $id)->where('category_id', 3)->where('person', 0)->get();

        $housings_person1 = Add::where('couple_id', $id)->where('category_id', 4)->where('person', 1)->get();
        $housings_person2 = Add::where('couple_id', $id)->where('category_id', 4)->where('person', 0)->get();

        $others_person1 = Add::where('couple_id', $id)->where('category_id', 5)->where('person', 1)->get();
        $others_person2 = Add::where('couple_id', $id)->where('category_id', 5)->where('person', 0)->get();


        switch ($category_id) {
                // 食費
            case '1':
                return view('yen.indexFood', compact('couple', 'foods_person1', 'foods_person2'));
                break;

                // 日用品費
            case '2':
                return view('yen.indexDaily', compact('couple', 'dailies_person1', 'dailies_person2'));
                break;

                // 娯楽費
            case '3':
                return view('yen.indexLeisure', compact('couple', 'leisures_person1', 'leisures_person2'));
                break;

                // 固定費
            case '4':
                return view('yen.indexHousing', compact('couple', 'housings_person1', 'housings_person2'));
                break;

                // その他
            case '5':
                return view('yen.indexOther', compact('couple', 'others_person1', 'others_person2'));
                break;

            default:
                echo '表示できません';
                break;
        }
    }



    //////////////////////////////////////////////////
    // 02-1:登録画面
    public function create()
    {
        $id = 1;

        // Coupleテーブル(モデル)$idの情報取得
        $couple = Couple::find($id);
        
        $category = Category::all();

        // $add = new Add;

        // dd($add);

        return view('yen.create', compact('couple', 'category', 'id'));
    }

    // 02-2:登録機能
    public function store(Request $request)
    {
        // Coupleテーブル(モデル)$idの情報取得
        // $couple = Couple::find($id);
        $id = 1;
        $category_id = $request->category_id;

        // Addクラス(モデル)を$addにインスタンス化
        $add = new Add;
        // $add = Add::where('couple_id', $id)->get();

        // 値の用意
        // $request->dateに入ってきた値を$add->dateに入れ直す。
        $add->couple_id = 1;

        // $request->dateに入ってきた値を$add->dateに入れ直す。
        $add->date = $request->date;

        // $request->personに入ってきた値を$add->personに入れ直す。
        $add->person = $request->person;

        // $request->priceに入ってきた値を$add->priceに入れ直す。
        $add->price = $request->price;

        // $request->category_idに入ってきた値を$add->category_idに入れ直す。
        $add->category_id = $request->category_id;

        // addのtimestampsは設定されているからtrue
        $add->timestamps = true;

        // インスタンスに値を設定して保存
        $add->save();


        $this->total($id);
        // $total = new Total;
        // $total = Total::find(1);

        // switch ($request->person && $request->category_id) {
        //     case '1 && 1':
        //         $total->person1_food_total += $request->price;
        //         break;
            
        //     default:
        //         # code...
        //         break;
        // }

        // redirectで出力先の指定。登録したらhttp://localhost/yen/{id}/{category_id}にとぶ。
        return redirect("yen/$id/$category_id");
    }

    private function total($id)
    {
        $adds = Add::where('couple_id', $id)->get();
        $total = Total::find($id);

        $total->person1_food_total = $adds->where('person',1)->where('category_id',1)->pluck('price')->sum();
        $total->person2_food_total = $adds->where('person',0)->where('category_id',1)->pluck('price')->sum();
        $total->both_food_total = $adds->where('category_id',1)->pluck('price')->sum();

        $total->person1_daily_total = $adds->where('person',1)->where('category_id',2)->pluck('price')->sum();
        $total->person2_daily_total = $adds->where('person',0)->where('category_id',2)->pluck('price')->sum();
        $total->both_daily_total = $adds->where('category_id',2)->pluck('price')->sum();

        $total->person1_leisure_total = $adds->where('person',1)->where('category_id',3)->pluck('price')->sum();
        $total->person2_leisure_total = $adds->where('person',0)->where('category_id',3)->pluck('price')->sum();
        $total->both_leisure_total = $adds->where('category_id',3)->pluck('price')->sum();

        $total->person1_housing_total = $adds->where('person',1)->where('category_id',4)->pluck('price')->sum();
        $total->person2_housing_total = $adds->where('person',0)->where('category_id',4)->pluck('price')->sum();
        $total->both_housing_total = $adds->where('category_id',4)->pluck('price')->sum();

        $total->person1_other_total = $adds->where('person',1)->where('category_id',5)->pluck('price')->sum();
        $total->person2_other_total = $adds->where('person',0)->where('category_id',5)->pluck('price')->sum();
        $total->both_other_total = $adds->where('category_id',5)->pluck('price')->sum();
        
        $total->person1_total = $adds->where('person',1)->pluck('price')->sum();
        $total->person2_total = $adds->where('person',0)->pluck('price')->sum();
        $total->both_total = $adds->pluck('price')->sum();
        
        $total->save();

        // $total->person1_food_total += $request->price;
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
    public function edit($add_id)
    {        
        // 取得したidの情報を$add変数にいれる。
        $add = Add::find($add_id);

        // Coupleテーブル(モデル)$idの情報取得
        $couple = Couple::find(1);

        $categories = Category::all();

        // yenティレクトリーの中のedit.blade.phpページを指定し、キー「add」にバリュー「$add」を渡す。
        return view('yen.edit', compact('add', 'couple', 'categories'));
    }

    // 04-2:編集機能
    // ここはidで探して持ってくる以外はstoreと同じ
    // Route::patch('/yen/1/{add_id}/add', 'MainController@update');
    public function update(Request $request, $add_id)
    {

        $id = 1;
        // Addクラス(モデル)を$addにインスタンス化
        $add = new Add;

        // 取得したidの情報を$add変数にいれる。
        $add = Add::find($add_id);
        $add_id = $add_id;

        // Coupleテーブル(モデル)$idの情報取得
        // $couple = Couple::find($id);
        // $id = 1;
        // $category_id = $request->category_id;

        // $add = Add::where('couple_id', $id)->get();

        // 値の用意
        // $request->dateに入ってきた値を$add->dateに入れ直す。
        $add->couple_id = 1;

        // $request->dateに入ってきた値を$add->dateに入れ直す。
        $add->date = $request->date;

        // $request->personに入ってきた値を$add->personに入れ直す。
        $add->person = $request->person;

        // $request->priceに入ってきた値を$add->priceに入れ直す。
        $add->price = $request->price;

        // $request->category_idに入ってきた値を$add->category_idに入れ直す。
        $add->category_id = $request->category_id;

        // addのtimestampsは設定されているからtrue
        $add->timestamps = true;

        // インスタンスに値を設定して保存
        $add->save();

        $this->total($id);

        // redirectで出力先の指定。編集したらhttp://localhost/yen/{couple_id}/{category_id}にとぶ。
        return redirect("yen/1/$request->category_id");
    }



    //////////////////////////////////////////////////
    // 05:削除機能
    public function destroy($add_id)
    {

        $id = 1;

        // 取得したidの情報を$add変数にいれる。
        $add = Add::find($add_id);

        // $add変数に入った情報を消す。
        $add->delete();

        $this->total($id);

        // redirectで出力先の指定。削除したらhttp://localhost/yen/{couple_id}/{category_id}にとぶ。
        return redirect("yen/1/$add->category_id");
    }


    // 全て削除機能
    public function alldestroy($id)
    {
        $id = 1;

        $total = Total::find($id);

        $total->person1_food_total = 0;
        $total->person1_daily_total = 0;
        $total->person1_leisure_total = 0;
        $total->person1_housing_total = 0;
        $total->person1_other_total = 0;
        $total->person1_total = 0;
        
        $total->person2_food_total = 0;
        $total->person2_daily_total = 0;
        $total->person2_leisure_total = 0;
        $total->person2_housing_total = 0;
        $total->person2_other_total = 0;
        $total->person2_total = 0;
        
        $total->both_food_total = 0;
        $total->both_daily_total = 0;
        $total->both_leisure_total = 0;
        $total->both_housing_total = 0;
        $total->both_other_total = 0;
        $total->both_total = 0;

        $total->save();

        // return redirect("yen/");
        return view('yen.config');
    }
}
