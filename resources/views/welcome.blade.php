<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<title>IP Lab #5</title>
<style>
    body{
        background: #85dede;
    }
    a{
        text-decoration: none;
        color: #151560;
    }
    .header{
        text-align: center;
        background: #3e7e7e;
        color: ghostwhite;
        font-family:Consolas;
    }
    .label{
        text-align: center;
        color: #151560;
        font-family:Consolas;
    }
    table{
        border-collapse:collapse;
        overflow: auto;
        background-color:#eeeed2
    }
    .table td{
        position: relative;
        width: 4em;
        height: 4em;
    }

    .darkcell{
        background-color:#769656
    }
    .image{
        width: 4em;
        height: 4em;
        z-index: -1;
    }
    .image1{
        width: 4em;
        height: 4em;
        visibility: hidden;
    }
    .number{
        position: absolute;
        top: 0;
        color: darkblue;
        font-family:Consolas;
    }
    .letter{
        position: absolute;
        right: 0;
        bottom: 0;
        color: darkblue;
        font-family:Consolas;


    }
    form {
        text-align: center;
        line-height: 30px;
        height: 25%;
        overflow: auto;
    }
    .toppings label, .cheesy label {
        margin-right: 25px;
    }
    *{
        font-family:Consolas;
    }
    button{
        background: #44b9bf;
    }
    button:hover,input.button:hover
    {
        cursor: pointer;
        background: #3e7e7e;
    }
    input.button{
        background: #44b9bf;
    }
    input{
        position: relative;
        width: max-content;
    }
    .canvas{
        height: available;
        width: 60%;
        margin-left: 20%;
    }

    #foot{
        text-align: center;
        color: darkblue;
        background-color: #3e7e7e;
    }
</style>
<body>
<div style="width: 100%;">
    <h3 class="header">This site was created by <a class="link" target="_blank" href="https://github.com/BolotnyaBoss">Svyatoslav Likhtarchyk</a></h3>
    <table id="tab"class="table" style="float: left; width: 40%; margin-left: 5%;">
        <tr>
            <td class="ligthcell"><span class="number">8</span><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/br.png" alt="Black-1"></td>
            <td class="darkcell"></td>
            <td class="ligthcell"><img class="image1" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/br.png" alt="Black-3"></td>
            <td class="darkcell"></td>
            <td class="ligthcell"></td>
            <td class="darkcell"></td>
            <td class="ligthcell"></td>
            <td class="darkcell"><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/bk.png" alt="Black-8"></td>
        </tr>
        <tr>
            <td class="darkcell"><span class="number">7</span></td>
            <td class="ligthcell"><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/bq.png" alt="Black-10"></td>
            <td class="darkcell"></td>
            <td class="ligthcell"><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/bn.png" alt="Black-12"></td>
            <td class="darkcell"></td>
            <td class="ligthcell"><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/bp.png" alt="Black-14"></td>
            <td class="darkcell"><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/br.png" alt="Black-15"></td>
            <td class="ligthcell"><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/bp.png" alt="Black-16"></td>
        </tr>
        <tr>
            <td class="ligthcell"><span class="number">6</span><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/bp.png" alt="Black-17"></td>
            <td class="darkcell"></td>
            <td class="ligthcell"></td>
            <td class="darkcell"></td>
            <td class="ligthcell"><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/bp.png" alt="Black-21"></td>
            <td class="darkcell"><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/wn.png" alt="Black-22"></td>
            <td class="ligthcell"></td>
            <td class="darkcell"><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/wq.png" alt="Black-24"></td>
        </tr>
        <tr>
            <td class="darkcell"><span class="number">5</span></td>
            <td class="ligthcell"><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/bp.png" alt="Black-26"></td>
            <td class="darkcell"></td>
            <td class="ligthcell"><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/bb.png" alt="Black-28"></td>
            <td class="darkcell"></td>
            <td class="ligthcell"></td>
            <td class="darkcell"></td>
            <td class="ligthcell"></td>
        </tr>
        <tr>
            <td class="ligthcell"><span class="number">4</span></td>
            <td class="darkcell"></td>
            <td class="ligthcell"></td>
            <td class="darkcell"></td>
            <td class="ligthcell"></td>
            <td class="darkcell"></td>
            <td class="ligthcell"><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/wr.png" alt="Black-39"></td>
            <td class="darkcell"></td>
        </tr>
        <tr>
            <td class="darkcell"><span class="number">3</span></td>
            <td class="ligthcell"></td>
            <td class="darkcell"></td>
            <td class="ligthcell"></td>
            <td class="darkcell"></td>
            <td class="ligthcell"></td>
            <td class="darkcell"><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/wp.png" alt="Black-47"></td>
            <td class="ligthcell"></td>
        </tr>
        <tr>
            <td class="ligthcell"><span class="number">2</span><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/wp.png" alt="Black-49"></td>
            <td class="darkcell"><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/wp.png" alt="Black-50"></td>
            <td class="ligthcell"></td>
            <td class="darkcell"></td>
            <td class="ligthcell"><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/wp.png" alt="Black-53"></td>
            <td class="darkcell"><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/wp.png" alt="Black-54"></td>
            <td class="ligthcell"></td>
            <td class="darkcell"><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/wp.png" alt="Black-56"></td>
        </tr>
        <tr>
            <td class="darkcell"><span class="number">1</span><span class="letter">a</span></td>
            <td class="ligthcell"><span class="letter">b</span></td>
            <td class="darkcell"><span class="letter">c</span></td>
            <td class="ligthcell"><span class="letter">d</span><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/wr.png" alt="Black-60"></td>
            <td class="darkcell"><span class="letter">e</span></td>
            <td class="ligthcell"><span class="letter">f</span></td>
            <td class="darkcell"><span class="letter">g</span><img class="image" src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/wk.png" alt="Black-63"></td>
            <td class="ligthcell"><span class="letter">h</span></td>
        </tr>
    </table>
    <form class="form-group" method="post" action="/check" style="float: right; width: 30%; padding-right: 15%;">
        <label  class="label"><a class="link" target="_blank" href="https://www.chess.com/learn-how-to-play-chess">Here are game rules</a></label>
        <br>
        @if($errors->any())
            <div class="rule">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf

        <label class="label" for="username">Username:</label>
        <br>
        <input type="text" name="username" id="username">
        <br>
        <label class="label" for="email">Email:</label>
        <br>
        <input type="email" id="email" name="email" >
        <br>
        <label class="label" for="password">Password:</label>
        <br>
        <input type="password" name="password" id="password">
        <br>
        <label class="label" for="age">Your age:</label>
        <br>
        <input id ="age"  name="age" type="number" min="0" step="1">
        <br>
        <label class="label" for="volume">Choose difficultly:</label>
        <br>
        <span>easy</span>
        <input id ="volume"  name="difficulty" type="range" min="0" max="10" step="1">
        <span>expert</span>
        <br>
        <label class="label" for="comment">Comments:</label>
        <br>
        <textarea rows ="3" cols="40" id="comment" name="comment" placeholder="Enter here your comment">
</textarea>
        <br>
            <button type="submit">Submit Data</button>
    </form>

    <br><br>
</div>

<div class="canvas">
    <canvas id="MyChart" ></canvas>
</div>
<footer class="footer" id="foot">
    <p><a href="https://t.me/bolotnya">© Bolotnya Boss</a><br>2021</p>
</footer>
</body>
</html>
