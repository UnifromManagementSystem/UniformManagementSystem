
<!DOCTYPE html>
<html>
  <head>
    <title>상세페이지</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      .class1{
        font-size:40px;
        font-weight:'bold';
      }
      .class2{
        font-size:20px;
        font-weight:'bold';
      }

    </style>
    
  </head>

<center>
  <body id="product_page" class="theme">
   
    <main class="main" id="main">
      <div class="fade-in wrapper">       

<div class="product-page">

  <div class="product-images" >
    <ul class="slides">
      
      <!--상품 이미지 -->
        
          <img class="product" style="width:400px; height:400px;" src="/img/{{$product -> product_image}}" data-src="/img/{{$product -> product_image}}" data-srcset="/img/{{$product -> product_image}} ">
        
      
    </ul>
  </div>
  <div class="product-page-headings" style="padding-bottom:30px;">
    
    <label class="class1">{{$product -> product_name}}</label>
    
  </div>

  <div class="product-price">
        <label class="class2"><span class="currency_sign">価額：{{$product -> product_price}}円</span></label>
    </div>

  <div class="product-details">
    
      <div class="product-description">
        <label class="class2">{{$product -> product_text}}</label>
      </div>
    
    
  </div>


  <div class="product-details">

    <form action="/uniformlist/{product_number}" method="POST">
    @csrf
      <label class="class2">
      購買個数
      </label>
      <input type='number' id="order_count" name='order_count' value="1"/>
      <input type='hidden' id="order_situ" name='order_situ' value="waiting"/>
      <input type='hidden' id="deposit_situ" name='deposit_situ' value="waiting"/>
      <input type='hidden' id="order_price" name='order_price' value="{{$product -> product_price}}"/>
      <input type='hidden' id="product_number" name='product_number' value="{{$product -> product_number}}"/>

      <button type="submit" class="btn btn-default" style="position: static;">購買</button>

  </form>
    
    
  </div>
</div>

        
      </div>
    </main>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cache1.bigcartel.com/theme_assets/6/2.4.12/theme.js?v=1"></script>
    
      <script>
        var show_sold_out_product_options = 'false';
        Product.find('laravel-royal-sticker-pack', processProduct)
      </script>
    
  </body>
  </center>
</html>