<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>فروشگاه تجهیزات پزشکی</title>

    <style>
        body {
            font-family: Tahoma, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 0;
            direction: rtl;
        }

        .container {
            width: 90%;
            margin: 40px auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        .card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }

        .card h3 {
            margin-top: 0;
            color: #0a3d62;
        }

        .price {
            margin: 10px 0;
        }

        .price span {
            display: block;
            margin-bottom: 5px;
        }

        .badge {
            display: inline-block;
            padding: 4px 10px;
            font-size: 12px;
            border-radius: 6px;
            color: #fff;
        }

        .single { background: #27ae60; }
        .bulk { background: #c0392b; }
        .single_bulk { background: #2980b9; }

        .section-title {
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>محصولات تجهیزات پزشکی</h1>

    <div class="products">
        @foreach($products as $product)
            <div class="card">
                <h3>{{ $product->name }}</h3>

                <div class="price">
                    @if($product->price_b2c)
                        <span>💊 قیمت مصرف‌کننده: {{ number_format($product->price_b2c) }} تومان</span>
                    @endif

                    @if($product->price_b2b)
                        <span>🏥 قیمت عمده: {{ number_format($product->price_b2b) }} تومان</span>
                    @endif
                </div>

                <div class="section-title">کاربرد پزشکی:</div>
                <p>{{ $product->medical_usage }}</p>

                @if($product->description)
                    <div class="section-title">توضیحات:</div>
                    <p>{{ $product->description }}</p>
                @endif

                @if($product->warnings)
                    <div class="section-title">هشدارها:</div>
                    <p>{{ $product->warnings }}</p>
                @endif

                <div style="margin-top:15px;">
                    @if($product->order_type == 'single')
                        <span class="badge single">فقط فروش تکی</span>
                    @elseif($product->order_type == 'bulk')
                        <span class="badge bulk">فقط فروش عمده</span>
                    @else
                        <span class="badge single_bulk">فروش تکی و عمده</span>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>
