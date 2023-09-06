@extends('layouts.main')
@section('content')
    <section class="breadcum-area breadcum-bg breadcum-bg2 section-padding"
        style="background-image:url({{ asset('data/class_room/2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcum-title">
                        <h2 class="page-title">Overall Flow</h2>
                        <ul class="page-list">
                            <li>
                                <a href="{{ route('home') }}">
                                    Home
                                </a> /
                                <span>Overall Flow</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-who" style="padding: 0px; padding-top: 50px;">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title">
                        <center>
                            <h4 class="s-title">
                                全体の流れ
                            </h4>
                        </center>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <table>
                        <tbody>
                            <tr>

                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 300px; height: 20px; background-color: #f46d28; color: white;">
                                    募集して説明会を開く</th>
                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 500px; height: 20px; background-color: gray; color: white;">
                                    技能実習制度内容を説明、面接、各種テストを行う</th>
                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 300px; height: 20px; background-color: blue; color: white;">
                                    応募者中からピューサン送り出し機関の選抜</th>
                            </tr>

                            <tr>

                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 300px; height: 20px; background-color: #f46d28; color: white;">
                                    1週間のコースく</th>
                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 300px; height: 20px; background-color: gray; color: white;">
                                    技能実習生としての基礎知識、雇用条件書に関する講義、失踪　・難民申請について講習などを教育する</th>
                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 300px; height: 20px; background-color: blue; color: white;">
                                    技能実習制度の知識と日本のことをよく知る</th>
                            </tr>


                            <tr>

                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 300px; height: 20px; background-color: #f46d28; color: white;">
                                    日本語教育く <br><br></th>
                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 300px; height: 20px; background-color: gray; color: white;">
                                    TOKYO 日本語学校にて日本語　５級、４級　教育</th>
                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 300px; height: 20px; background-color: blue; color: white;">
                                    無断で遅刻、欠席　3回やったら退学処分</th>
                            </tr>

                            <tr>

                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 300px; height: 20px; background-color: #f46d28; color: white;">
                                    日本企業・監理団体の要望 (求人書・デマンドレター)を提出く</th>
                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 300px; height: 20px; background-color: gray; color: white;">
                                    面接予定日の1ヶ月前までに受け入れ条件が記載された要望書と雇用条件書を提出</th>
                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 300px; height: 20px; background-color: blue; color: white;">
                                    要望書内容で募集・応募者に健康診断受けてもらう</th>
                            </tr>

                            <tr>

                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 300px; height: 20px; background-color: #f46d28; color: white;">
                                    面接</th>
                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 300px; height: 20px; background-color: gray; color: white;">
                                    面接選考会の実施。面接終了後、監理団体様・受け入れ企業様から雇用条件書の説明。
                                    ミャンマー国内書類申請を開始。 </th>
                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 300px; height: 20px; background-color: blue; color: white;">
                                    受け入れ企業様が直接選抜</th>
                            </tr>

                            <tr>

                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 300px; height: 20px; background-color: #f46d28; color: white;">
                                    出国まで間の教育 <br><br></th>
                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 300px; height: 20px; background-color: gray; color: white;">
                                    日本駐在の従業員が実習生と連絡取り・日本の生活サポート</th>
                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 300px; height: 20px; background-color: blue; color: white;">
                                    日本でサポートデスクを設置</th>
                            </tr>


                            <tr>

                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 300px; height: 20px; background-color: #f46d28; color: white;">
                                    技能習得後 ミャンマーへ帰国後</th>
                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 300px; height: 20px; background-color: gray; color: white;">
                                    習得した技実・経験でミャンマー国内企業さんへご紹介する 特定技能実習制度でまた日本の企業へご紹介をする</th>
                                <th scope="col"
                                    style="text-align: left; border: 1px solid #24257a; width: 300px; height: 20px; background-color: blue; color: white;">
                                </th>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row justify-content-center py-5">
                <div class="col-lg-12 col-md-12">
                    <img src="{{ asset('data/ac1.png') }}" alt="">
                </div>
            </div>



            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <div class="section-title">
                        <center>
                            <h4 class="s-title">
                                特定技能実習生受け入れの流れ
                            </h4>
                        </center>
                    </div>

                    <p>
                        日本で技能実習生として3年間実習した人材、またはミャンマー国内で日本語検定試験5級　(介護職種の場合　4級) ,
                        職種評価試験合格した人材をご紹介しております。外食業、介護業、建築業、他職種の人材確保しており、気軽に取り合わせください。PHYU
                        SAN送り出し機関と提携してる登録支援機関ございますので、登録支援機関と繋がりがない企業様もご気軽にご相談お願いします。
                    </p>

                    <p>
                        受け入れの流れとして先に企業さんから要望(求人書・デマンドレター)を提出して頂き、面接手配をいたします。その後採用した人材のミャンマー出国申請手続きと日本の入国ビザ申請手続きを行います。審査期間(面接してから入国まで)
                        はだいたい4ヶ月間くらいかかります。
                    </p>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <img src="{{ asset('data/ac2.jpg') }}" alt="">
                </div>
            </div>


            <div class="row justify-content-center">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <img src="{{ asset('data/ac3.jpg') }}" alt="">
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="section-title">
                        <center>
                            <h4 class="s-title">
                                エンジニア（外国人技術者）
                            </h4>
                        </center>
                    </div>

                    <p>
                        ミャンマーの高度学歴持ってる生徒達を就労ビザで日本企業さんのところで努めております。高度学部とは　ITエンジニア、IT
                        デザイン、プログラマー、建築デザイン(CAD)資格持ってる人材は多くいらしゃいます。そうな若者達を日本語を教育しながら日本企業達に紹介を行っております。行政書士事務所と提携しておりますので、受け入れに関して必要な日本在留資格申請手続き業務も受け付けております、面接から日本入国まで全面的にサポート致しま。入国後日本での勤務・生活開始後の悩みを完全にサポートします。
                    </p>

                    <p>
                        受け入れ流れとしては先ず企業さんから要望(求人書・デマンドレター)を提出して頂き、面接手配をいたします。その後採用した人材のミャンマー出国申請手続きと日本の入国ビザ申請手続きを行います。審査期間(面接してから入国まで)
                        はだいたい10ヶ月間くらいかかります。
                    </p>
                </div>

                
            </div>

        </div>
    </section>
@endsection
