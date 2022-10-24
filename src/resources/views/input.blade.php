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
    <h1>お問い合わせ</h1>
    <form method="POST" action="/">
        @csrf
        <div class="mb-3">
            <label for="exampleInputuser_name" class="form-label">氏名*</label>
            <input type="user_name" class="form-control" id="exampleInputuser_name" name="user_name"
                aria-describedby="user_nameHelp" value="{{old('user_name')}}">
                @if ($errors->first('user_name'))
                    @foreach($errors->get('user_name') as $message)
                        <p class="validation">*{{ $message }}</p>
                    @endforeach
                @endif
        </div>
        <div class="mb-3">
            <label for="exampleInputfurigana" class="form-label">ふりがな</label>
            <input type="furigana" class="form-control" id="exampleInputfurigana" name="furigana"
                aria-describedby="furiganaHelp" value="">
        </div>
        <div class="mb-3">
            <label for="exampleInputmail_address" class="form-label">メールアドレス*</label>
            <input type="mail_address" class="form-control" id="exampleInputmail_address" name="mail_address"
                aria-describedby="mail_addressHelp" value="{{old('mail_address')}}">
                @if ($errors->first('mail_address'))
                    @foreach($errors->get('mail_address') as $message)
                        <p class="validation">*{{ $message }}</p>
                    @endforeach
                @endif
        </div>
        <div class="mb-3">
            <label for="exampleInputmail_address_confirmation" class="form-label">メールアドレス(確認用)*</label>
            <input type="mail_address_confirmation" class="form-control" id="exampleInputmail_address_confirmation" name="mail_address_confirmation"
                aria-describedby="mail_address_confirmationHelp" value="{{old('mail_address_confirmation')}}">
                @if ($errors->first('mail_address_confirmation'))
                    @foreach($errors->get('mail_address_confirmation') as $message)
                        <p class="validation">*{{ $message }}</p>
                    @endforeach
                @endif
        </div>
        <div class="mb-3">
            <label for="exampleInputphone_number" class="form-label">電話番号</label>
            <input type="phone_number" class="form-control" id="exampleInputphone_number" name="phone_number"
                aria-describedby="phone_numberHelp" value="">
        </div>
        <div class="mb-3">
            <label for="exampleInputInquiry_content" class="form-label">お問合せ内容*</label>
            <input type="Inquiry_content" class="form-control" id="exampleInputInquiry_content" name="Inquiry_content"
                aria-describedby="Inquiry_contentHelp" value="{{old('Inquiry_content')}}">
                @if ($errors->first('Inquiry_content'))
                    @foreach($errors->get('Inquiry_content') as $message)
                        <p class="validation">*{{ $message }}</p>
                    @endforeach
                @endif
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