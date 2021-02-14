<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container my-3">
    <h2 class="text-center">แบบฟอร์มบันทึกข้อมูล</h2>
    <form action="insertData.php" method="POST">
        <div class="form-group">
            <label for="firstname">ชื่อพนักงาน</label>
            <input type="text" name="fname" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="lastname">นามสกุลพนักงาน</label>
            <input type="text" name="lname" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="gender">เพศ</label>
            <input type="radio" name="gender" value="male">ชาย
            <input type="radio" name="gender" value="female">หญิง
            <input type="radio" name="gender" value="other">อื่นๆ
        </div>
        <div class="form-group">
            <label for="skills">ทักษะ / ความสามารถ</label>
            <input type="checkbox" name="skills[]" value="Java">Java
            <input type="checkbox" name="skills[]" value="PHP">PHP
            <input type="checkbox" name="skills[]" value="Python">Python
        </div>

        <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
        <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
        <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
    </form>
    </div>

    
</body>
</html>