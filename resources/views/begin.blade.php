<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>
        Begin 
    </title>
    </head>
    <body>
    <div class="container-sm">
        <h1> Students Name </h1>

        <form action="/enter-grades" method="POST" class="studentsUnique">
            @csrf
            @for ($i = 1; $i <= 5; $i++)
            <div class="row">
                <label> Student {{ $i }} Name:</label>
                <input class="form-control" name="name_{{ $i }}" type="text" required>
            </div>
            @endfor
            <hr>
            <div class="row">
                <button type="submit" class="btn btn-primary btn-lg">Enter Name</button>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        var frm = document.querySelector('form.studentsUnique');
        var inputs = frm.querySelectorAll('input[type=text]');
            frm.addEventListener('submit', function(e) {
            e.preventDefault();
            var classArr = [];
            for(var i = 0; i < inputs.length; i++) {
                if(classArr.indexOf(inputs[i].value) != -1) {
                    inputs[i].style.backgroundColor = "red";
                    inputs[i].style.color = "white";
                    alert("Please enter a unique value.");
                    return false;
                }
                else
                classArr.push(inputs[i].value);
            }
            frm.submit();
        });
    for(var j = 0; j < inputs.length; j++) {
        inputs[j].addEventListener('focus', function() {
        this.style.backgroundColor = "white";
        this.style.color = "black";
    });
}
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
    s