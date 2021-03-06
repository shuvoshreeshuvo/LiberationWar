<style>
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
    .pp{
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
    .diiv{
        margin-left: auto;
        margin-right: auto;
        border-radius: 10px;
        width: 160px;
        height: 40px;
        margin-top: 4%;
        transition-duration: 0.2s;

    }

    .diiv a{

        text-decoration: none;

    }
    .pp:hover{
        background: #00A65E;
        color:white ;

    }
    .diiv:nth-child(odd){
        transform: perspective(300px) rotateY(45deg);
        box-shadow: -2px 2px 7px gray;
    }
    .diiv:nth-child(even){
        transform: perspective(300px) rotateY(-45deg);
        box-shadow: 2px 2px 7px gray;
    }
    .diiv:hover{
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
        <div id="home" class="diiv"><a href="/"><p id="homep" class="pp">Home</p></a></div>
        <div class="diiv" id="contact"><a href="{!! url('/archive/image'); !!}"> <p class="pp">Gallery</p></a>
        </div>
        <div class="diiv" id="book"><a href="{!! url('/books'); !!}"><p class="pp">Books</p></a>
        </div>
        <div class="diiv" id="freedomfighter"><a href="{!! url('/freedom_fighter'); !!}"><p class="pp">Fighters</p></a>
        </div>
        <div class="diiv" id="contact"><a href="{!! url('/about'); !!}"><p class="pp">Contact</p></a>
        </div>
    </section>


</div>
</div>


