<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>お問い合わせ</title>
</head>

<body>
    <h1>入力確認</h1>
    <form method="POST" action="/complete">
        @csrf
        <div class="mb-3">
            <label for="exampleInputuser_name" class="form-label">*氏名</label>
                {{ $user_name }}
                <input type="hidden" class="form-control" readonly id="exampleInputInquiry_content" name="user_name"
                aria-describedby="Inquiry_content" value="{{ $user_name }}">
            </div>
        <div class="mb-3">
            <label for="exampleInputfurigana" class="form-label">ふりがな</label>
                {{ $furigana }}
                <input type="hidden" class="form-control" readonly id="exampleInputInquiry_content" name="furigana"
                aria-describedby="Inquiry_content" value="{{ $furigana }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputmail_address" class="form-label">*メールアドレス</label>
                {{ $mail_address }}
                <input type="hidden" class="form-control" readonly id="exampleInputInquiry_content" name="mail_address"
                aria-describedby="Inquiry_content" value="{{ $mail_address }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputmail_address_confirmation" class="form-label">*メールアドレス(確認用)</label>
                {{ $mail_address_confirmation }}
                <input type="hidden" class="form-control" readonly id="exampleInputInquiry_content" name="mail_address_confirmation"
                aria-describedby="Inquiry_content" value="{{ $mail_address_confirmation }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputphone_number" class="form-label">電話番号</label>
                {{ $phone_number }}
                <input type="hidden" class="form-control" readonly id="exampleInputInquiry_content" name="phone_number"
                aria-describedby="Inquiry_content" value="{{ $phone_number }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputInquiry_content" class="form-label">*お問合せ内容</label>
                {{ $Inquiry_content }}
                <input type="hidden" class="form-control" readonly id="exampleInputInquiry_content" name="Inquiry_content"
                aria-describedby="Inquiry_content" value="{{ $Inquiry_content }}">
        </div>
        <button type="submit" class="btn btn-primary">送信</button>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>