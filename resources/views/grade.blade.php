<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>
         Grade
    </title>
    </head>
    <body>
        <div class="container-sm">
            <h1>Students Grades</h1>

            <form action="/compute-grades" method="POST">
            <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
            <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
            <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
            @csrf 
            <div class="row">
                <label>Student: <strong> {{ $student_1 }}</strong></label>
                <div class="col col-md-4">
                    <label>Midterm grade</label>
                    <input type="number" name="s1_grade1" class="form-control">
                </div>
                <div class="col col-md-4">
                    <label>Finals grade</label>
                    <input type="number" name="s1_grade1" class="form-control">
                </div>
            </div>
            <hr>
            <div class="row">
                <button class="btn btn-primary btn-lg" type="submit">
                    Compute Average grade
                </button>
            </div>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
    
