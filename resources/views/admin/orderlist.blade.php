<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align:center;">発注管理システム</h1>

    <p style="text-align:right;">11月の売り上げ(発送完了分): 250000원 </p>
    <p style="text-align:right;">12月の売り上げ(発送完了分): 1240000원</p>
    <table class="table">
        <thead>

            <tr>
            <th scope="col">No</th>
            <th scope="col">名前</th>
            <th scope="col">種類</th>
            <th scope="col">個数</th>
            <th scope="col">合計金額</th>
            <th scope="col">発注日</th>
            <th scope="col">入金状況</th>
            <th scope="col">発送状況</th>
            <th scope="col">   </th>
            </tr>

        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>홍길동1</td>
            <td>유니폼A</td>
            <td>3</td>
            <td>62000</td>
            <td>2020/11/20</td>
            <td>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">入金済</option>
                    <option value="2">入金待ち</option>
                </select></td>
            <td>
                <select class="form-select" aria-label="Default select example">
                        <option value="1">発送準備中</option>
                        <option value="2">未</option>
                </select></td>
            </td>
            <td><button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#readModal">詳細</button><button style="margin-left:10px;" type="button" class="btn btn-outline-warning">更新</button></td>
            </tr>


            <tr>
            <th scope="row">2</th>
            <td>홍길동2</td>
            <td>유니폼B</td>
            <td>1</td>
            <td>24000</td>
            <td>2020/12/08</td>
            <td>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">入金済</option>
                    <option value="2">入金待ち</option>
                </select></td>
            </td>
            <td>
                <select class="form-select" aria-label="Default select example">
                        <option value="1">発送準備中</option>
                        <option value="2">未</option>
                </select></td>
            </td>
            <td><button type="button" class="btn btn-outline-info" >詳細</button><button style="margin-left:10px;" type="button" class="btn btn-outline-warning">更新</button></td>
            
            </tr>

            <tr>
            <th scope="row">3</th>
            <td>홍길동3</td>
            <td>유니폼C</td>
            <td>1</td>
            <td>25000</td>
            <td>2020/10/25</td>
            <td>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">入金済</option>
                    <option value="2">入金待ち</option>
                </select></td>
            </td>
            <td>
                <select class="form-select" aria-label="Default select example">
                        <option value="1">発送準備中</option>
                        <option value="2">未</option>
                </select></td>
            </td>
            <td><button type="button" class="btn btn-outline-info">詳細</button><button style="margin-left:10px;"type="button" class="btn btn-outline-warning">更新</button></td>
            </tr>


            <tr>
            <th scope="row">4</th>
            <td>홍길동4</td>
            <td>유니폼B</td>
            <td>2</td>
            <td>42000</td>
            <td>2020/11/12</td>
            <td>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">入金済</option>
                    <option value="2">入金待ち</option>
                </select></td>
            </td>
            <td>
                <select class="form-select" aria-label="Default select example">
                        <option value="1">発送準備中</option>
                        <option value="2">未</option>
                </select></td>
            </td>
            <td><button type="button" class="btn btn-outline-info">詳細</button><button style="margin-left:10px;" type="button" class="btn btn-outline-warning">更新</button></td>
            </tr>



          

        </tbody>
        
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
                                <p>
                                    상품명: 유니폼A
                                </p>
                                <p>
                                    합계가격: 45000원
                                </p>
                                <p>
                                    개수: 3
                                </p>
                            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>