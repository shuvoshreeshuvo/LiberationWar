<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .stage{
        height: 100%;
        width: 170px;
        position: fixed;
        z-index: 1;
        top:0;
        left: 0;
        overflow-x: hidden;
        padding-top: 200px;
        background: #ff6666;
    }
    .p{
        font-size: 30px;
        text-align: center;
        margin-top: 0;
        cursor: pointer;
        width: 100%;
        background:white;
        color:  #ff3333;
        border-radius: 10px;
        font-family: Century Gothic;
        letter-spacing: 3px;
        text-decoration: none;


    }
    .div{
        margin-left: auto;
        margin-right: auto;
        border-radius: 10px;
        width: 160px;
        height: 40px;
        margin-top: 4%;
        transition-duration: 0.2s;

    }

    .div a{

        text-decoration: none;

    }
    .p:hover{
        background: #00A65E;
        color:white ;

    }
    .div:nth-child(odd){
        transform: perspective(300px) rotateY(45deg);
        box-shadow: -2px 2px 7px gray;
    }
    .div:nth-child(even){
        transform: perspective(300px) rotateY(-45deg);
        box-shadow: 2px 2px 7px gray;
    }
    .div:hover{
        transform: rotateY(0);
        background: white;
        color: black;
        box-shadow: 0px 0px 0px;
        text-decoration: none;

    }

</style>
<div class="container">

<div class="col-md-3 ">

    <section class="stage">
        <div id="home" class="div"><a href="/"><p id="homep" class="p">Home</p></a></div>
        <div class="div" id="contact"><a href="{!! url('/archive/image'); !!}"> <p class="p">Gallery</p></a>
        </div>
        <div class="div" id="book"><a href="{!! url('/books'); !!}"><p class="p">Books</p></a>
        </div>
        <div class="div" id="freedomfighter"><a href="{!! url('/freedom_fighter'); !!}"><p class="p">Fighters</p></a>
        </div>
        <div class="div" id="contact"><a href="{!! url('/about'); !!}"><p class="p">Contact</p></a>
        </div>
    </section>


</div>
</div>


