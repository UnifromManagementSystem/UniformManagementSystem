<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @include('layouts.navigation')
    <div style="margin-top:10px;">
        <h1 style="text-align:center;">発注管理システム</h1>

    <p style="text-align:right;">11月の売り上げ(発送完了分): 250000원 </p>
    <p style="text-align:right;">12月の売り上げ(発送完了分): 1240000원</p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">名前</th>
                <th scope="col">Address</th>
                <th scope="col">種類</th>
                <th scope="col">個数</th>
                <th scope="col">合計金額</th>
                <th scope="col">発注日</th>
                <th scope="col">入金状況</th>
                <th scope="col">発送状況</th>
                <th scope="col"></th>
            </tr>
        </thead>
        @foreach($data as $item)
        <tbody name="list">
            <tr id='item'>
                <td>{{$item -> order_number}}</td>
                <td>{{$item -> name}}</td>
                <td>{{$item -> email}}</td>
                <td>{{$item -> product_name}}</td>
                <td>{{$item -> order_count}}</td>
                <td>{{$item -> order_price}}</td>
                <td>{{$item -> order_date}}</td>

                <td>
                    <select class="form-select" id="sel1" aria-label="Default select example">
                        <option value="Completed">入金済</option>
                        <option value="Waiting">入金待ち</option>
                    </select>
                </td>
                <td>
                    <select class="form-select" id="sel2" aria-label="Default select example">
                            <option value="Completed">未</option>
                            <option value="Waiting">発送準備中</option>
                    </select>
                </td>
                <td>
                    <button id="btn_detail" type="button" class="btn btn-outline-info" name="btn_detail" data-bs-toggle="modal" data-bs-target="#readModal">詳細</button>
                    <button id="btn_update" type="button" style="margin-left:10px;" name="btn_update" type="button" class="btn btn-outline-warning">更新</button>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>

    <!-- 발주상세정보 모달창 -->
    <!-- Modal -->
    <div class="modal fade" id="readModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">詳細</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-20">발주정보</div>
                        <div class="col-10">
                            <div class="clearfix">
                                <img style="width:200px; height:200px;"src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX_eZHagNGoHtZvy9RCWiIuR5FHQ0_lJE6CQ&usqp=CAU" class="rounded float-start" alt="...">
                                <p name='p1'>
                                    상품명:
                                </p>
                                <p name='p2'>
                                    합계가격:
                                </p>
                                <p name='p3'>
                                    개수:
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</body>
</html>

<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // $.get('/orderlist', function(res) {
        //     $.ajax({
        //         type : "GET",
        //         url : "/orderlist",
        //         success: function(result) {
        //             console.log('completed');

        //             var tbody = $('#list').get();
        //             console.log(tbody);
        //             var test = $('#sel1').val();
        //             var test2 = $('#sel2').val();
                    

        //         },
        //         error: function(jqXHR, textStatus, errorThrown) {
        //             console.log('error');
        //         }
        //     });
        // });

        //상세정보 버튼 이벤트
        $("#btn_detail").click(function(e) {
            
            var checkBtn = $(this);
            // // checkBtn.parent() : checkBtn의 부모는 <td>이다.
            // // checkBtn.parent().parent() : <td>의 부모이므로 <tr>이다.
            
			var tr = checkBtn.parent().parent();
            var td = tr.children();
            var no = td.eq(0).text();
            console.log(no); // 1만뜸 왠지모르지만

            $.get('/orderlist' + no, function(res) {
                //성공시 동작
                console.log(res);
            });
        });

        //갱신 버튼 이벤트
        $("#btn_update").click(function(e) {

            var checkBtn = $(this);
			var tr = checkBtn.parent().parent();
            var td = tr.children();

            var order_no = td.eq(0).text();
            var user_email = td.eq(2).text();

            var test1 = $('#sel1').val(); // 1 or 2
            var test2 = $('#sel2').val();

            $.ajax({
                type : "POST",
                url : "/orderlist",
                data : {
                  'order_number' : order_no,
                  'id' : user_email,
                  'order_situ' : test1,
                  'deposit_situ' : test2
                },
                success: function(result) {
                    console.log('completed');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('error');
                }
            });
        });

    });
       
</script>