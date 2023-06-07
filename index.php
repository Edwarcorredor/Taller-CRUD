<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Taller CRUD</title>
</head>
<body>
    <div class="container">
        <form>
            <div class="row justify-content-center mt-3">
                <div class="col-4">
                  <input type="text" placeholder="Nombres:">
                </div>
                <div class="col-4">
                  <Label>Campus Lands</Label>
                </div>
            </div>    
            <div class="row justify-content-center mt-3">
                <div class="col-4">
                  <input type="text" placeholder="Apellidos:">
                </div>
                <div class="col-4">
                  <input type="number" placeholder="Edad:">
                </div>
            </div>    
            <div class="row justify-content-center mt-3">
                <div class="col-4">
                  <input type="text" placeholder="Direccion:">
                </div>
                <div class="col-4">
                  <input type="email" placeholder="Email:">
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-4">
                  <input type="time" placeholder="Hora de Entrada:">
                </div>
                <div class="col-2">
                  <input type="submit" value="✅">
                </div>
                <div class="col-2">
                  <input type="submit" value="❌">
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-4">
                  <input type="text" placeholder="Team:">
                </div>
                <div class="col-2">
                  <input type="submit" value="✏️">
                </div>
                <div class="col-2">
                  <input type="submit" value="🔎">
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-4">
                  <input type="text" placeholder="Trainer:">
                </div>
                <div class="col-4">
                  <input type="number" placeholder="Cedula:">
                </div>
            </div>               
        </form>
        <table class="table mt-3">
            <thead>
              <tr>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Direccion</th>
                <th scope="col">Edad</th>
                <th scope="col">Email</th>
                <th scope="col">Hora Entrada</th>
                <th scope="col">Team</th>
                <th scope="col">Trainer</th>
              </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</body>
</html>

