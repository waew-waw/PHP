<!DOCTYPE html>
<html>
<head>
    <title>PHPdocs</title>
</head>
    <style>
        body {
            font-family: Arial, Verdana;
            font-size:18px;
        }

        button {
            color: rgb(0, 0, 0);
            padding: 14px 48px;
            font-size: 1.5rem;
            cursor: pointer;
            border: 0px;
            background: transparent;
            position: relative;
            transition: all .50s ease;
            margin: 10px;
        }
        .btn-1 {
        background: #000;
        color: #fff;
        border-radius: 30px;
        transition: all .25s ease;
    }
        .btn-1::after,.btn-1::before {
            content: '';
            position: absolute;
            opacity: .3;
            background: #000;
            border-radius: inherit;
            width: 100%;
            height: 100%;
            left: 0px;
            bottom: 0px;
            z-index: -1;
            transition: all .25s ease;
        }
        .btn-1:hover {
            transform: translate(-12px, -12px);
        }
        .btn-1:hover:after {
            transform: translate(6px, 6px);
        }
        .btn-1:hover:before {
            transform: translate(12px, 12px);
        }

        label {
            font-weight: bold;
        }
    </style>
<body>
    <h1 style ="font-size:18px;">กรอกข้อมูลส่วนตัว</h1>
        <form action="show.php">
                <label for = "name">ชื่อ</label><br>
                <input type="text" name="name"><br>
                <label for = "age">อายุ</label><br>
                <input type="text" name="age"><br>
                <label for = "sex" >เพศ</label><br>
                <input type="radio" name="sex" value="ผู้ชาย">ผู้ชาย<br>
                <input type="radio" name="sex" value="ผู้หญิง">ผู้หญิง<br>
                <label for = "status">สถานะ</label><br>
                <input type="radio" name="status" value="แต่งงานแล้ว">แต่งงานแล้ว<br>
                <input type="radio" name="status" value="ยังไม่ได้แต่งงาน">ยังไม่ได้แต่งงาน<br>
                <button class="btn-1">Submit</button>  
        </form>
    </body>
</html>