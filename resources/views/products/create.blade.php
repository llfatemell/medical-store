<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>افزودن محصول</title>
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Tahoma, Arial, sans-serif;
            background: #f4f6f8;
            direction: rtl;
        }

        .form-box {
            width: 450px;
            background: #fff;
            margin: 50px auto;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #0a3d62;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input, textarea, select {
            width: 100%;
            margin-top: 5px;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 14px;
            box-sizing: border-box;
        }

        input:focus, textarea:focus, select:focus {
            border-color: #27ae60;
            outline: none;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background: #27ae60;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #1e8449;
        }
    </style>
</head>

<body>

<div class="form-box">
    <form method="POST" action="{{ url('/admin/products') }}">
        @csrf

        <h3>افزودن محصول جدید</h3>

        <label for="name">نام محصول *</label>
        <input id="name" type="text" name="name" required>

        <label for="price_b2c">قیمت مصرف‌کننده (تومان)</label>
        <input id="price_b2c" type="number" name="price_b2c" min="0" step="0.01">

        <label for="price_b2b">قیمت عمده (تومان)</label>
        <input id="price_b2b" type="number" name="price_b2b" min="0" step="0.01">

        <label for="medical_usage">کاربرد پزشکی *</label>
        <textarea id="medical_usage" name="medical_usage" required></textarea>

        <label for="description">توضیحات</label>
        <textarea id="description" name="description"></textarea>

        <label for="warnings">هشدارها</label>
        <textarea id="warnings" name="warnings"></textarea>

        <label for="order_type">نحوه سفارش *</label>
        <select id="order_type" name="order_type" required>
            <option value="">انتخاب کنید</option>
            <option value="single">فقط تکی</option>
            <option value="single_bulk">تکی و عمده</option>
            <option value="bulk">فقط عمده</option>
        </select>

        <button type="submit">ذخیره محصول</button>
    </form>
</div>

</body>
</html>
